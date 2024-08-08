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
        Schema::create('career_forms', function (Blueprint $table) {
            $table->increments('career_form_id');
            $table->string('sender_name_surname');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('cv_writing',1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_forms');
    }
};
