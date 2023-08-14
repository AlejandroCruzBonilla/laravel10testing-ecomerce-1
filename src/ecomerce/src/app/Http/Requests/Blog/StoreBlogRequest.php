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
      'title' => ['required'],
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

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array<string, string>
   */
  public function messages(): array
  {
    return [
      ...self::selfMessages(),
      ...self::commonMessages(),
      ...self::metaTagsMessages()
    ];
  }


  // statics methods
  public static function selfMessages(){
    return [
      'title.required' => 'Title Field is required',
    ];
  }

  public static function getValidationMessages()
  {
    $messages = [
      ...self::selfMessages(),
      ...self::commonMessages(),
      ...self::metaTagsMessages()
    ];

    $parsedMessages = [];

    foreach ($messages as $name => $message) {

      if(count(explode('.', $name)) > 2){
        list($name, $subname, $rule)  = explode('.', $name);
        $parsedMessages[$name][$subname][$rule] = $message;
      }
      else {
        list($name, $rule)  = explode('.', $name);
        $parsedMessages[$name][$rule] = $message;
      }
    }

    return json_decode(
      json_encode($parsedMessages)
    );
  }
}
