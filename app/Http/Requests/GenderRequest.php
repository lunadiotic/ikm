<?php

namespace App\Http\Requests;

use App\Models\Gender;
use Illuminate\Foundation\Http\FormRequest;

class GenderRequest extends FormRequest
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
        $gender = Gender::find($this->gender);

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'code' => 'required|string|unique:genders,code',
                    'title' => 'required|string|min:2|unique:genders,title',
                    'status' => 'required'
                ];
            }
            case 'PUT':
            {
                return [
                    'code' => 'required|string|unique:genders,code,' . $gender->id,
                    'title' => 'required|string|min:2|unique:genders,title,' . $gender->id,
                    'status' => 'required'
                ];
            }
            case 'PATCH':
            {
                return [
                    'code' => 'required|string|unique:genders,code,' . $gender->id,
                    'title' => 'required|string|min:2|unique:genders,title,' . $gender->id,
                    'status' => 'required'
                ];
            }
            default:break;
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Kolom Jenis Kelamin Harus Diisi',
            'code.required'  => 'Kolom Kode Harus Diisi',
        ];
    }
}
