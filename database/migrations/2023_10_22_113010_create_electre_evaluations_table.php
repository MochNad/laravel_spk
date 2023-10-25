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
        Schema::create('electre_evaluations', function (Blueprint $table) {
            $table->smallInteger('id_alternative', false, true);
            $table->tinyInteger('id_criteria', false, true);
            $table->float('value');
            $table->primary(['id_alternative', 'id_criteria']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electre_evaluations');
    }
};
