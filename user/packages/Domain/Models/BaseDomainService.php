<?php
namespace Domain\Models;

use Illuminate\Http\Request;

/**
 * ドメインサービス基底クラス
 */
class BaseDomainService
{
    /**
     * アバター画像を保存するかどうか
     *
     * @param \Illuminate\Http\Request $request
     * @return boolean
     */
    public function hasSaveAvatorImage(Request $request): bool
    {
        return $this->hasSaveImage('avatar_path', $request);
    }

    /**
     * 画像を保存するかどうか
     *
     * @param string $fileInputName
     * @param \Illuminate\Http\Request $request
     * @return boolean
     */
    public function hasSaveImage(string $fileInputName, Request $request): bool
    {
        return $request->hasFile($fileInputName) && $request->file($fileInputName)->isValid();
    }
}
