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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->String("reportable_type");
            $table->bigInteger('reportable_id')->unsigned()->nullable();
            $table->index('reportable_id');
            $table->bigInteger('report')->unsigned()->nullable();
            $table->index('report');
            $table->String("comment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
