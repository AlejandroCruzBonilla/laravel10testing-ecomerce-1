<?php

namespace App\Traits\Validations;

trait MetaTagsRules {

  public function metaTagsRules() {
    return [
      'meta' => ['array'],
      'meta.title' => ['required','string'],
      'meta.description' => ['required','string'],
    ];
  }

  public static function metaTagsMessages() {
    return [
      'meta.title.required' => 'The Meta title Field is required.',
      'meta.description.required' => 'The Meta description Field is required.',
    ];
  }
}