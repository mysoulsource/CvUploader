<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('highest_degree')->nullable();
            $table->string('completed_date')->nullable();
            $table->string('organization')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('skills')->nullable();
            $table->string('rating')->nullable();
            $table->string('interest')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('experience')->nullable();
            $table->string('awards_title')->nullable();
            $table->string('awards_year')->nullable();
            $table->string('awards_organization')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('reference_contact')->nullable();
            $table->string('reference_associated')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
