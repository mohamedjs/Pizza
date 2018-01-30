<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PizzaFormRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            '$pizza_image' => 'required',
            'sub_id'=> 'required',
            'pizza_name'=> 'required',
            'pizza_component'=> 'required',
            'pizza_datiles'=> 'required',
            'small'=> 'required',
            'medium'=> 'required',
            'larg'=> 'required',
        ];
    }
}
