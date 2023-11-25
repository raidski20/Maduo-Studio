<?php

namespace App\Http\Requests;

use App\Enums\WorkType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WorkRequest extends FormRequest
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
            'work.title' => ['required', 'min:7,', 'max:255'],
            'work.description' => ['required', 'min:7'],
            'work.url' => ['nullable', 'url', 'max:255'],
            'work.type' => ['required', Rule::enum(WorkType::class)],
            'work.attachment' => ['required', 'array']
        ];
    }

    public function attributes(): array
    {
        return [
            'work.title' => 'Work title',
            'work.description' => 'Work description',
            'work.url' => 'Work link',
            'work.type' => 'Work type',
            'work.attachment' => 'Work attachment',
        ];
    }
}
