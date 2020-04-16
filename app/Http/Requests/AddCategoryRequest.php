<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $id = $this->id;
        if (isset($id)) {
            /*EDIT*/
            return [
                'name' => 'unique:vp_categories,cate_name,' . $this->segment(4) . ',cate_id',
            ];
        } else {
            /*ADD*/
            return [
                'name' => 'unique:vp_categories,cate_name',
            ];
        }
    }
    public function messages()
    {
        return [
            'name.unique' => 'Danh mục đã tồn tai',
        ];
    }
}
