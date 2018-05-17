<?php

namespace App\Http\Requests;

use App\Models\Education;
use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
        $education = Education::find($this->education);

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
                    'code' => 'required|string|unique:education,code',
                    'title' => 'required|string|min:2|unique:education,title',
                    'status' => 'required'
                ];
            }
            case 'PUT':
            {
                return [
                    'code' => 'required|string|unique:education,code,' . $education->id,
                    'title' => 'required|string|min:2|unique:education,title,' . $education->id,
                    'status' => 'required'
                ];
            }
            case 'PATCH':
            {
                return [
                    'code' => 'required|string|unique:education,code,' . $education->id,
                    'title' => 'required|string|min:2|unique:education,title,' . $education->id,
                    'status' => 'required'
                ];
            }
            default:break;
        }
    }
}
