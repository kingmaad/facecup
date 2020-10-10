<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile')->unique();
            $table->integer('otp');
            $table->string('en_name')->unique();
            $table->string('fa_name')->unique();
            $table->boolean('isVerified')->default(0);
            $table->string('team_type')->nullable();
            $table->string('organ_dependence')->nullable();
            $table->string('team_leader_name')->nullable();
            $table->string('team_leader_family')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('university')->nullable();
            $table->string('cv_url')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
