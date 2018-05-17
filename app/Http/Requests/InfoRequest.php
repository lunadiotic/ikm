<?php

namespace App\Http\Requests;

use App\Models\Information;
use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
        /**
         * $this-> info = info from name of route
         */
        $info = Information::find($this->info);

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
                    'code' => 'required|string|unique:informations,code',
                    'title' => 'required|string|min:2|unique:informations,title',
                    'status' => 'required'
                ];
            }
            case 'PUT':
            {
                return [
                    'code' => 'required|string|unique:informations,code,' . $info->id,
                    'title' => 'required|string|min:2|unique:informations,title,' . $info->id,
                    'status' => 'required'
                ];
            }
            case 'PATCH':
            {
                return [
                    'code' => 'required|string|unique:informations,code,' . $info->id,
                    'title' => 'required|string|min:2|unique:informations,title,' . $info->id,
                    'status' => 'required'
                ];
            }
            default:break;
        }
    }
}
