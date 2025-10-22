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
    Schema::dropIfExists('users');

    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('image')->nullable();
        $table->text('info')->nullable();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('role')->default('user');
        $table->boolean('status')->default(false);
        $table->rememberToken();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('_users', function (Blueprint $table) {
            //
        });
    }
};
