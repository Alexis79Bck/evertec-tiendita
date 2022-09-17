<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status', 20);
<<<<<<<< HEAD:database/migrations/2022_09_16_022143_create_orders_table.php
            $table->foreignId('customer_id')->constrained('customers');
========
            $table->foreignId('customer_id')->constrained();
>>>>>>>> 66cb4cdc8c87558ef38b76c735aa9779eba32761:database/migrations/2022_09_16_130056_create_orders_table.php
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
        Schema::dropIfExists('orders');
    }
}
