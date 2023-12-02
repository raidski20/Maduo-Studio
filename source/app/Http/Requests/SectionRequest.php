<?php

namespace App\Http\Requests;

use App\Enums\SectionType;
use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    private const VALIDATOR_MAP = [
        SectionType::ABOUT_US->value => 'aboutUsValidator',
        SectionType::CONTACT_US->value => 'contactUsValidator',
        SectionType::SERVICES->value => 'servicesValidator',
        SectionType::STATISTICS->value => 'statisticsValidator',
        SectionType::HERO->value => 'heroValidator',
        SectionType::WORK->value => 'workValidator',
    ];

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
        $sectionName = $this->route('section')->name;

        return [
            'section.title' => ['nullable', 'min:5', 'max:250'],
            'section.description' => ['nullable', 'min:10'],
        ]
        +
        call_user_func_array([$this, self::VALIDATOR_MAP[$sectionName]], []);
    }

    private function aboutUsValidator(): array
    {
        return [
            'section.extra_data.title' => ['nullable', 'min:5'],
            'section.extra_data.description' => ['nullable', 'min:10']
        ];
    }

    private function contactUsValidator(): array
    {
        return [
            'section.extra_data.email' => ['nullable', 'email:filter'],
            'section.extra_data.phone' => ['nullable'],

            'section.extra_data.socials' => ['nullable', 'array'],
            'section.extra_data.socials.*' => ['required', 'array'],
            'section.extra_data.socials.*.name' => ['required', 'string'],
            'section.extra_data.socials.*.link' => ['required', 'url'],
        ];
    }

    private function statisticsValidator(): array
    {
        return [
            'section.extra_data.entities' => ['nullable', 'array'],
            'section.extra_data.entities.*' => ['required', 'array'],
            'section.extra_data.entities.*.name' => ['required', 'string'],
            'section.extra_data.entities.*.number' => ['required', 'integer'],
        ];
    }

    private function servicesValidator(): array
    {
        return [
            'section.extra_data.services' => ['required', 'array', 'min:4', 'max:4']
        ];
    }

    private function heroValidator(): array
    {
        return [];
    }

    private function workValidator(): array
    {
        return [];
    }

    public function attributes(): array
    {
        return [
            'section.title' => 'section title',
            'section.description' => 'section description',


            //Contact-us section attributes
            'section.extra_data.email' => 'extra data: email',
            'section.extra_data.phone' => 'extra data: phone number',
            'section.extra_data.socials' => 'extra data: social links',
            'section.extra_data.socials.*.name' => 'extra data: social link name',
            'section.extra_data.socials.*.link' => 'extra data: social link name',

            //Statistics section attributes
            'section.extra_data.entities' => 'extra data',
            'section.extra_data.entities.*.name' => 'extra data: statistic name',
            'section.extra_data.entities.*.number' => 'extra data: statistic number',

            //Services section attributes
            'section.extra_data.services' => 'extra data: services',

            //About-us section attributes
            'section.extra_data.title' => 'extra data: title',
            'section.extra_data.description' => 'extra data: description'
        ];
    }
}
