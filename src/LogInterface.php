<?php
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/5/29
 * Time: 17:20
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface LogInterface
 * @package Jdmm\Vhub\Protocol
 */
interface LogInterface
{
    /**
     * 添加日志
     * @param string $operation 操作
     * @param int $userId 操作的用户id
     * @param string $ip 请求来源ip
     * @param string $remarks 备注
     * @param string $deviceId 设备id(多个逗号分隔)
     * @author ffx
     */
    public function addLog($operation, $userId, $ip, $remarks = '', $deviceId = null);
}
