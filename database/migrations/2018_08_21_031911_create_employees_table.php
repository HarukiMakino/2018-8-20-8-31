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

            $table->string('family_name', 100);
            $table->string('given_name', 100);
            $table->string('family_name_kana', 100);
            $table->string('given_name_kana', 100);
            $table->string('beacon_id', 100)->nullable();
            $table->string('division_id', 100);
            $table->date('birthday');
            $table->date('hire_date');
            $table->string('position', 100);
            $table->timestamp('positioned_at')->nullable();

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
