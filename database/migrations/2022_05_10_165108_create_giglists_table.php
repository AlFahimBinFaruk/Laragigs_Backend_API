<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiglistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giglists', function (Blueprint $table) {
            $table->id();
            $table->string("companyName");
            $table->string("jobTitle");
            $table->string("jobLocation");
            $table->string("contactEmail");
            $table->string("webappURL");
            $table->string("tags");
            $table->string("companyLogoURL");
            $table->string("jobDesc");
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
        Schema::dropIfExists('giglists');
    }
}
