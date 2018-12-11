<?php

// use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('company')->create('user_roles', function (Blueprint $table) {
            $db = DB::connection('mysql')->getDatabaseName();
            $table->increments('id');
            $table->boolean('see_menu')->default(0);
            $table->boolean('see_bar')->default(0);
            $table->boolean('see_title')->default(0);
            $table->boolean('see_hello')->default(0);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on($db.'.users');
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
        Schema::connection('company')->dropIfExists('user_roles');
    }
}
