<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('one')->nullable();
            $table->text('two')->nullable();
            $table->text('three')->nullable();
            $table->text('four')->nullable();
            $table->text('five')->nullable();
            $table->text('six')->nullable();
            $table->text('seven')->nullable();
            $table->text('eight')->nullable();
            $table->text('nine')->nullable();
            $table->text('ten')->nullable();
            $table->text('eleven')->nullable();
            $table->text('twelve')->nullable();
            $table->text('thirteen')->nullable();
            $table->text('fourteen')->nullable();
            $table->text('fifteen')->nullable();
            $table->text('sixteen')->nullable();
            $table->text('seventeen')->nullable();
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
        Schema::dropIfExists('privacies');
    }
}
