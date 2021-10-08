<?php

namespace yzh52521\captcha;

use yzh52521\captcha\command\Publish;
use yzh52521\captcha\GridCaptcha;

class Service extends \think\Service
{

    public function register()
    {
        $this->app->bind('GridCaptcha', GridCaptcha::class);
    }

    public function boot()
    {
        $this->commands(['gridCaptcha:publish' => Publish::class]);
    }
}
