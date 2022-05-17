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
        Schema::create('log_conversoes_moeda', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); 
            $table->text('payload'); 
            $table->timestamps();
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
        Schema::dropIfExists('log_conversoes_moeda');
    }
};
