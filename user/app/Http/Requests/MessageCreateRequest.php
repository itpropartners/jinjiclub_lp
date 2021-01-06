<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * メッセージ送信時のバリデーション
 */
class MessageCreateRequest extends FormRequest
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
            'file' => 'nullable|max:10240|mimes:jpeg,jpg,png,pdf,xls,xlsx,doc,docx,ppt,pptx',
            'form' => 'required_without_all:message,file'
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'form.required_without_all' => 'メッセージの入力またはファイルのアップロードをしてください。'
        ];
    }
}
