<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string("tittle");
            $table->string("slug");
            $table->string("description");
            $table->string("author");
            $table->string("publisher");
            $table->string("cover");
            $table->float("price");
            $table->integer("views");
            $table->integer("stock");
            $table->enum('status',['PUBLISH', 'DRAFT']);
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
        Schema::dropIfExists('books');
    }
};