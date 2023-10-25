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
        Schema::create('electre_criterias', function (Blueprint $table) {
            $table->tinyInteger('id_criteria', true);
            $table->string('criteria', 100);
            $table->float('weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('electre_criterias');
    }
};
