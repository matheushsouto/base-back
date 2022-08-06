<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['client_id'])->references(['id'])->on('clients');
            $table->foreign(['partner_id'])->references(['id'])->on('partners');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_client_id_foreign');
            $table->dropForeign('users_partner_id_foreign');
            $table->dropForeign('users_permission_id_foreign');
        });
    }
}
