<?php

namespace App\Http\Requests;

use App\Http\Requests\PieceBaseRequest;

/**
 * 職歴情報更新時のバリデーション
 */
class WorkExperienceUpdateRequest extends PieceBaseRequest
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
            'workexperiences.*.company_name' => 'required',
            'workexperiences.*.work_state' => 'required',
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function validationData(): array
    {
        $this->addDateFieldYm('workexperiences.*.start_date', true);
        $this->addDateFieldYm('workexperiences.*.end_date', true);
        return $this->all();
    }
}
