<?php
namespace App\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetCustomerInfo extends Controller
{
    public function test(Request $request) //__invoke
    {
        return response()->json(123);
    }

}