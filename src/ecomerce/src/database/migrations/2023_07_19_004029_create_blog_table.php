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
		Schema::create('blogs', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->longText('body')->nullable();
			$table->longText('references')->nullable();
			$table->string('author')->nullable();
			$table->timestamps();

			//page Settings
			$table->string('slug')->unique();
			$table->enum('status', ['published', 'unpublished'])->default('unpublished');

			//Seo
			$table->longText('meta')->nullable();
			$table->longText('meta_og')->nullable();
			$table->longText('schema_org')->nullable();

			//Index
			$table->fullText('title');
			$table->fullText('body');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('blogs');
	}
};
