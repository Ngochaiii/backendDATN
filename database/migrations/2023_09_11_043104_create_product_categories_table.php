<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('product_categories', function (Blueprint $table) {
            $table->unsignedInteger('cate_id')->primary();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
        Schema::table('products', function($table) {
            $table->foreign('cate_id')->references('cate_id')->on('product_categories');
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
            $table->dropForeign('products_cate_id_foreign');

    });
}
}