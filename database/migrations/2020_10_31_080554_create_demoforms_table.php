<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demoforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('software_type');
            $table->string('franchisee_id');
            $table->string('company_name');
            $table->string('address');
            $table->string('city');
            $table->string('hod_name')->nullable();
            $table->string('contact_no');
            $table->string('coord_contact_no')->nullable();
            $table->string('off_contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('no_of_staff')->nullable();
            $table->string('no_of_student')->nullable();
            $table->string('demoform')->nullable();
            $table->string('logo')->nullable();

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
        Schema::dropIfExists('demoforms');
    }
}
