<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->on('users')
                ->references('id');
            $table->bigInteger('transaction_id');
            $table->bigInteger('amount');
            $table->integer('last_4');
            $table->string('card_id');
            $table->json('meta_data');
            $table->string('transaction_ip');
            $table->enum('status',['0','1',])->nullable()->default('0')->comment('1 => Success, 2 => Failed');
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
        Schema::dropIfExists('user_payments');
    }
}
