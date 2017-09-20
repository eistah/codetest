<?php

namespace App\Providers;


use App\Codetest\Repository\Lottery;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class LotteryServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this
            ->app
            ->singleton(Lottery::class, function () {
                return new Lottery(
                    new Client(),
                    env('API_ENDPOINT')
                );
            });
    }
}
