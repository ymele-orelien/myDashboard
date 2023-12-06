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
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger('simpleUser_id');
            $table->string("motif");
            $table->enum("bloodGroup",['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->integer('poches');
            $table->foreign('simpleUser_id')->references('id')->on('simple_users')
            ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
