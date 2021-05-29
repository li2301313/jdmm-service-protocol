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
 * Interface UserInterface
 * @package Jdmm\Vhub\Protocol
 */
interface UserInterface
{
    /**
     * 登录
     * @param string $name 用户名
     * @param string $password 密码
     * @return array
     */
    public function login(string $name, string $password, string $captchaId, string $captcha): array;

}
