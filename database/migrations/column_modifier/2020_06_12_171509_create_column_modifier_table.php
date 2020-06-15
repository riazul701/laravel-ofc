<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnModifierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('column_modifier', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->timestamps();

//            $table->string('class')->after('name');
//            $table->integer('student_id')->autoIncrement(); // int(11) AUTO_INCREMENT PrimaryKey
//            $table->string('name')->charset('utf8mb4'); // DataType: varchar(255)  Collation: utf8mb4_general_ci
//            $table->string('name')->collation('utf8mb4_unicode_ci'); // DataType: varchar(255)  Collation: utf8mb4_unicode_ci
//            $table->string('name')->comment('my comment'); // DataType: varchar(255)  Collation: utf8mb4_unicode_ci  Comments: my comment
//            $table->string('class')->default('Ten'); // DataType: varchar(255)  Default: Ten
//            $table->string('session')->first();
//            $table->string('name')->nullable(true);
//            $table->string('name')->storedAs(); // DataType: varchar(255)  Extra: STORED GENERATED
//            $table->integer('student_id')->unsigned(); // int(10) UNSIGNED
//            $table->timestamp('created_at')->useCurrent(); // DataType: timestamp  Default: current_timestamp()
//            $table->string('name')->virtualAs(); // DataType: varchar(255)  Extra: VIRTUAL GENERATED
//            $table->string('name')->generatedAs();
//            $table->string('name')->always();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('column_modifier');
    }
}
