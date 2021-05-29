<?php declare(strict_types=1);


namespace Jdmm\Vhub\Protocol;

/**
 * Interface PrivateManageInterface
 * @package Jdmm\Vhub\Protocol
 */
interface PrivateManageInterface
{
    public function prepare();
    public function putAccount($params);
    public function preparePwd();
    public function accountVerify($name);
    public function pwdVerify($name,$pwd,$needActiveTime);
    public function postAccount($accountId,$accountPwd,$services,$activeTime);
    public function getPwd($accountId,$authPwd);
    public function deployStatus($accountName,$accountPwd,$status);
    public function accountList($name,$accountName,$status,$services,$page,$pageNum);
    public function serviceList();
    public function accountInfo($accounId);
}

