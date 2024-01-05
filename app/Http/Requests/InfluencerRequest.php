<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfluencerRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:influencers,name'],
            'known_as' => ['nullable', 'string', 'max:255',],
            'x_handle' => ['required', 'string', 'max:255', 'unique:influencers,x_handle'],
            'official_website' => ['nullable', 'string', 'max:255', 'url'],
            'bio' => ['nullable', 'string', 'max:1000',],
            'quote' => ['nullable', 'string', 'max:255',],
            'profile_image' => ['required', 'string', 'max:255', 'url'],
            'banner_image' => ['required', 'string', 'max:255', 'url'],
            'country_location' => ['required', 'string', 'max:2',],
            'country_origin' => ['required', 'string', 'max:2',],
            'country_raised' => ['nullable', 'string', 'max:2',],
            'estimated_networth' => ['required', 'string', 'max:255',],
        ];
    }
}
