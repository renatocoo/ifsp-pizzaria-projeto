<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('celular', function (Blueprint $table) {
            $table->id();
            $table->char('marca', 100);
            $table->char('modelo', 100);
            $table->decimal('preco', $precision = 8,$scale = 2);
            $table->tinyinteger('largura');
            $table->tinyinteger('altura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulars');
    }
};
