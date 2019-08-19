<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->foreign("Category_id")->references("Category_id")->on("Category");
            $table->foreign("Customer_id")->references("Customer_id")->on("Customer");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->dropForeign(["Category_id"]);
            $table->dropForeign(["Customer_id"]);
        });
    }
}
