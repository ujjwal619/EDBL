<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'Id','ClientType','BranchCode','MainCode','ClientCode',
        'CustomerName','CustomerFName','CustomerMName','CusDOB',
        'CustomerPAdd','CustomerCAdd','Addressofctzshp',
        'CusContactNum','CusCtnshpNum','CusCtzshpDistrict',
        'CusImagename','file_path'
        ];
    use HasFactory;
}
