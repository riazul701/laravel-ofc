<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatatypeDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatype_detail', function (Blueprint $table) {
            // Available Column Types
//            $table->id(); // Column: id bigint(20) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->foreignId('user_id'); // bigint(20) UNSIGNED
//            $table->bigIncrements('id'); // bigint(20) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->bigInteger('votes'); // bigint(20)
//            $table->binary('data'); // blob
//            $table->boolean('confirmed'); // tinyint(1)
//            $table->char('name', 100); // char(100)
//            $table->date('created_at'); // date
//            $table->dateTime('created_at', 0); // datetime
//            $table->dateTimeTz('created_at', 0); // datetime
//            $table->decimal('amount', 8, 2); // decimal(8,2)
//            $table->double('amount', 8, 2); // double(8,2)
//            $table->enum('level', ['easy', 'hard']); // enum('easy', 'hard')
//            $table->float('amount', 8, 2); // double(8,2)
//            $table->geometry('positions'); // geometry
//            $table->geometryCollection('positions'); // geometrycollection
//            $table->increments('id'); // int(10) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->integer('votes'); // int(11)
//            $table->ipAddress('visitor'); // varchar(45)
//            $table->json('options');  // DataType: longtext  Collation: utf8mb4_bin
//            $table->jsonb('options'); // DataType: longtext  Collation: utf8mb4_bin
//            $table->lineString('positions'); // linestring
//            $table->longText('description'); // longtext
//            $table->macAddress('device'); // varchar(17)
//            $table->mediumIncrements('id'); // mediumint(8) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->mediumInteger('votes');  // mediumint(9)
//            $table->mediumText('description'); // mediumtext
//            $table->morphs('taggable'); // Column: taggable_type varchar(255)  Column: taggable_id bigint(20)
//            $table->uuidMorphs('taggable'); // Column: taggable_type varchar(255)  Column: taggable_id char(36)
//            $table->multiLineString('positions');  // multilinestring
//            $table->multiPoint('positions'); // multipoint
//            $table->multiPolygon('positions'); // multipolygon
//            $table->nullableMorphs('taggable'); // Column: taggable_type varchar(255)  Column: taggable_id bigint(20)
//            $table->nullableUuidMorphs('taggable'); // Column: taggable_type varchar(255)  Column: taggable_id char(36)
//            $table->nullableTimestamps(0); // Column: created_at timestamp  Column: updated_at timestamp
//            $table->point('position'); // point
//            $table->polygon('positions'); // polygon
//            $table->rememberToken(); // Column: remember_token varchar(100)
//            $table->set('flavors', ['strawberry', 'vanilla']); // set('strawberry', 'vanilla')
//            $table->smallIncrements('id'); // smallint(5) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->smallInteger('votes'); // smallint(6)
//            $table->softDeletes('deleted_at', 0); // timestamp
//            $table->softDeletesTz('deleted_at', 0); // timestamp
//            $table->string('name', 100); // varchar(100)
//            $table->text('description'); // text
//            $table->time('sunrise', 0); // time
//            $table->timeTz('sunrise', 0); // time
//            $table->timestamp('added_on', 0); // timestamp
//            $table->timestampTz('added_on', 0); // timestamp
//            $table->timestamps(0); // Column: created_at timestamp  Column: updated_at timestamp
//            $table->timestampsTz(0); // Column: created_at timestamp  Column: updated_at timestamp
//            $table->tinyIncrements('id'); // tinyint(3) UNSIGNED AUTO_INCREMENT PrimaryKey
//            $table->tinyInteger('votes'); // tinyint(4)
//            $table->unsignedBigInteger('votes'); // bigint(20) UNSIGNED
//            $table->unsignedDecimal('amount', 8, 2); // decimal(8,2) UNSIGNED
//            $table->unsignedInteger('votes'); // int(10) UNSIGNED
//            $table->unsignedMediumInteger('votes'); // mediumint(8) UNSIGNED
//            $table->unsignedSmallInteger('votes'); // smallint(5) UNSIGNED
//            $table->unsignedTinyInteger('votes'); // tinyint(3) UNSIGNED
//            $table->uuid('id'); // char(36)
//            $table->year('birth_year'); // year(4)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datatype_detail');
    }
}
