<?php
namespace Application\Teaser;

use Illuminate\Http\Request;

/**
 * ティザーサイト 仮登録アプリケーションサービスインタフェース
 */
interface TeaserApplicationServiceInterface
{
    /**
     * 作成
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function create(Request $request): void;
}
