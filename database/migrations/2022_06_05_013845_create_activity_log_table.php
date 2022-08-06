<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE `activity_log` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
            `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
            `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
          ) ;');

        DB::statement('ALTER TABLE `activity_log` CHANGE `id` `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`)');
    }
}
