<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino', function (Blueprint $table) {
            $table->id(); // id PRIMARY KEY, auto-increment
            $table->string('nome', 100); 
            $table->string('descricao', 500); 
            $table->foreignId('aluno_id')->constrained('aluno')->onDelete('cascade');
            $table->foreignId('professor_id')->constrained('professor')->onDelete('cascade');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
