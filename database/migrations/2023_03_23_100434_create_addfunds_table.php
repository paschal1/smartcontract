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
        Schema::create('addfunds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->mediumText('amount');
            $table->longText('invest');
            $table->string('city');
            $table->string('info');
            $table->string('image');
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
        Schema::dropIfExists('addfunds');
    }
};
