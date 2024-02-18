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
        Schema::create('sidebar_settings', function (Blueprint $table) {
            $table->id();
            $table->string('director_name');
            $table->text('director_talk');
            $table->string('director_img');

            $table->string('principal_name');
            $table->text('principal_talk');
            $table->string('principal_img');

            $table->string('ass_principal_name');
            $table->text('ass_principal_talk');
            $table->string('ass_principal_img');

            $table->string('hotline_img');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidebar_settings');
    }
};
