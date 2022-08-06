<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_permission', function (Blueprint $table) {
            $table->unsignedBigInteger('module_id')->index('module_permission_module_id_foreign');
            $table->unsignedBigInteger('permission_id')->index('module_permission_permission_id_foreign');
            $table->boolean('read')->default(true);
            $table->boolean('write')->default(true);
            $table->boolean('delete')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_permission');
    }
}
