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
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user_agent')->nullable()->default(null);
            $table->integer('id_supervisor')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->float('base')->nullable()->default('0');
            $table->integer('id_wallet')->nullable()->default(null);
            $table->string('history')->nullable()->default(null); //null or log
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
