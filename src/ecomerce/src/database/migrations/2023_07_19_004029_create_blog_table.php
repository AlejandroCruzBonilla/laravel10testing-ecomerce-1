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
            $table->longText('body');
            $table->longText('fonts');
            $table->string('author')->nullable();
            $table->timestamps();
            
            //page Settings
            $table->string('slug')->unique();
            $table->enum('status',['published','unpublished'])->default('unpublished');

            //Seo
            $table->longText('seo_fields');
            $table->longText('og_fields');
            $table->longText('schema_org_fields');

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
