<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 120);
            $table->string('cnpj', 120)->nullable();
            $table->string('cpf', 120)->nullable();
            $table->string('email', 120)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('city_id')->index('partners_city_id_foreign')->nullable();
            $table->string('pix')->nullable();
            $table->string('agency')->nullable();
            $table->string('account')->nullable();
            $table->string('bank')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
