<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Order', function (Blueprint $table) {
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
        Schema::table('Order', function (Blueprint $table) {
            $table->dropForeign(["Customer_id"]);
        });
    }
}
