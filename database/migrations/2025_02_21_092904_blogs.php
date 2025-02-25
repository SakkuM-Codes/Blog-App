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

        Schema::create('categorys', function(Blueprint $table){
            $table->id();
            $table->string('category_name');
            $table->string('category_image');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('excerpt');
            $table->text('content');
            $table->string('duration');
            $table->boolean('is_feature')->default();
            $table->string('slug');
            $table->foreignId('category_id')->constrained('categorys')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('categorys');
        
    }
};
