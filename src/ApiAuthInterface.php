<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: xujindong
 * Date: 2020/2/24
 * Time: 10:58
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface ApiAuthInterface
 * @package Jdmm\Vhub\Protocol
 */
interface ApiAuthInterface
{
    /**
     * 查询密钥
     * @param string $group_name
     * @param string $access_key
     * @return string
     */
    public function secret(string $group_name, string $access_key): string ;

}
