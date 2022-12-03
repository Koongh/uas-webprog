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
        Schema::create('item_user', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->foreignID('item_id');
            $table->foreignID('user_id');
            $table->unsignedInteger('quantity')->default(0);
            $table->unsignedInteger('total')->default(0);
            $table->timestamps();
            $table->primary(['id', 'item_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_user');
    }
};
