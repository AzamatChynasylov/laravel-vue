<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
						$table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('phone');
            $table->longText('address')->nullable();
            $table->tinyInteger('status');
            $table->date('dateregistered');
            $table->integer('user_id');
						$table->integer('group_id');
						$table->text('extra_information')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admissions');
    }
}
