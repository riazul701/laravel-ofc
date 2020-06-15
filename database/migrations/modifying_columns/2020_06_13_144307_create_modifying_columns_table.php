<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModifyingColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('users', function (Blueprint $table) {
//            $table->string('name', 50)->change();
//        });

//        Schema::table('users', function (Blueprint $table) {
//            $table->string('name', 50)->nullable()->change();
//        });

//        Schema::table('users', function (Blueprint $table) {
//            $table->renameColumn('name', 'user_name');
//        });

//        Schema::table('users', function (Blueprint $table) {
//            $table->dropColumn('votes');
//        });

//        Schema::table('users', function (Blueprint $table) {
//            $table->dropColumn(['votes', 'avatar', 'location']);
//        });

        // Available Command Aliases
        Schema::table('users', function (Blueprint $table) {
//            $table->dropMorphs('morphable');
//            $table->dropRememberToken();
//            $table->dropSoftDeletes();
//            $table->dropSoftDeletesTz();
//            $table->dropTimestamps();
            $table->dropTimestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('users');
    }
}
