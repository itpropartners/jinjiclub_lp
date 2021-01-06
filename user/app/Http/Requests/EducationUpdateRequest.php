<?php

namespace App\Http\Requests;

use App\Http\Requests\PieceBaseRequest;

/**
 * 学歴情報更新時のバリデーション
 */
class EducationUpdateRequest extends PieceBaseRequest
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
            'educations.*.school_name' => 'required',
            'educations.*.department' => 'required',
            'educations.*.education_state' => 'required',
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function validationData(): array
    {
        $this->addDateFieldYm('educations.*.admission_date', true);
        $this->addDateFieldYm('educations.*.graduation_date', true);
        return $this->all();
    }
}
