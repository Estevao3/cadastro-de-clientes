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
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("cpf");

            //adress
            $table->string("zipcode");
            $table->string("street");
            $table->string("number");
            $table->string("state");
            $table->string("city");

            $table->string("occupation");
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("fist_name");
            $table->dropColumn("last_name");
            $table->dropColumn("cpf");

            $table->dropColumn("zipcode");
            $table->dropColumn("street");
            $table->dropColumn("number");
            $table->dropColumn("state");
            $table->dropColumn("city");

            $table->dropColumn("occupation");
        });
    }
}
