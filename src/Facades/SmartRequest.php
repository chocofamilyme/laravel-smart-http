<?php
/**
 * @package Chocolife.me
 * @author  Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */

namespace Chocofamily\Laravel\SmartHttp\Facades;

use Illuminate\Support\Facades\Facade;

class SmartRequest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmartRequest';
    }
}
