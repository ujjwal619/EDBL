<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetCustomerInfoController extends Controller
{
    public function index(Request $request) //__invoke
    {
        $branchName = 'lsdkjf';
        $mainCode = '123';
        // dd($branchName, $mainCode);

        // make connection to another db
        dd(DB::connection('sqlsrv1')->select('* from E_AcDetails'));
    $customer = DB::connection('sqlsrv1')->table('E_AcDetails')->where('BranchCode', $branchName)
        ->where('MainCode', $mainCode)->first();
        // qeury table on that db
        // get 1 row
        dd($customer);
        
        return response()->json($customer);
    }

}