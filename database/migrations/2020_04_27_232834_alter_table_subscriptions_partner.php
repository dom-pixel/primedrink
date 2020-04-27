<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSubscriptionsPartner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('city_of_interest')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('city_of_interest');
        });
    }
}
