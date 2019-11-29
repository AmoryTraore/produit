<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produits_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            // $table->timestamps();

            $table->foreign('produits_id')->references('id')->on('produits')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('categories_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits_categories');
    }
}
