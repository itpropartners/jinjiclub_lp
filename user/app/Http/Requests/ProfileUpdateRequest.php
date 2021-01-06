<?php

namespace App\Http\Requests;

use App\Http\Requests\PieceBaseRequest;
use Illuminate\Validation\Validator;

/**
 * 基本情報更新時のバリデーション
 */
class ProfileUpdateRequest extends PieceBaseRequest
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
            'first_name' => 'filled',
            'last_name' => 'filled',
            'first_name_kana' => 'nullable|kana',
            'last_name_kana' => 'nullable|kana',
            'birthday' => 'nullable|date',
            'gender' => 'nullable|integer',
            'tel' => 'nullable|tel',
            'region_id' => 'nullable|integer',
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function validationData(): array
    {
        $this->addDateFieldYmd('birthday', true);
        return $this->all();
    }

    /**
     * Undocumented function
     *
     * @param [type] $validator
     * @return void
     */
    public function withValidator($validator): void
    {
        $validator->after(function (Validator $validator) {
            if (key_exists('birthday', $validator->failed())) {
                $this->copyErrors($validator, 'birthday', 'birthday_year');
            }
        });
    }
}
