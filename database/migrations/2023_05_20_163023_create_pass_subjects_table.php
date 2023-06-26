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
        Schema::create('pass_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");
            $table->String("subject_code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('pass_subjects', function (Blueprint $table) {
            //
            $table->dropColumn('student_id');
            $table->dropColumn('subject_code');
        });
    }
    
};
