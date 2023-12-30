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
            $table->string("student_id")->unique();
            $table->string("email");
            $table->string("firstName");
            $table->string("lastName")->nullable();
            $table->string("middleName")->nullable();
            $table->string("school");
            $table->string("department");
            $table->string("program");
            $table->string("keywords");
            $table->string("thesisTitle");
            $table->string("researchArea");
            // $table->bigInteger("isAssigned")->default(0);
            $table->unsignedBigInteger("supervisor_id")->nullable();
            $table->timestamps();

            $table->foreign('supervisor_id')->references('id')->on('supervisors')->ondelete('set null');
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
