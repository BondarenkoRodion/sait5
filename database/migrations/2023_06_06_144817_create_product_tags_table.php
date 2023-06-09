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
        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('product_id','product_tag_product_idx')->on('products')->references('id');
            $table->foreign('tag_id','product_tag_tag_idx')->on('tags')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tags');
    }
};
