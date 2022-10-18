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
Schema::table('users', function (Blueprint $table) {
    $table->renameColumn('name', 'first_name');
    $table->string('last_name')->after('name'); // rename is done after columns are added
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
// method down
Schema::table('users', function (Blueprint $table) {
    $table->renameColumn('first_name', 'name');
    $table->dropColumn('last_name');
});
    }
};
