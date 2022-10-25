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
        Schema::create('login_retentions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->references('id')->on('users');
            $table->ipAddress('login_ip');
            $table->dateTime('login_time');
            $table->string('user_agent');
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
        Schema::dropIfExists('login_retentions');
    }
};
