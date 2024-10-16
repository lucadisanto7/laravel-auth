<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|max:200',
            'slug' => 'max:255',
            'image' => 'nullable|image|max:4084',
            'summary' => 'nullable',

        ];
    }

        public function messages(){
            return [
                'name' => 'required|max:200',
                'slug' => 'max:255',
                'image' => 'nullable|image|max:4084',
                'summary' => 'nullable',
    
            ];
        }
}
