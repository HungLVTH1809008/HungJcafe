<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->bigIncrements('Product_id');
            $table->string("Product_name");
            $table->unsignedBigInteger("Category_id");
            $table->unsignedBigInteger("Customer_id");
            $table->string("Detail");
            $table->decimal("Price");
            $table->string("Status");
            $table->binary("Image");
            $table->Date("Date");
            $table->decimal("PriceNew");
            $table->string("Order");
            $table->unsignedTinyInteger("active")->default(1);
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
        Schema::dropIfExists('Product');
    }
}
