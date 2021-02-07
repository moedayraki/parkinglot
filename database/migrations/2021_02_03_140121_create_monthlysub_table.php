<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlysubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Monthly_Subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->double('amount');
            $table->boolean('paid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Monthly_Subscribers');
    }
}
