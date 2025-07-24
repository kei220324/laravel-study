<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('cats', function (Blueprint $table) {
        $table->id();
        $table->string('name')->comment('名前');
        $table->string('breed')->comment('種類');
        $table->integer('gender')->comment('性別(1:オス,2:メス)');
        $table->date('date_of_birth')->comment('生年月日');
        $table->string('image')->comment('画像');
        $table->string('introduction')->comment('紹介文');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
