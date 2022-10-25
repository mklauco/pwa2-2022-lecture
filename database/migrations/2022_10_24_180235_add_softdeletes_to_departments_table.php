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
        // method up()
        Schema::table('departments', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        
        // method down()
        Schema::table('departments', function (Blueprint $table) {
            // method down()
            $table->dropSoftDeletes();
        });
    }
};
