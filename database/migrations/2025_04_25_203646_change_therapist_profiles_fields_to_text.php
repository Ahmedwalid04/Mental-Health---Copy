<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTherapistProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('therapist_profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->change();
            $table->text('bio')->nullable()->change();
            $table->decimal('price_per_half_hour', 8, 2)->default(0)->change();
            $table->text('qualifications')->nullable()->change();
            $table->text('experience')->nullable()->change();
            $table->text('specializations')->nullable()->change();
             $table->string('profile_image')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('therapist_profiles', function (Blueprint $table) {
            // Revert changes if needed
        });
    }
}