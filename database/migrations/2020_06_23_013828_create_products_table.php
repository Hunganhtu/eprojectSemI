<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->unique();
            $table->string('slug',100)->unique();
            $table->unsignedInteger('cat_id');
            $table->string('image');
            $table->string('image_detail');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->text('priviacy')->nullable();
            $table->text('service')->nullable();
            $table->text('paramaster')->nullable();
            $table->string('related_product')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
