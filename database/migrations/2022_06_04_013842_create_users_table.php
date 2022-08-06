<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('temporary_password')->nullable();
            $table->string('login')->unique();
            $table->string('password');
            $table->unsignedBigInteger('permission_id')->index('users_permission_id_foreign');
            $table->boolean('master')->default(false);
            $table->unsignedBigInteger('partner_id')->nullable()->index('users_partner_id_foreign');
            $table->unsignedBigInteger('client_id')->nullable()->index('users_client_id_foreign');
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
            $table->string('theme_color')->default('default');
            $table->string('theme_scheme')->default('light');
            $table->string('theme_layout')->default('classy');
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
