<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pub_files', function (Blueprint $table) {
            $table->id();
            $table->integer('file_id');
            $table->integer('publication_id');
        });

        Schema::table('pub_files', function (Blueprint $table) {
            $table->index(['publication_id', 'file_id']);
        });

        Schema::table('publication', function (Blueprint $table) {
            $table->dropColumn('file_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pub_files');
    }
}
