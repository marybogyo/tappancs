<?php

use App\Models\Tappancs;
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
        Schema::create('tappancs', function (Blueprint $table) {
            $table->id('tappancs_id');
            $table->string('nev');
            $table->string('fajta');
            $table->integer('foot');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
            
        });
        /*Tappancs::create([
            'nev'=> 'Kyra',
            'fajta'=> 'Yorkshire Terrier',
            'foot'=> 4,
            'user_id'=> 1
        ]);*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tappancs');
    }
};
