<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->date('dateStart');
            $table->date('dateEnd');
            $table->string('school');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
