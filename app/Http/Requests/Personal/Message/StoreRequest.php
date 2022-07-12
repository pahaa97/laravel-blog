<?php

namespace App\Http\Requests\Personal\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'chat_id' => 'required|integer',
//            'from_user_id' => 'required|integer',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
