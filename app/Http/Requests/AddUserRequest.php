<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
                'email' => 'email',
            ];
        } else {
            /*ADD*/
            return [
                'email' => 'email',
                'username' => 'uunique:vp_users|max:255',
             ];
        }
    }

    public function messages()
    {
        return [
            'username.unique' => 'Tên người đã tồn tại',
        ];
    }
}
