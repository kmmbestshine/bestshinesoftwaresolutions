<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franch_register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('contact_no');
            $table->string('city');
            $table->string('address');
            $table->string('taluka');
            $table->string('district')->nullable();
            $table->string('state');
            $table->string('country')->nullable();
            $table->string('name')->nullable();
            $table->string('kyc_document')->nullable();
            $table->string('biodata')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('franch_register');
    }
}
