<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_2')->create('student_exam', function (Blueprint $table) {
            $table->id();
            if(Schema::hasTable('students')) {
                $table->integer('student_id');
            }
            if(Schema::hasColumn('courses', 'id')) {
                $table->integer('course_id');
            }
            if(Schema::hasColumns('results', array('id', 'created_at', 'updated_at'))) {
                $table->integer('result_id');
            }
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
        Schema::connection('mysql_2')->dropIfExists('student_exam');
    }
}
