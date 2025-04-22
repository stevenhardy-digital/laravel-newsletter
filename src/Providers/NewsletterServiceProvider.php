<?php

namespace Webkul\Newsletter\Providers;

use Illuminate\Support\ServiceProvider;
use Webkul\Newsletter\Contracts\Newsletter as NewsletterContract;
use Webkul\Newsletter\Models\Newsletter;

class NewsletterServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(NewsletterContract::class, Newsletter::class);
    }

}
