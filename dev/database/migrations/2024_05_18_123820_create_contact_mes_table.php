<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_mes', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
            $table->string('Address');
            $table->timestamps();
        });

        DB::table('contact_mes')->insert([
            'phone' => '0831-8573-0662',
            'email' => 'asd@asd.com',
            'Address' => 'Jl Mawar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_mes');
    }
};
