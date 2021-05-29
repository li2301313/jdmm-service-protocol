<?php declare(strict_types=1);

namespace Jdmm\Vhub\Protocol;

interface ScreensaverInterface{


    /**
     * 获取列表
     * @return array
     */
    public function screensaverList(): array;

    /**
     * @param int $id
     * @return array
     */
    public function idIsExist(int $id) : array;

    /**
     * 替换屏保
     * @param int $id
     * @param array $fileInfo
     * @return bool
     */
    public function replace(int $id, array $fileInfo) : bool;

}