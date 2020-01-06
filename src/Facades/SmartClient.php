<?php
/**
 * @package Chocolife.me
 * @author  Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */

namespace Chocofamily\Laravel\SmartHttp\Facades;

use Illuminate\Support\Facades\Facade;

class SmartClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmartClient';
    }
}
