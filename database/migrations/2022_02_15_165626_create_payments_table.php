<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // user id as a foreign key
            $table->unsignedBigInteger('user_id');
            $table->string('date');
            $table->string('amount_in_words');
            $table->integer('amount_in_figures');
            $table->string('payable_to');
            $table->string('discription');
            $table->string('department');
            $table->longText('document_path');
            //referencing user table to make user_id a foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
