<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Traits\CommonRequestTrait;

/**
 * ベースのバリデーション
 */
class PieceBaseRequest extends FormRequest
{
    use CommonRequestTrait;

    /**
     * バリデーション定義
     * @var array
     */
    public $rules = [];

    /**
     * フィールド名定義
     * @var array
     */
    public $fields = [];

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * バリデーションルールの設定
     * @return array
     */
    public function rules()
    {
        return $this->rules;
    }
}
