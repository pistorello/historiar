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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome atribuído ao patrimônio
            $table->text('description')->nullable(); // Descrição do patrimônio
            $table->string('category'); // Categoria fixa - MATERIAL / NÃO-MATERIAL
            $table->string('sub_category'); // Categorias adicionais - Local, Objeto, etc
            $table->string('location')->nullable(); // Localização do patrimônio
            $table->json('people_involved')->nullable(); // Histórico e transformações ao longo do tempo
            $table->json('historical')->nullable(); // Histórico e transformações ao longo do tempo
            $table->json('significance')->nullable(); // Significado cultural para a comunidade
            $table->json('stages')->nullable(); // Etapas do processo cultural
            $table->json('materials')->nullable(); // Materiais utilizados
            $table->json('techniques')->nullable(); // Modos de fazer e técnicas
            $table->json('products')->nullable(); // Principais produtos resultantes do saber
            $table->json('attire')->nullable(); // Vestimentas vinculadas ao saber
            $table->json('expressions')->nullable(); // Corporais: Danças, encenações/ Orais: Musicas, Orações, etc  
            $table->json('objects')->nullable(); // Objetos utilizados
            $table->json('structure_resources')->nullable(); // Estruturas e recursos necessários
            $table->json('transmissions')->nullable(); // Como o saber é transmitido
            $table->json('cultural_assets')->nullable(); // Bens culturais relacionados
            $table->json('evaluations')->nullable(); // Pontos positivos e negativos do patrimônio
            $table->json('recommendations')->nullable(); // Recomendações para preservação
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
