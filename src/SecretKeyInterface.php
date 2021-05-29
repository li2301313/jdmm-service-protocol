<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface SecretKeyInterface
 * @package Jdmm\Vhub\Protocol
 */
interface SecretKeyInterface
{
    /**
     * 获取密钥对
     * @author wangc
     * @param string $mac
     * @param string|null $deviceId
     * @return array
     */
   public function publicKey(string $mac,string $deviceId = null): array;
}
