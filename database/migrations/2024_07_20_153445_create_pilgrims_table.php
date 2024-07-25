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
        Schema::create('pilgrims', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("spouse_name")->nullable();
            $table->string("relation")->nullable();
            $table->date("date_of_birth");
            $table->integer("nid_no")->nullable();
            $table->integer("serial_no");
            $table->integer("pilgrim_id")->nullable();
            $table->string("house_no")->nullable();
            $table->string("village");
            $table->string("post_office");
            $table->integer("post_code");
            $table->string("police_stand");
            $table->string("district");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilgrims');
    }
};
