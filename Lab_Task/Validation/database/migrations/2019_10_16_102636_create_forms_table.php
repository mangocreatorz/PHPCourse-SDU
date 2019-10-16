<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    public $fillable = ['item_name', 'price'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
          
            $table->integer('price');
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
        Schema::dropIfExists('forms');
    }
}
