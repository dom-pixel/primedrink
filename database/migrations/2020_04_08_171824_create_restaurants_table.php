<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            /** Dados do restaurante */
            $table->string('cnpj')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('zipcode');
            $table->string('street');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('state');
            $table->string('city');
            $table->boolean('delivery');

            /** Dados do dono do restaurante */
            $table->string('full_name');
            $table->string('document')->unique();
            $table->string('document_secondary', 20)->nullable();
            $table->string('document_secondary_complement')->nullable();

            /** Dados de pagamento */
            $table->string('bank_id');
            $table->string('agency');
            $table->string('account');
            $table->string('digit');
            $table->boolean('is_linked');

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
        Schema::dropIfExists('restaurants');
    }
}
