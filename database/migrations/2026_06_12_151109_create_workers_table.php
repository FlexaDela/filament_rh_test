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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unity_siac_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('gender', 1);
            $table->date('birth_day');
            $table->string('cpf',11)->unique();
            $table->string('uf', 2);
            $table->string('education');

            $table->string('gender_identity')->nullable();
            $table->string('social_name')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
