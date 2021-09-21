<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTransactionsAndProductsTableOnTransactionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
          $table->foreign('transactions_id')->references('id')->on('transactions')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('products_id')->references('id')->on('products')
          ->onUpdate('cascade')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropForeign('transaction_details_transactions_id_foreign');
            $table->dropForeign('transaction_details_products_id_foreign');
        });
    }
}
