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
}