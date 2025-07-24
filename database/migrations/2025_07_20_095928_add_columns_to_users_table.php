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
    Schema::table('users', function (Blueprint $table) {
        $table->string('image')->after('name')->comment('画像');
        $table->string('introduction')->after('image')->comment('自己紹介文');
    });
}

    /**
     * Reverse the migrations.
     */
  public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['image', 'introduction']);
    });
}
};
