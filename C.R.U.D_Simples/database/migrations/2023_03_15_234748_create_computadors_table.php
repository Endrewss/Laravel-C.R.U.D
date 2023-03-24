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
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->decimal('preco', 14,2);
            $table->integer('ram');
            $table->integer('disco');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computadors');
    }
};
