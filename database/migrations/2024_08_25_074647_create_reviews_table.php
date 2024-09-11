<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->bigInteger('book_id')->unsigned();
            $table->index('book_id');
            $table->bigInteger('star')->unsigned()->nullable();
            $table->index('star');
            $table->bigInteger('report')->unsigned()->nullable();
            $table->index('report');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
