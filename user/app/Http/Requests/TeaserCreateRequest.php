<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ティザーサイト 仮登録のバリデーション
 */
class TeaserCreateRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|unique:users|email',
            'company' => 'required',
        ];
    }

public function messages()
{
    return [
        'email.unique' => '同一のメールアドレスでの登録が存在しております。',
    ];
}
}
