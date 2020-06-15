<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyModifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('foreignkey_modify', function (Blueprint $table) {
//
//        });

//        Schema::table('posts', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
//        });

//        Schema::table('posts', function (Blueprint $table) {
//            $table->foreignId('user_id')->constrained();
//        });

//        Schema::table('posts', function (Blueprint $table) {
//            $table->foreignId('user_id')->constrained('users');
//            $table->foreignId('user_id')->constrained()->onDelete('cascade');
//            $table->foreignId('user_id')->nullable()->constrained();
//        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('foreignkey_modify', function (Blueprint $table) {
//            //
//        });

//        Schema::table('posts', function (Blueprint $table) {
//            $table->dropForeign('posts_user_id_foreign');
//        });

//        Schema::table('posts', function (Blueprint $table) {
//            $table->dropForeign(['user_id']);
//        });

        Schema::disableForeignKeyConstraints();
    }
}
