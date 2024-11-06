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
            $table->unsignedBigInteger('loan_detail_id');
            $table->unsignedBigInteger('charge');
            $table->boolean('amount');

            $table->foreign('loan_detail_id')->references('id')->on('loan_details')->onUpdate('cascade')->onDelete('cascade');
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
