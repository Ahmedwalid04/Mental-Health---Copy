<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
    
            // Store selected answers (optional if you only care about the score)
            $table->json('answers')->nullable();
    
            // Store final calculated score
            $table->unsignedInteger('score')->default(0);
    
            // Store a summary/result ("Needs therapy", "Doesn't need therapy", etc.)
            $table->text('result_summary');
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
