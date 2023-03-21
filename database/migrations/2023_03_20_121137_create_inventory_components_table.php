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
        Schema::create('inventory_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid', 191);
            $table->string('unit_id', 191);
            $table->string('code_component', 191);
            $table->string('d_cc')->default('00');
            $table->string('item_code');
            $table->string('name');
            $table->string('list_no')->nullable();
            $table->string('drawing_no')->nullable();
            $table->string('vendor')->nullable();
            $table->string('type')->nullable();
            $table->string('serial')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('issue_by')->nullable();
            $table->string('certificate_no')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('next_inspection')->nullable();
            $table->string('specification_detail')->nullable();
            $table->string('maintenance_detail')->nullable();
            $table->integer('number_approval')->nullable();
            $table->date('date_approval')->nullable();
            $table->string('pnd_place')->nullable();
            $table->date('pnd_date')->nullable();
            $table->date('validity')->nullable();
            $table->string('maker')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->index('uuid');
            $table->unique(['unit_id', 'code_component', 'd_cc', 'item_code'], 'unique_components');
            $table->foreign('unit_id')->references('uuid')->on('inventory_units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_components');
    }
};