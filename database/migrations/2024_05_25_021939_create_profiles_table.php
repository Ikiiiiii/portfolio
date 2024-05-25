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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->text('alamat');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('tempat',50);
            $table->date('tanggal');
            $table->string('status',50);
            $table->text('foto');
            $table->string('ig',50);
            $table->string('fb',50);
            $table->text('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
