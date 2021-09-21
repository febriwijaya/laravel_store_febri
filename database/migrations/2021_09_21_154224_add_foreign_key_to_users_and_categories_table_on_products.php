<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUsersAndCategoriesTableOnProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->foreign('users_id')->references('id')->on('users')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('categories_id')->references('id')->on('categories')
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
        Schema::table('products', function (Blueprint $table) {
          $table->dropForeign('products_users_id_foreign');
          $table->dropForeign('products_categories_id_foreign');
        });
    }
}
