<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name');
            $table->string('pages');
            $table->string('due_Date');
            $table->integer('due_Time');
            $table->string ('work_Level')->nullable();
            $table->string('files')->nullable();
            $table->string('reference_Style_Id')->nullable();
            $table->string('weightage')->nullable();
            $table->string('priceYear')->nullable();
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
        Schema::dropIfExists('assignments');
    }
}
