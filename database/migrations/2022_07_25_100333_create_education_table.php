<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('edu_school')->nullable();
            $table->string('edu_degree')->nullable();
            $table->string('edu_field_of_study')->nullable();
            $table->string('edu_start_date')->nullable();
            $table->string('edu_end_date')->nullable();
            $table->string('edu_address')->nullable();
            $table->string('edu_city')->nullable();
            $table->string('edu_state')->nullable();
            $table->string('edu_zip')->nullable();
            $table->string('edu_school_url')->nullable();
            $table->string('edu_nationality')->nullable();
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
        Schema::dropIfExists('education');
    }
};
