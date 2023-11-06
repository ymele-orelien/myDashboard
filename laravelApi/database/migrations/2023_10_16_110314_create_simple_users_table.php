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
        Schema::create('simple_users', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('name');
            $table->string('email',255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
         $table->enum('gender',['female','male']);
            $table->enum("bloodGroup",['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('dateBirth')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simple_users');
    }
};
