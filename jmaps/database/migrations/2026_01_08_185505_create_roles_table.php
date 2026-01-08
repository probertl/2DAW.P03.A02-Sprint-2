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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->default(3)->after('id'); // valor por defecto = 3
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        //Primer esborrem la relacio perwue si no petara al borrar l'altre abans
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id'); 
        });

        Schema::dropIfExists('roles');
    }
};
