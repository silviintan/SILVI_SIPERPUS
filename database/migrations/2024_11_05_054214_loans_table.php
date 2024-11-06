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
        schema:: craete('loans',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
