<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function createDirectory()
    {
        return view('create_directory');
    }

    public function index()
    {
        //Count the directories
        $dir_check = DB::table('business_directories')->get();
        $dir_count = count($dir_check);


        return view('home', ['dir_count' => $dir_count]);
    }

    //Add Business Directory
    public function addDirectory(Request $request) {
        //Validating the post request from the form
        $this->validate($request, [
            'business_name' => 'required|min:1',
            'office_contact' => 'required|min:1',
            'office_address' => 'required|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'business_description' => 'required|min:1'
        ]);

        //Obtain the values
        $current_time = \Carbon\Carbon::now()->toDateTimeString();
        $business_name = $request['business_name'];
        $office_contact = $request['office_contact'];
        $office_address = $request['office_address'];
        $business_description = $request['business_description'];

        $slug = str_slug($business_name);

        $image_name = $slug . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/business_images'), $image_name);

        //Check against recurring business name
        $check_business_name = DB::table('business_directories')->where([
            ['business_name', '=', $business_name],
        ])->get();

        $business_name_count = count($check_business_name);

        if($business_name_count < 1) {

            //Add record to database.
            DB::table('business_directories')->insert([
                'business_name' => $business_name,
                'office_contact' => $office_contact,
                'office_address' => $office_address,
                'business_description' => $business_description,
                'image' => $image_name,
                'created_at' => $current_time,
                'updated_at' => $current_time
            ]);

            return redirect()->route('create_directory')->with('directory_message', 'Business Directory Created Successfully');
        }else{
            return redirect()->route('create_directory')->with('directory_error', 'Error in creating business directory');
        }

    }

    public function getDirectories()
    {
        //get the directories
        $get_directories = DB::table('business_directories')->get();

        return view('get_directories', ['get_directories' => $get_directories]);
    }

    public function removeDirectories(Request $request)
    {
        //remove directories

        $business_id = $request['id'];

        DB::table('business_directories')->where('id', '=', $business_id)->delete();

        return redirect()->route('get_directories')->with('directory_message', 'Business information deleted successfully');
    }

    public function updateDirectory($id)
    {
        //update directories

        $business_data = DB::table('business_directories')->where('id', $id)->first();

        return view('update_directory', ['business_data' => $business_data]);
    }

    public function saveDirectory(Request $request)
    {
        //Validating the post request from the form
        $this->validate($request, [
            'id' => 'required|min:1',
            'business_name' => 'required|min:1',
            'office_contact' => 'required|min:1',
            'office_address' => 'required|min:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'business_description' => 'required|min:1'
        ]);

        //Obtain the values
        $current_time = \Carbon\Carbon::now()->toDateTimeString();
        $business_id = $request['id'];
        $business_name = $request['business_name'];
        $office_contact = $request['office_contact'];
        $office_address = $request['office_address'];
        $business_description = $request['business_description'];
        $image = $request['image'];
        $slug = str_slug($business_name);

        $prevBusinessName = DB::table('business_directories')->where('id', $business_id)->value('business_name');


        //Check against recurring business name
        $check_business_name = DB::table('business_directories')->where([
            ['business_name', '=', $business_name],
        ])->get();

        $business_name_count = count($check_business_name);

        if($business_name_count < 1 || $business_name == $prevBusinessName)  {

            DB::table('business_directories')->where('id', '=', $business_id)->update(['business_name' => $business_name]);
            DB::table('business_directories')->where('id', '=', $business_id)->update(['office_contact' => $office_contact]);
            DB::table('business_directories')->where('id', '=', $business_id)->update(['office_address' => $office_address]);
            DB::table('business_directories')->where('id', '=', $business_id)->update(['business_description' => $business_description]);

            if($image != NULL){
                $image_name = $slug . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/business_images'), $image_name);
                DB::table('business_directories')->where('id', '=', $business_id)->update(['image' => $image_name]);
            }


            return redirect()->route('get_directories')->with('directory_message', 'Changes Saved');
        }else{
            return redirect()->route('get_directories')->with('directory_error', 'Error in saving changes');
        }

    }

}
