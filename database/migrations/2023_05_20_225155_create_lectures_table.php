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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("doctor_id");
            $table->string("lecture_name");
            $table->string("subject_code");
            $table->string("subject_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('lectures', function (Blueprint $table) {
            //
            $table->dropColumn('doctor_id');
            $table->dropColumn('lecture_name');
            $table->dropColumn('subject_name');
            $table->dropColumn('subject_code');
        });
    }
};
