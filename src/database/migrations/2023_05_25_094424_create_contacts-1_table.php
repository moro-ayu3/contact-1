<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacts1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contacts-1', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->tinyInteger('gender')->defalut('(man())');
            $table->string('email')->unique();
            $table->char('postcode', 8);
            $table->string('address');
            $table->string('building_name')->nullable();
            $table->text('option');
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
      Schema::dropIfExists('contacts-1') ; 
    }
}
