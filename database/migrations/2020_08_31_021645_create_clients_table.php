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
            $table->Id('client_id');
            $table->boolean('condition')->nullable()->default(true);
            $table->foreignId('seller_id')->nullable();
            $table->string('client_name', 255)->nullable();;
            $table->string('client_short_name', 255)->nullable();
            $table->string('reg_name', 20)->nullable();
            $table->string('reg_number', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('zone1', 100)->nullable();
            $table->string('zone2', 100)->nullable();
            $table->string('zone3', 100)->nullable();
            $table->string('zone4', 100)->nullable();
            $table->string('zipcode', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('pluscode', 100)->nullable();
            $table->decimal('lat', 9, 6)->nullable();
            $table->decimal('long', 9, 6)->nullable();
            $table->string('phone1', 20)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->string('phone3', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->foreignId('contact_id', 50)->nullable();
            $table->date('aniversary_at')->nullable();
            $table->foreignId('currency_id')->nullable();
            $table->foreignId('credit_term_id')->nullable();
            $table->multiLineString('observation')->nullable();
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
