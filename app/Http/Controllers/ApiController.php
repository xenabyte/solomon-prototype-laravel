<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //fetch directory function
    public function getDirectories() {

        $get_directories = DB::table('business_directories')->get();

        return response()->json(['data', $get_directories], 200);
    }

    //view directory function
    public function getDirectory($id) {

        $get_directory = DB::table('business_directories')->where('id', $id)->get();

        return response()->json(['data', $get_directory], 200);
    }
    //fetch directory function
    public function searchDirectory(Request $request) {

        $business_name = $request['business_name'];


        $search_directory = DB::table('business_directories')->where('business_name', 'LIKE', '%'.$business_name.'%')->get();

        return response()->json(['data', $search_directory], 200);
    }

}
