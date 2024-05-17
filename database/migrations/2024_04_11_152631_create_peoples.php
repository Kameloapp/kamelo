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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->integer('redirect_id')->unsigned()->nullable();
            $table->tinyText('id_source')->nullable();
            $table->tinyText('title');
            $table->text('titles_alternates')->nullable();
            $table->text('biography')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('death_date')->nullable();
            $table->tinyInteger('is_woman')->unsigned()->default(0);
            $table->tinyText('content_source')->nullable();
            $table->tinyText('content_licence')->nullable();
            $table->timestamps();
        });

        Schema::create('functions', function (Blueprint $table) {
            $table->id();
            $table->tinyText('id_source')->nullable();
            $table->tinyText('title');
            $table->timestamps();
        });

        Schema::create('items_peoples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->foreignId('people_id')->constrained(table: 'peoples')->onDelete('cascade');
            $table->foreignId('function_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('importance')->unsigned()->default(0);
            $table->tinyText('role')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peoples');
    }
};
