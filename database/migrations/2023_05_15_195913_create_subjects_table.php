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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_code')->nullable();
            $table->string('subject_name')->nullable();
            $table->string('related_department')->nullable();
            $table->string('prequisite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            //
            $table->dropColumn('subject_code');
            $table->dropColumn('subject_name');
            $table->dropColumn('related_department');
            $table->dropColumn('prequisite');
        });
    }
};
