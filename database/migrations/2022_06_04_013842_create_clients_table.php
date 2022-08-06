<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('type')->default(false);
            $table->string('name');
            $table->string('cnpj')->nullable();
            $table->string('email')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedInteger('city_id')->nullable();
            $table->string('accredited_number', 20);
            $table->enum('accredited_type', ['TRANSFER', 'RECIPIENT']);
            $table->string('title_stablishment')->nullable();
            $table->string('cnae')->nullable();
            $table->string('cad', 20)->nullable();
            $table->date('since')->nullable();
            $table->string('phone', 14)->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('zipcode', 20)->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_cpf')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('legal_representative1_name')->nullable();
            $table->string('legal_representative1_cpf')->nullable();
            $table->string('legal_representative1_email')->nullable();
            $table->string('legal_representative2_name')->nullable();
            $table->string('legal_representative2_cpf')->nullable();
            $table->string('legal_representative2_email')->nullable();
            $table->string('witness_name')->nullable();
            $table->string('witness_cpf')->nullable();
            $table->string('witness_email')->nullable();
            $table->string('attorney_name')->nullable();
            $table->string('attorney_cpf')->nullable();
            $table->string('attorney_email')->nullable();
            $table->string('social_contract')->nullable();
            $table->string('board_election_minutes')->nullable();
            $table->string('powers_of_attorney')->nullable();
            $table->string('legal_representative')->nullable();
            $table->string('document_legal_representative1')->nullable();
            $table->string('document_legal_representative2')->nullable();
            $table->string('siscred_statement')->nullable();
            $table->string('credencial_siscred')->nullable();
            $table->string('sintegra_registration')->nullable();
            $table->text('observation')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
