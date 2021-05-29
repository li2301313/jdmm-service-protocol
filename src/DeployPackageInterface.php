<?php


namespace Jdmm\Vhub\Protocol;

/**
 * Interface DeployPackageInterface
 * @package Jdmm\Vhub\Protocol
 */
interface DeployPackageInterface
{
    public function putPackage($params);
    public function deletePackage($id);
    public function packageList($page,$pageNum);
    public function addFile($filename,$md5,$size,$relativePath);
    public function localDownload($fileId);
    public function newVersion($version);
}