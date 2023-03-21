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
        Schema::create('inventory_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid', 191);
            $table->string("main_group_id", 191);
            $table->string('code_group');
            $table->unique(['main_group_id', 'code_group']);
            $table->index('uuid');
            $table->string('name');
            $table->text('specification')->nullable();
            $table->timestamps();
            $table->index('id');
            $table->foreign('main_group_id')->references('uuid')->on('inventory_main_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_groups');
    }
};
