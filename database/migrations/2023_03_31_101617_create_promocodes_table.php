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
        Schema::create('promocodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('store_name');
            $table->string('store_link');
            $table->string('store_description');
            $table->string('offer');
            $table->text('description');
            $table->integer('use_time');
            $table->integer('used_time');
            $table->boolean('favorite')->default(false);
            $table->boolean('approved')->default(false);
            $table->boolean('valid')->default(true);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocodes');
    }
};
