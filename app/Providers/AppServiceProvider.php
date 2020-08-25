<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resource\Json\Resource;
use App\Observers\UserObserver;
use App\Observers\ReplyObserver;
use App\Observers\TopicObserver;
use App\Observers\LinkObserver;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;
use App\Models\Link;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        if (app()->isLocal()) {
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }


    public function boot()
    {
        User::observe(UserObserver::class);
        Reply::observe(ReplyObserver::class);
        Topic::observe(TopicObserver::class);
        Link::observe(LinkObserver::class);
		Resource::withoutWrapping();
	}
}
