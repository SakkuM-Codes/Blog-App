<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('blogs', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('excerpt');  
            $table->text('content');
            $table->string('duration');
            $table->tinyInteger('is_feature')->default(0);
            $table->string('slug');
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
    }
};
