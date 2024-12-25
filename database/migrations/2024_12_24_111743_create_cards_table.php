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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('comments');
            $table->string('members');
            $table->string('number');
            $table->string('start_date');
            $table->string('description');
            $table->string('title');
            $table->string('created_by');
            $table->string('card_type');
            $table->string('tab_id');
            $table->string('table_id');
            $table->string('attachment');
            $table->string('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
