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
        Schema::create('feats', function (Blueprint $table) {
            $table->id();
            $table->string('feat_name', 100);
            $table->string('requirements')->nullable();
            $table->longText('description');
            $table->string('source');
            $table->string('tag');
            $table->longText('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('feats');
    }
};
