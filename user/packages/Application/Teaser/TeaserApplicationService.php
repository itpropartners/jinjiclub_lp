<?php
namespace Application\Teaser;

use Domain\Models\User\User;
use Domain\Models\User\UserRepository;
use Hash;


use Domain\Models\Contact\Contact;
use Domain\Models\Contact\ContactRepository;
use App\Mail\TeaserSendmail;
use Illuminate\Http\Request;

/**
 * ティザーサイト 仮登録アプリケーションサービス
 */
class TeaserApplicationService implements TeaserApplicationServiceInterface
{
    /**
     * 作成
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function create(Request $request): void
    {
        $user = new User();
        $user->executeFill($request->all());

        $passStr = substr($user->email, 0, strpos($user->email, "@"));
        $user->password = Hash::make($passStr);

        $userRepository = new UserRepository();
        $userRepository->updateOrInsert($user);

        $inputs = $request->except('action');
        \Mail::to('hrpro-info@hajimari.inc')->send(new TeaserSendmail($inputs));
        \Mail::to($inputs['email'])->send(new TeaserSendmail($inputs));

        $request->session()->regenerateToken();
    }
}
