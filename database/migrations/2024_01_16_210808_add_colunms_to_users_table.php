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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 15)->after('email')->nullable();
            $table->string('birthdate', 10)->after('phone')->nullable();
            $table->string('cpf', 20)->after('birthdate')->nullable();
            $table->string('rg', 20)->after('cpf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'birthdate', 'cpf', 'rg']);
        });
    }
};
