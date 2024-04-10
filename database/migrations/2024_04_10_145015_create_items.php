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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('redirect_id')->unsigned()->nullable();
            $table->tinyText('id_imdb')->nullable();
            $table->tinyText('id_source')->nullable();
            $table->enum('type', ['film', 'serie']);
            $table->tinyText('title');
            $table->tinyText('title_original')->nullable();
            $table->text('titles_alternates')->nullable();
            $table->text('synopsys')->nullable();
            $table->tinyText('synopsys_short')->nullable();
            $table->date('release_date')->nullable();
            $table->mediumInteger('length')->unsigned()->nullable();
            $table->tinyInteger('note_source')->unsigned()->nullable();
            $table->tinyInteger('note_avg')->unsigned()->nullable();
            $table->tinyInteger('popularity')->unsigned()->nullable();
            $table->tinyInteger('is_hidden')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('users_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('note')->unsigned()->nullable();
            $table->text('note_perso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
