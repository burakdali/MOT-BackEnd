<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('criteria_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->unique(['locale', 'criteria_id']);
            $table->foreign("criteria_id")->references("id")->on("criterias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_translations');
    }
};
