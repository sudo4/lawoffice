<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('a'); //slide 1
            $table->string('aa'); //slide 1 icon
            $table->string('b'); //slide 2
            $table->string('bb'); //slide 2 title
            $table->string('c'); //slide 3
            $table->string('cc'); //slide 3 title
            $table->string('d'); //slide 4
            $table->string('dd'); //slide 4 title
            $table->string('about_title');
            $table->text('about');
            $table->string('address');
            $table->string('phone');
            $table->string('mail');
            $table->string('office_hour');
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
        Schema::dropIfExists('homes');
    }
}
