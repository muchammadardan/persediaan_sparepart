<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMekaniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mekaniks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sparepart');
            $table->string('kode_sparepart');
            $table->integer('jumlah');
            $table->string('tempat');
            $table->integer('min_stock');
            $table->integer('max_stock');
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
        Schema::dropIfExists('mekaniks');
    }
}
