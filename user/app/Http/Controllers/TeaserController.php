<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeaserCreateRequest;
use Application\Teaser\TeaserApplicationService;


use App\Http\Requests\ContactCreateRequest;
use Application\Contact\ContactApplicationService;
use Domain\Models\Contact\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * ティザーコントローラー
 */
class TeaserController extends Controller
{
    // アプリケーションサービス
    public TeaserApplicationService $service;

    /**
     * コンストラクタ
     */
    public function __construct(TeaserApplicationService $service)
    {
        $this->service = $service;
    }

    /**
     * インデックス
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('teaser.index');

//        $contact = new Contact();
//        return view('contact.index')->with(['contact' => $contact]);
    }

    /**
     * 仮登録フォーム
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function form1(): View
    {
        return view('teaser.form1');
    }

    /**
     * 仮登録完了フォーム
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function form2(TeaserCreateRequest $request): View
    {
        $this->service->create($request);
        return view('teaser.form2');
    }

    /**
     * 作成
     *
     * @param \App\Http\Requests\ContactCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(ContactCreateRequest $request): RedirectResponse
    {
        $this->service->create($request);
        return redirect()->route('contact.index')->with('success', '送信しました');
    }
}
