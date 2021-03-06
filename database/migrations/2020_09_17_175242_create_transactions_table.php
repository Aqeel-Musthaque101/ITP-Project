<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("invoice_number");
            $table->string("description");
            $table->unsignedBigInteger("quantity_or_peices");
            $table->unsignedBigInteger("price_per_quantity");

            $table->enum("payment_type",["cash","cheque_wholesale","cheque_supplier"]);

            $table->unsignedBigInteger("cash")->nullable();

            $table->unsignedBigInteger("cheque_payment_id")->nullable();

            // Error thrown from this line. Because wholesale customer table is not exist right now.

            // $table->unsignedBigInteger("wholesale_customer_id")->nullable();

            // $table->foreign("wholesale_customer_id")->references("id")->on("wholesale_customer");

            $table->unsignedBigInteger("retail_customer_id")->nullable();
            $table->unsignedBigInteger("wholesale_customer_id")->nullable();

            $table->foreign("retail_customer_id")->references("id")->on("retail_customer");

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
        Schema::dropIfExists('transaction');
    }
}
