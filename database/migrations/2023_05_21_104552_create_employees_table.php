<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('investor_id')->contrained();
            $table->foreignId('state_id')->contrained();
            $table->string('name');
            $table->string('phone', 20);
            $table->string('passport_number', 10);
            $table->string('country');
            $table->text('vaccine1')->nullable();
            $table->text('vaccine2')->nullable();
            $table->text('vaccine3')->nullable();
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
