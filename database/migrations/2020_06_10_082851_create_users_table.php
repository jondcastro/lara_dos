<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
           $table->string('email')->unique();
           $table->timestamp('email_verified_at')->nullable();
           $table->string('password');
            //relacionar con el mismo tipo de dato bigInteger es vez de integer
           $table->bigInteger('rol_id')->unsigned();
           $table->bigInteger('country_id')->unsigned();
           $table->bigInteger('state_id')->unsigned();
           $table->rememberToken();
           $table->timestamps();
           $table->softDeletes();
            // con onUpdate y oonDelete podemos eliminar a actualizar en cascada
           $table->foreign("rol_id")->references("id")->on("roles")
           ->onDelete("cascade")
           ->onUpdate("cascade");
           $table->foreign("country_id")->references("id")->on("countrys")
           ->onDelete("cascade")
           ->onUpdate("cascade");
           $table->foreign("state_id")->references("id")->on("states")
           ->onDelete("cascade")
           ->onUpdate("cascade");
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
