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
Schema::table('departments', function (Blueprint $table) {
    $table->foreignId('director_id')->nullable()->default(null)->references('id')->on('users');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
Schema::table('departments', function (Blueprint $table) {
    $table->dropForeign(['director_id']); // what for array []
});
    }
};
