<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIvkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GenericActing', function (Blueprint $table) {
            $table->integer('ga_id',true);
            $table->integer('ep_id')->nullable(false);
        });
        Schema::table('GenericActing', function (Blueprint $table) {
            $table->foreign('ep_id','ep_id_fk_generic_actingTable')->references('ep_id')->on('educationprogram');
        });

        Schema::create('Order', function (Blueprint $table) {
            $table->integer('or_id',true);
            $table->integer('date')->nullable(false);
            $table->integer('situation')->nullable(false);
            $table->integer('timeslot')->nullable(false);
            $table->integer('learninggoal')->nullable(false);
            $table->integer('competence')->nullable(false);
            $table->integer('resource_person')->nullable(false);
            $table->integer('resource_material')->nullable(false);
            $table->integer('reflection')->nullable(false);
            $table->integer('detailed_reflection')->nullable(false);
            $table->integer('evidence')->nullable(false);
            $table->integer('ep_id')->nullable(false);
        });
        Schema::table('Order', function (Blueprint $table) {
            $table->foreign('ep_id','ep_id_fk_orderTable')->references('ep_id')->on('educationprogram')->onDelete('CASCADE');
        });


        Schema::create('Content', function (Blueprint $table) {
            $table->integer('cont_id',true);
            $table->integer('ga_id')->nullable(false);
            $table->string('timeslot')->nullable(false);
            $table->string('learninggoal')->nullable(false);
            $table->string('competence')->nullable(false);
            $table->string('evidence')->nullable(false);
        });
        Schema::table('Content', function (Blueprint $table) {
            $table->foreign('ga_id','ga_id_fk_genericActingTable')->references('ga_id')->on('GenericActing')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GenericActing');
        Schema::dropIfExists('Order');
        Schema::dropIfExists('Content');
    }
}
