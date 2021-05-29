<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: xujindong
 * Date: 2020/3/4
 * Time: 10:03
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface ShareTaskInterface
 * @package Jdmm\Vhub\Protocol
 */
interface ShareTaskInterface
{
    /**
     * 分享图片上传-返回H5访问地址
     * @param array $paramsData
     * @return array
     */
    public function uploadImage(array $paramsData): array ;

    /**
     * 分享图片设置密码-返回H5访问地址
     * @param array $paramsData
     * @return array
     */
    public function setPwd(array $paramsData): array ;

    /**
     * 分享图片取消密码-返回H5访问地址
     * @param array $paramsData
     * @return array
     */
    public function cancelPwd(array $paramsData): array ;

    /**
     * 分享图片上传-返回H5访问地址
     * @param string $mac
     * @param string $share_id
     * @param string $pwd
     * @return array
     */
    public function queryShareInfo(string $mac, string $share_id, string $pwd): array ;
}
