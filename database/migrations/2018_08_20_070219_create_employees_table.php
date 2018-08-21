<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fanily_name', 100);
            $table->string('given_name', 100);
            $table->string('fanily_name_kana', 100);
            $table->string('given_name_kana', 100);
            $table->string('beacon_id', 100);
            $table->string('divison_id', 100);
            $table->string("birthday");
            $table->string("hire_date");
            $table->string('position', 100);
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
        Schema::dropIfExists('employees');
    }
}
