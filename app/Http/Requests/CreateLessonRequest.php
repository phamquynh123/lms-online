<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLessonRequest extends FormRequest
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
            'name' => 'required',
            'num_of_lesson' => 'required',
            'is_test' => 'required',
            'schedule_time' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('message.classroom.required.name'),
            'schedule_time.required' => trans('message.classroom.required.schedule_time'),
            'num_of_lesson.required' => trans('message.classroom.required.num_of_lesson'),
        ];
    }
}
