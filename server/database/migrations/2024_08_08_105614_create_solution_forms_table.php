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
        Schema::create('solution_forms', function (Blueprint $table) {
            $table->increments('solution_form_id');
            $table->string('title');
            $table->string('sender_name_surname');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('sender_country');
            $table->string('sender_city');
            $table->string('sender_district')->nullable();
            $table->string('station_type');
            $table->string('description',1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_forms');
    }
};
