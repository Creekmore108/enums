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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->boolean('relationship_ltr')->nullable();
            $table->boolean('relationship_marriage')->nullable();
            $table->boolean('relationship_tantric')->nullable();
            $table->boolean('relationship_polyamorous')->nullable();
            $table->boolean('relationship_open')->nullable();
            $table->boolean('relationship_celibate')->nullable();
            $table->boolean('relationship_celibate_marriage')->nullable();
            $table->boolean('relationship_casual')->nullable();
            $table->boolean('relationship_friends')->nullable();
            $table->boolean('relationship_travel')->nullable();
            $table->boolean('relationship_pen_pals')->nullable();
            $table->boolean('relationship_curious')->nullable();
            $table->boolean('relationship_other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
