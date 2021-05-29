<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/1/14
 * Time: 13:46
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface DeviceInterface
 * @package Jdmm\Vhub\Protocol
 */
interface DeviceInterface
{
    /**
     * 删除设备
     * @param int $id
     * @return array
     */
    public function del(int $id): array ;

    /**
     * 设备截止日期
     * @param int $id
     * @return array
     */
    public function deadline(int $id): array ;

    /**
     * 导入设备提交
     * @param string $sign 缓存的数据标识
     * @param string $date 截止日期
     * @param string $remarks 申请人等
     * @param int $type 设备类型 1 VHUB设备 2 第三方设备
     * @return array
     */
    public function submit(string $sign, string $date, string $remarks, int $type): array ;

    /**
     * 设备使用情况统计
     * @param int $type 设备类型 1 VHUB设备 2 第三方设备
     * @return array
     */
    public function statusNum(int $type): array ;

    /**
     * 设备单个续期
     * @param int $id 设备id
     * @param string $date 截止日期
     * @return array
     */
    public function renew(int $id, string $date):array ;

    /**
     * 设备批量续期
     * @param array $ids 设备ids
     * @param string $date 截止日期
     * @return array
     */
    public function renewBatch(array $ids, string $date):array ;

    /**
     * 导入设备文件上传
     * @param array $data 文件数据内容
     * @return array
     */
    public function import(array $data): array ;

    /**
     * 导出设备列表
     * @param int $type 设备类型 1 VHUB设备 2 第三方设备
     * @return array
     */
    public function export(int $type): array ;

    /**
     * 设备列表
     * @param int $type 设备类型 1 VHUB设备 2 第三方设备
     * @param int $pageSize 每页条数
     * @param int $pageNum 页码
     * @param string $mac 设备mac
     * @return array
     */
    public function deviceList(int $type, int $pageSize, int $pageNum, string $mac = ''): array ;

    /**
     * 自动刷新设备列表中设备的激活状态、时间、统计
     * @param array $ids 设备ids
     * @return array
     */
    public function autoUpdate(array $ids): array ;

    /**
     * 获取校验文件
     * @author wangc
     * @param string $mac
     * @param string $props
     * @return array
     */
    public function verifyFile(string $mac, string $props): array ;

    /**
     * 激活设备改变状态
     * @author wangc
     * @param string $mac
     * @return array
     */
    public function changeStatus($mac): array ;

    /**
     * 出货系统同步mac
     * @param array $macs 设备mac
     * @param string $proposer 申请人（备注）
     * @param int $deadline 有效截止期，时间戳（预留字段，不传默认2080-12-31 23:59:59 的时间戳）
     * @return bool
     * @author ffx
     */
    public function syncDevice(array $macs, string $proposer, int $deadline = 3502886399): bool;
}
