<?php

namespace Chocofamily\Laravel\SmartHttp;

use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Contracts\Cache\Repository as Cache;

/**
 * @package Chocolife.me
 * @author  Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */
class Client extends \Chocofamily\SmartHttp\Client
{

    /**
     * Client constructor.
     *
     * @param Config     $config
     * @param Cache|null $cache
     */
    public function __construct(Config $config, ?Cache $cache = null)
    {
        parent::__construct($config->all(), $cache);
    }
}
