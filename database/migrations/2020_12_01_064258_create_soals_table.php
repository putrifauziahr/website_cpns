<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->bigInteger('id_soal');
            $table->text('pertanyaan');
            $table->enum('kategori', ['TWK', 'TKP', 'TIU']);
            $table->enum('jawaban', ['a', 'b', 'c', 'd', 'e']);
            $table->text('a');
            $table->text('b');
            $table->text('c');
            $table->text('d');
            $table->text('e');
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
        Schema::dropIfExists('soals');
    }
}
