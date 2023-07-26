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
        Schema::create('repots', function (Blueprint $table) {
            $table->id();
            $table->date("date_report");
            $table->integer("desc_report");
            $table->tinyText("note");
            $table->foreignId('laundries_id')
                ->references('id')
                ->on('laundries')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->timestamps();
            $table->integer("income");
            $table->foreignId('expends_id')
                ->references('id')
                ->on('expends')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repots');
    }
};
