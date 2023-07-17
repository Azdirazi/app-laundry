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
            $table->foreignId('costomer_id')
                ->references('id')
                ->on('costomers')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('type_id')
                ->references('id')
                ->on('type')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->date("do_receipt");
            $table->date("do_completion");
            $table->integer("heavy",11);
            $table->tinyText('notes');
            $table->integer("total_pay",11);
            $table->integer("pay_status",11);
            $table->integer("retrieval_status",11);
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
