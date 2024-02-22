<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
            'name' => ['nullable', 'string', 'max:255', 'unique:influencers,name'],
            'known_as' => ['nullable', 'string', 'max:255',],
            'x_handle' => [
                'required',
                'string',
                'min:2',
                'max:255',
                'unique:influencers,x_handle',
                'unique:influencer_suggestions,x_handle'
            ],
            'official_website' => ['nullable', 'string', 'max:255', 'url'],
            'bio' => ['nullable', 'string', 'max:1000',],
            'quote' => ['nullable', 'string', 'max:255',],
            'profile_image' => ['nullable', 'string', 'max:255', 'url'],
            'banner_image' => ['nullable', 'string', 'max:255', 'url'],
            'country_location' => ['nullable', 'string', 'max:2',],
            'country_origin' => ['nullable', 'string', 'max:2',],
            'country_raised' => ['nullable', 'string', 'max:2',],
            'estimated_networth' => ['nullable', 'string', 'max:255',],
        ];
    }

    public function messages(): array
    {
        return [
            'x_handle.unique' => 'The :attribute has been suggested. The Influencer is being reviewed.',
        ];
    }

    protected function prepareForValidation() : void
    {
        // If there are more than one '@' symbols, keep only the part after the last '@'
        if (Str::substrCount($this->x_handle, '@') > 1) {
            $this->x_handle = '@' . Str::afterLast($this->x_handle, '@');
        } elseif (! str_contains($this->x_handle, '@')) {
            // If there is no '@' symbol, add one at the beginning
            $this->x_handle = '@' . $this->x_handle;
        }
        // Merge the modified x_handle back into the request
        $this->merge(['x_handle' => $this->x_handle]);
    }
}
