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
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')
                ->references('id')
                ->on('customers')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('types_id')
                ->references('id')
                ->on('types')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->date("do_receipt");
            $table->date("do_completion");
            $table->integer("heavy",);
            $table->tinyText('notes');
            $table->integer("total_pay");
            $table->integer("pay_status");
            $table->integer("retrieval_status");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundries');
    }
};
