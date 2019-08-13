<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Business_directories;


class ApiController extends Controller
{
    //fetch directory function
    public function getDirectories() {

        $get_directories = DB::table('business_directories')->get()->toJson(JSON_PRETTY_PRINT);
        return $get_directories;
    }

    //view directory function
    public function getDirectory($id) {

        $get_directory = DB::table('business_directories')->where('id', $id)->get()-toArray();

        return response()->json(['data', $get_directory], 200);
    }
    //fetch directory function
    public function searchDirectory(Request $request) {

        $business_name = $request['business'];

        $search_directory = DB::table('business_directories')->where('business_name', 'LIKE', '%'.$business_name.'%')->get()->toJson(JSON_PRETTY_PRINT);

        return $search_directory;
    }

}
