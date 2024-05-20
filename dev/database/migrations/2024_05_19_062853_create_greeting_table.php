<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('greeting', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('firstSlogan');
            $table->text('secondSlogan');
        });

        DB::table('greeting')->insert([
            'name' => 'Mohd Labib',
            'firstSlogan' => '...',
            'secondSlogan' => '...',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('greeting');
    }
};
