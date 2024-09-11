<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author_name')->nullable();
            $table->string('title');
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
            $table->bigInteger('download')->unsigned()->nullable();
            $table->index('download');
            $table->string('locations')->nullable();
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
