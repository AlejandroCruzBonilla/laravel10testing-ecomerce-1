<?php

namespace App\Http\Requests\Blog;

use App\Traits\Validations\CommonRules;
use App\Traits\Validations\MetaTagsRules;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{

  use CommonRules, MetaTagsRules;

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
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'title' => ['required', 'string'],
      'body' => ['nullable', 'string'],

      ...$this->commonRules(),
      ...$this->metaTagsRules(),
    ];
  }

  /**
   * Prepare the data for validation.
   */
  protected function prepareForValidation(): void
  {
    $this->merge([
      'slug' => $this->prepareSlug(),
    ]);
  }
}
