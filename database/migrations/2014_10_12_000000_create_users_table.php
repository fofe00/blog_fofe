<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provider_type')->nullable()->comment('Social Account Type');
            $table->string('provider_token')->nullable()->comment('Social Account Token');
            $table->string('name');
            $table->string('password')->nullable();
            $table->string('forgot_password')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->boolean('is_blocked')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
