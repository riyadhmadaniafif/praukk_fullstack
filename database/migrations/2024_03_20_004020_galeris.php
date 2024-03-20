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
        Schema::create('galerisfoto', function (Blueprint $table) {
            $table->id();
            $table->string('namagambar/foto');
            $table->string('waktupengambilan');
            $table->string('tempatpenambilan');
            $table->enum('benua',['Asia','Amerika','Afrika','Australia','Eropa','Antartika']);
            $table->biginteger('nomorseri');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerisfoto');
    }
};
