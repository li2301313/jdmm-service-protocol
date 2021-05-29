<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/2/17
 * Time: 14:29
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface QrCodeInterface
 * @package Jdmm\Vhub\Protocol
 */
interface QrCodeInterface
{
    /**
     * 获取二维码
     * @param string $mac 设备mac
     * @param int $size 二维码边长尺寸
     * @return array
     */
    public function getQrCode(string $mac, int $size): array ;

    /**
     * 验证二维码有效状态（快传）
     * @param string $macCode
     * @return array
     * @author ffx
     */
    public function verifyStatus(string $macCode): array;
}