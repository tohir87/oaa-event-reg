<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_id');
            $table->string('institution_name');
            $table->string('email_address');
            $table->string('program_offered')->nullable();
            $table->string('address')->nullable();
            $table->string('organisation_name')->nullable();
            $table->string('org_email_address')->nullable();
            $table->string('service_type')->nullable();
            $table->string('participant_name');
            $table->string('participant_designation');
            $table->string('participant_email_address');
            $table->string('participant_name2')->nullable();
            $table->string('participant_designation2')->nullable();
            $table->string('participant_email_address2')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
