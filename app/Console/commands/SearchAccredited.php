<?php

namespace App\Console\commands;

use Illuminate\Console\Command;
use Modules\Base\Models\City;
use Modules\Base\Services\CurlService;
use Modules\Base\Services\Utils;
use Modules\Partner\Models\Client;

class SearchAccredited extends Command
{
    protected $signature = 'search-accredited';
    protected $description = 'Search accredited';

    public function handle()
    {

    }
}
