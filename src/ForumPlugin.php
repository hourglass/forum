<?php

namespace Hourglass\Forum;

use Hourglass\Foundation\Plugins\Plugin;
use Route;

class ForumPlugin extends Plugin
{
    protected $httpNamespace = 'Hourglass\Forum\Http\Controllers';

    public function mapViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Hourglass\Forum');
    }

    public function mapRoutes()
    {
        Route::middleware('web')
            ->namespace($this->httpNamespace)
            ->group(__DIR__ . '/../resources/routes/web.php');
    }
}