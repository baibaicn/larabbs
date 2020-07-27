<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\UserObserver;
use App\Observers\ReplyObserver;
use App\Observers\TopicObserver;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        // Reply::observe(ReplyObserver::class);
        Topic::observe(TopicObserver::class);
    }
}
