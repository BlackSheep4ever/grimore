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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('spell_class');
            $table->string('spell_level');
            $table->string('spell_name');
            $table->string('spell_school');
            $table->string('casting_time');
            $table->string('range');
            $table->string('duration');
            $table->string('components');
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
        Schema::dropIfExists('spells');
    }
};
