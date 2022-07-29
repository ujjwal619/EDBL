<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use Illuminate\Http\Response;
use DB;
class GetAcInfo extends Controller

{
 
    // onfocus trigger for Main Code
    public static function customerdetails()
    {
        //$branchName = $request->get('branch_name');
    //    return Response;
        // $getPost = DB::table('acinfo')->select(''.$BranchCode.'')->select(''.$MainCode.'');
        $BranchCode = '001';
            $MainCode = '00112600177140000001';
            $getPost = DB::table('acinfo')->select(''.$BranchCode.'')->select(''.$MainCode.'')->first();
            echo gettype($getPost);
            // dd($getPost);
            // return view('home.index',['getPost']); // {'c_father_name': 'aksdfjkds', 'askdfj'}
    }
}
