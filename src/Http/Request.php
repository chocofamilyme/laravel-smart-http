<?php

namespace Chocofamily\Laravel\SmartHttp\Http;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Contracts\Config\Repository as Config;

/**
 * @package Chocolife.me
 * @author  Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */
class Request extends \Chocofamily\SmartHttp\Http\Request
{
    /**
     * Request constructor.
     *
     * @param Config     $config
     * @param Cache|null $cache
     */
    public function __construct(Config $config, ?Cache $cache = null)
    {
        parent::__construct($config->all(), $cache);
    }
}
