<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
class CreatePostProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        //  $procedure = "DROP PROCEDURE IF EXISTS `Get_Ac_Detail`;
        //      CREATE PROCEDURE `Get_Ac_Detail` (IN MainCode int)
        //      BEGIN
        //      select * from EXCELSERVER.PPIVExcelDBL.dbo.[E_AcDetails] where MainCode = MainCode;
        //      END;";

        //      \DB::unprepared($procedure); 

    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedure');
    }
}
