<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->longText('desc');
            $table->string('name');
            $table->date('age');
            $table->string('job');
            $table->string('citizenship');
            $table->string('residence');
            $table->string('url');
            $table->timestamps();
        });

        DB::table('about_mes')->insert([
            'photo' => 'https://media.tenor.com/WqSXkGKKqykAAAAM/indian-dance-dancing.gif', // Replace with actual photo path
            'desc' => "My name is Mohd Abulkhairi Labib, but most people know me as Labib. I'm a passionate full stack developer who thrives on mastering the latest technologies. With expertise across both frontend and backend development, I enjoy crafting comprehensive solutions for various web projects. Building websites is not just a job for me, it's a fulfilling journey, especially when I witness users engaging with my work. Beyond coding, I'm also fascinated by topics like computer networks and electronics, which I explore to expand my knowledge further.",
            'name' => 'Mohd. Abulkhairi Labib',
            'age' => '2005-01-01', // Replace with actual date of birth
            'job' => 'Fullstack Developer',
            'citizenship' => 'Indonesia',
            'residence' => 'Riau',
            'url' => '#',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('about_mes');
    }
};
