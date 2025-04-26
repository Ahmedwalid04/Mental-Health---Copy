<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateNewTherapistProfiles1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Foreign key to users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Profile fields
            $table->text('bio')->nullable();
            $table->decimal('price_per_half_hour', 8, 2)->default(0.00);
            $table->json('qualifications')->nullable();
            $table->json('experience')->nullable();
            $table->json('specializations')->nullable();
            $table->string('profile_image')->nullable();

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
        Schema::dropIfExists('therapist_profiles');
    }
}
