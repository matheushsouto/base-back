<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes(['middleware' => 'auth']);
        Broadcast::channel('chat.{clientId}', function ($user, $clientId) {
            if ($user->client_id != $clientId) {
                return false;
            }
            return true;
        });
        Broadcast::channel('user-id.{userId}', function ($user, $userId) {
            if ($user->id != $userId) {
                return false;
            }
            return true;
        });
    }
}
