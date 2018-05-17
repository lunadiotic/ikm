<?php

namespace App\Http\Requests;

use App\Models\Job;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
        $job = Job::find($this->job);

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
                    'code' => 'required|string|unique:jobs,code',
                    'title' => 'required|string|min:2|unique:jobs,title',
                    'status' => 'required'
                ];
            }
            case 'PUT':
            {
                return [
                    'code' => 'required|string|unique:jobs,code,' . $job->id,
                    'title' => 'required|string|min:2|unique:jobs,title,' . $job->id,
                    'status' => 'required'
                ];
            }
            case 'PATCH':
            {
                return [
                    'code' => 'required|string|unique:jobs,code,' . $job->id,
                    'title' => 'required|string|min:2|unique:jobs,title,' . $job->id,
                    'status' => 'required'
                ];
            }
            default:break;
        }
    }
}
