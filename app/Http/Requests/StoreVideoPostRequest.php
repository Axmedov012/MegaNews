<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                   'title'=>'required|string|max:255',
                   'description'=>'required|string|max:1000',
                   'video'=>'required|file|mimes:mp4,webm,ogg|max:20000',
                   'photo'=>'required|file|mimes:jpg,jpeg,png|max:1024',
        ];
    }
}
