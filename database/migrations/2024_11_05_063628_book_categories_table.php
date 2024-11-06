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
        schema:: craete('loan_details',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('categories_id');

            $table->foreign('book_id')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
