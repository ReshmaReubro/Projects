<?php namespace App\Http\Requests\Admin\Work;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreWork extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.work.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'service_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'slug' => ['required', Rule::unique('works', 'slug'), 'string'],
            'meta_description' => ['required', 'string'],
            'image' => ['nullable', 'string'],
            'featured' => ['required', 'boolean'],
            
        ];
    }
}
