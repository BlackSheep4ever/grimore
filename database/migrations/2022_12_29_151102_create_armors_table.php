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
        Schema::create('armors', function (Blueprint $table) {
            $table->id();
            $table->string('armor_name');
            $table->string('armor_type');
            $table->string('class_armor');
            $table->string('requirements')->nullable();
            $table->longText('description')->nullable();
            $table->string('penalty')->nullable();
            $table->string('cost');
            $table->string('Weight');
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
        Schema::dropIfExists('armors');
    }
};
