<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
    /**
     * Run the migrations.
     */
    Schema::create('blogs_categorys', function (Blueprint $table) {
        // Remove the auto-incrementing ID
        // $table->id();

        // Define foreign keys
        $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
        $table->foreignId('category_id')->constrained('categorys')->onDelete('cascade');

        // Define composite primary key
        $table->primary(['blog_id', 'category_id']);

        // Timestamps (optional for pivot tables)
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
