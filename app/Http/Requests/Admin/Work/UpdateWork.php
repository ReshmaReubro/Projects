<?php namespace App\Http\Requests\Admin\Work;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateWork extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.work.edit', $this->work);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'service_id' => ['sometimes', 'integer'],
            'name' => ['sometimes', 'string'],
            'description' => ['sometimes', 'string'],
            'slug' => ['sometimes', Rule::unique('works', 'slug')->ignore($this->work->getKey(), $this->work->getKeyName()), 'string'],
            'meta_description' => ['sometimes', 'string'],
            'image' => ['nullable', 'string'],
            'featured' => ['sometimes', 'boolean'],
            
        ];
    }
}
