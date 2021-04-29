<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable(); 
            $table->string('lastName')->nullable(); 
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('county')->nullable();
            $table->string('province')->nullable();
            $table->string('postcode')->nullable();
            // $table->string('email', 70)->nullable();
            $table->integer('delivery')->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
