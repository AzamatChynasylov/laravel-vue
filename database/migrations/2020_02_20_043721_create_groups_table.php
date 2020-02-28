<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
						$table->bigIncrements('id');
						$table->tinyInteger('level_id')->nullable();
						$table->string('title')->unique();
            $table->integer('parent_id')->default(0);
            $table->tinyInteger('published')->nullable();
            $table->integer('created_by')->nullable();
						$table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('groups');
    }
}
