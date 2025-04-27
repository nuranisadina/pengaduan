<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('judul_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('kategori');
            $table->enum('status', ['terbuka', 'diproses', 'selesai'])->default('terbuka');
            $table->date('tanggal_pengaduan');
            $table->softDeletes(); // <--- untuk soft delete
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
