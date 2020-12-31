<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    protected $fillable = [
        'massage',
        'img',
    ];

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
            'img' => 'required|mimes:jpg,jpeg,webp,bmp,png|size:5000',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'Это поле обязательно для заполнения',
            'mimes' => 'Некорректный формат файла.',
            'size' => 'Размер файла должен быть менее 5Mb.'
        ];
    }
}
