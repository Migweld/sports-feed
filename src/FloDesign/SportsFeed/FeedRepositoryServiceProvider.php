<?php
namespace FloDesign\SportsFeed;

use Illuminate\Support\ServiceProvider;

class FeedRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('FloDesign\SportsFeed\FormulaOneRepositoryInterface::class', 'FloDesign\SportsFeed\ErgastFormulaOneRepository::class');
    }
}