<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_chamados', function (Blueprint $table) {
            $table->id();
            $table->string('original_name');
            $table->string('path');
            $table->unsignedBigInteger('chamado_id');
            $table->foreign('chamado_id')->references('id')->on('chamados')->onDelete('cascade');
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
        Schema::dropIfExists('files_chamados');
    }
}
