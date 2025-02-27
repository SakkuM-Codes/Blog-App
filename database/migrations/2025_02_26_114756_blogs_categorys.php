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
        Schema::create('blogs_categorys', function (Blueprint $table) {
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categorys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('blogs_categorys');
    }
};
