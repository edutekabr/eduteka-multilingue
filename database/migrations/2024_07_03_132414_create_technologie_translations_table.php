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
        Schema::create('technologie_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('technologie_id')->unsigned();
            $table->string('locale')->index();
            $table->text('description');

            $table->unique(['technologie_id', 'locale']);
            $table->foreign('technologie_id')->references('id')->on('technologies')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologie_translations');
    }
};
