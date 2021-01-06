<?php

namespace App\Http\Requests;

use App\Http\Requests\PieceBaseRequest;
use Illuminate\Support\Facades\Hash;
use Auth;

/**
 * パスワード変更時のバリデーション
 */
class PasswordUpdateRequest extends PieceBaseRequest
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
            'current-password' => 'required',
            'new-password' => 'required|min:8|confirmed',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            if (!(Hash::check($this->get('current-password'), Auth::user()->password))) {
                $validator->errors()->add('change_password_error', '現在のパスワードが間違っています。');
            }
            if (strcmp($this->get('current-password'), $this->get('new-password')) == 0) {
                $validator->errors()->add('change_password_error', '新しいパスワードが現在のパスワードと同じです。違うパスワードを設定してください。');
            }
        });
        return;
    }
}
