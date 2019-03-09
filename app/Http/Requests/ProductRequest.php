<?php

namespace App\Http\Requests;

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
        switch ($this->method()) {
            case 'DELETE': {
                return [];
            }
            default: {
                return [
                    'title_ge'        => 'required:products,title_ge',
                    'title_en'        => 'required:products,title_en',
                    'description_ge'  => 'required:products,description_ge',
                    'description_en'  => 'required:products,description_en',
                    'text_ge'         => 'required:products,text_ge',
                    'text_en'         => 'required:products:text_en',
                    'price'           => 'required|int',
                    'cat_id'          => 'required|int'
                ];
            }
        }

    }
}
