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
 * Interface RelationInterface
 * @package Jdmm\Vhub\Protocol
 */
interface RelationInterface
{

    public function list(array $data): array ;

    public function merchantList(): array ;

    public function firstInfo(array $where,array $field): array ;

    public function export(array $ids, array $column, array $search): array ;

    public function import(string $url): array ;

    public function importResultList(string $identity, int $pageNum, int $pageSize): array ;

    public function importResultExport($identity): array ;

    public function update(string $deviceId,string $ip,string $g200IP, string $account, string $pass,bool $needEncrypt): array ;

}
