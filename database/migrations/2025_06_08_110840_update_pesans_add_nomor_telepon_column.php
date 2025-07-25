<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePesansAddNomorTeleponColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::table('pesans', function (Blueprint $table) {
            $table->string('nomor_telepon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesans', function (Blueprint $table) {
            $table->dropColumn('nomor_telepon');
        }); //
    }
}
