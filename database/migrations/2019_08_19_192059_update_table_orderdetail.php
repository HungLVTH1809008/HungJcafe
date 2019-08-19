<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableOrderdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderdetail', function (Blueprint $table) {
            $table->foreign("Order_id")->references("Order_id")->on("Order");
            $table->foreign("Product_id")->references("Product_id")->on("Product");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderdetail', function (Blueprint $table) {
            $table->dropForeign(["Order_id"]);
            $table->dropForeign(["Product_id"]);
        });
    }
}
