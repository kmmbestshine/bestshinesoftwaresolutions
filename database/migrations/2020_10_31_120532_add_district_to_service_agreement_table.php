<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistrictToServiceAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_agreement', function (Blueprint $table) {
             $table->string('country')->after('company_name');
            $table->string('state')->after('country');
            $table->string('district')->after('state');
            $table->string('taluka')->after('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_agreement', function (Blueprint $table) {
            //
        });
    }
}
