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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('hours_per_week');
            $table->integer('compensation')->nullable()->comment('in centen');
            $table->enum('type', ['full-time', 'part-time']);
            $table->text('description');
            $table->string('level_of_education')->nullable();

            $table->timestamps();
            
            // $table->foreignId('company_id')->constrained()->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
