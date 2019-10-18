<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');

            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id')->references('id')->on('permission');

            $table->boolean('can_create');
            $table->boolean('can_read');
            $table->boolean('can_update');
            $table->boolean('can_delete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}
