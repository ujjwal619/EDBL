<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table){
            $table->id();
            $table->String('ClientType');
            $table->String('BranchCode');
            $table->string('MainCode');
            $table->integer('ClientCode');
            $table->string('CustomerName');
            $table->string('CustomerFName');
            $table->string('CustomerMName');
            $table->date('CusDOB')->nullable();
            $table->string('CustomerPAdd');
            $table->string('CustomerCAdd');
            $table->string('Addressofctzshp');
            $table->integer('CusContactNum')->bigint();
            $table->string('CusCtnshpNum');
            $table->string('CusCtzshpDistrict');
            $table->string('CusImagename')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }        
};
