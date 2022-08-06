<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToModulePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_permission', function (Blueprint $table) {
            $table->foreign(['module_id'])->references(['id'])->on('modules');
            $table->foreign(['permission_id'])->references(['id'])->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('module_permission', function (Blueprint $table) {
            $table->dropForeign('module_permission_module_id_foreign');
            $table->dropForeign('module_permission_permission_id_foreign');
        });
    }
}
