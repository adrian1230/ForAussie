<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocspoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socspo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',20);
            $table->string('subheader',20)->nullable();
            $table->string('tag',40)->nullable();
            $table->string('image',30)->nullable();
            $table->string('author',50);
            $table->timestamps();
            $table->longtext('content',370);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socspo');
    }
}
