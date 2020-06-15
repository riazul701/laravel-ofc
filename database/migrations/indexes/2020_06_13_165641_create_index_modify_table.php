<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexModifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('index_modify', function (Blueprint $table) {
//            //
//        });

//        Schema::table('users', function (Blueprint $table) {
//            $table->renameIndex('users_email_index', 'email_index');
//            $table->dropPrimary('PRIMARY');
//            $table->dropUnique('users_email_unique');
//            $table->dropIndex('geo_state_index');
//            $table->dropSpatialIndex('geo_location_spatialindex');
//        });

        Schema::table('geo', function (Blueprint $table) {
            $table->dropIndex(['state']); // Drops index 'geo_state_index'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('index_modify', function (Blueprint $table) {
//            //
//        });

//        Schema::table('users', function (Blueprint $table) {
//            //
//        });
    }
}
