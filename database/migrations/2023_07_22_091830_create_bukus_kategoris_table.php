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
        Schema::create('bukus_kategoris', function (Blueprint $table) {
            // Foreign Key Constraints
            $table->foreignUuid('buku_id')->references('id')->on('bukus');
            $table->foreignUuid('kategori_id')->references('id')->on('kategoris');

            // Setting The Primary Keys
            $table->primary(['buku_id', 'kategori_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
