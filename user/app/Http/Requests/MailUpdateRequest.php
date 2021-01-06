<?php

namespace App\Http\Requests;

use App\Http\Requests\PieceBaseRequest;
use Auth;

/**
 * メールアドレス変更時のバリデーション
 */
class MailUpdateRequest extends PieceBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|unique:users,email,'.Auth::id().',id'
        ];
    }
}
