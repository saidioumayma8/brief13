<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class recetteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules =  [
            'title' => 'required|min:5',
            'description'=> 'required|min:50',
            'ingredients'=> 'required|min:50',
            'instructions' => 'required|min:50',
        ];
        if($this->route()->getActionMethod() === 'update'){

            $rules['image'] ='require|image';
        }
        dd();

        return $rules;
    }
}
