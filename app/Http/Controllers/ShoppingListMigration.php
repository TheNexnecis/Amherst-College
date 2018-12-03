<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/*Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('emailAddress');
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');			
        });*/
		
        Schema::create('list', function (Blueprint $table) {
            $table->increments('id');
            //$table->int('FK_USER_ID');
            $table->string('product');
			$table->string('quantity');
			//$table->float('price');
			$table->string('recipent');			
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
        //Schema::drop('user');
		Schema::drop('list');
    }
}