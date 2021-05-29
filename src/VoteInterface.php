<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: xujindong
 * Date: 2020/2/19
 * Time: 10:58
 */

namespace Jdmm\Vhub\Protocol;

/**
 * Interface VoteInterface
 * @package Jdmm\Vhub\Protocol
 */
interface VoteInterface
{
    /**
     * 创建投票器
     * @param array $paramsData
     * @return array
     */
    public function createV2(array $paramsData): array ;

    /**
     * 选项列表
     * @param string $device_id
     * @param string $unique
     * @return array
     */
    public function optionsV2(string $device_id, string $unique): array ;

    /**
     * 提交投票
     * @param array $paramsData
     * @return array
     */
    public function submitV2(array $paramsData): array ;

    /**
     * 投票结果
     * @param string $device_id 设备标识
     * @param string $unique 投票器标识
     * @return array
     */
    public function resultV2(string $device_id, string $unique): array ;

    /**
     * 实时竞票统计
     * @param string $device_id 设备标识
     * @param string $unique 投票器标识
     * @return array
     */
    public function realtimeResult(string $device_id, string $unique): array ;

    /**
     * 投票器开始编辑
     * @param string $device_id
     * @param string $unique
     * @return array
     */
    public function setStart(string $device_id, string $unique): array ;

    /**
     * 投票器选项设置
     * @param array $params
     * @return array
     */
    public function voteSet(array $params): array ;

    /**
     * 创建投票器
     * @param array $paramsData
     * @return array
     */
    public function create(array $paramsData): array ;

    /**
     * 选项列表
     * @param string $device_id
     * @return array
     */
    public function options(string $device_id): array ;

    /**
     * 提交投票
     * @param array $paramsData
     * @return array
     */
    public function submit(array $paramsData): array ;

    /**
     * 投票结果
     * @param string $device_id
     * @return array
     */
    public function result(string $device_id): array ;


}
