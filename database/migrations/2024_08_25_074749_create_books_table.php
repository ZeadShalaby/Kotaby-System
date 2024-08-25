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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('language');
            $table->bigInteger('num_pages')->unsigned()->nullable();
            $table->index('num_pages');
            $table->bigInteger('dep_id')->unsigned();  //? departments 
            $table->index('dep_id');
            $table->bigInteger('user_id')->unsigned(); 
            $table->index('user_id');
            $table->bigInteger('star')->unsigned()->nullable(); 
            $table->index('star');
            $table->bigInteger('view')->unsigned()->nullable();
            $table->index('view');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
