<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',40); 
            $table->decimal('valor', $precision = 10, $scale = 2);
            $table->timestamps();
            $table->boolean('ativo'); 
            $table->engine = 'InnoDB';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }   
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxas');
    }
};
