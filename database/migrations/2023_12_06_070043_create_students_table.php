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
            $table->integer('student_id');
           $table -> string('name',30);
           $table->string('email',30)->unique();
           $table->float('percentage',10,2)->comment("student percentage");
           $table->string('fatherName',20)->nullable();
           $table->string('city')->default('No City');
           $table->primary('student_id');
           $table->integer('age')->unsigned();
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
