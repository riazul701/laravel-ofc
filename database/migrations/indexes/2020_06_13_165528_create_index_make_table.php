<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexMakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('index_make', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();

//            $table->string('email')->unique();

//            $table->string('email');
//            $table->unique('email');

//            $table->integer('account_id');
//            $table->timestamp('created_at');
//            $table->index(['account_id', 'created_at']);

//            $table->string('email');
//            $table->unique('email', 'unique_email');

//            $table->integer('id');
//            $table->primary('id');

//            $table->integer('id');
//            $table->integer('parent_id');
//            $table->primary(['id', 'parent_id']);

//            $table->string('state');
//            $table->index('state');

//            $table->string('location');
//            $table->spatialIndex('location');
//        });

//        Schema::create('users', function (Blueprint $table) {
//            $table->string('email');
//            $table->index('email');

//            $table->integer('user_id');
//            $table->primary('user_id');

//            $table->string('email')->unique();

//            $table->string('geo_state_index');
//            $table->index('geo_state_index');

//            $table->string('location');
//            $table->spatialIndex('location');
//        });

        Schema::create('geo', function (Blueprint $table) {
            $table->string('state');
            $table->index('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('index_make');
//        Schema::dropIfExists('users');
        Schema::dropIfExists('geo');
    }
}
