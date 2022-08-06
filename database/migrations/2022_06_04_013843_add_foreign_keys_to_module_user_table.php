<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToModuleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_user', function (Blueprint $table) {
            $table->foreign(['module_id'])->references(['id'])->on('modules');
            $table->foreign(['user_id'])->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('module_user', function (Blueprint $table) {
            $table->dropForeign('module_user_module_id_foreign');
            $table->dropForeign('module_user_user_id_foreign');
        });
    }
}
