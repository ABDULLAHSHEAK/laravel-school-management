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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fa_name');
            $table->string('ma_name');
            $table->string('student_phone');
            $table->string('parents_phone');
            $table->string('email');
            $table->integer('birthdate');
            $table->string('address');
            $table->string('gender');
            $table->string('blood');
            $table->integer('roll');
            $table->integer('reg');
            $table->unsignedBigInteger('class');
            $table->foreign('class')->references('id')->on('class_rooms')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('img');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
