<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        // ? books table relation
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');;                
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;                
        });
         // ? favourites table relation
         Schema::table('locations', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');;                
        });
        // ? favourites table relation
        Schema::table('favourites', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');;                
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;                
        });
        // ? reviews table relation
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');;                
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;                
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('relationships');
    }
};
