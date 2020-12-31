<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'discription' => 'required|min:5',

            'title' => 'required|min:1',
            'meta_description' => 'required|min:1',

            'social_networks_title' => 'required|min:1',
            'social_networks_url' => 'required|min:1',
            'social_networks_description' => 'required|min:1',
            'number_of_episodes' => 'required|min:1',
            'genres' => 'required|min:1',
            'kinopoisk_id' => 'required|min:1',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute должна содержать не менее :min символов',
        ];
    }
}
