<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/2/19
 * Time: 9:29
 */

namespace Jdmm\Vhub\Protocol;

use Swoft\Http\Message\Request;

/**
 * Interface PictureInterface
 * @package Jdmm\Vhub\Protocol
 */
interface PictureInterface
{
    /**
     * 上传文件（批量）
     * @param array $fileRes 文件路径、大小、上传状态数组
     * @param string $macCode 二维码标识
     * @param string $sign 虚拟用户标识
     * @return array
     */
    public function upload(array $fileRes, string $macCode, string $sign): array;

    /**
     * 获取已上传文件列表（h5用）
     * @author ffx
     * @param string $sign 当前二维码下虚拟用户标识，前端生成
     * @param string $macCode 为1时不验证失效
     * @return array
     */
    public function userFileList(string $sign, string $macCode): array ;

    /**
     * 获取已上传文件列表（白板用）
     * @author ffx
     * @param string $macCode 二维码标识（生成二维码接口返回）
     * @return array
     */
    public function fileList(string $macCode): array ;

    /**
     * 获取已上传文件数量（白板用）
     * @author ffx
     * @param string $macCode 二维码标识（生成二维码接口返回）
     * @return array
     */
    public function uploadNum(string $macCode): array ;

    /**
     * 清空文件接口（白板用）
     * @author ffx
     * @param string $macCode 二维码标识（生成二维码接口返回）
     * @return array
     */
    public function clear(string $macCode): array ;

    /**
     * 删除快传文件接口
     * @param string $macCode
     * @param array $pictureIds
     * @return array
     * @author ffx
     */
    public function delete(string $macCode, array $pictureIds):array;
}