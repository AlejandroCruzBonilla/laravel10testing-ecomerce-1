<?php

namespace App\Traits\Validations;

use Illuminate\Support\Str;

trait CommonRules {

  public function commonRules() {
    return [
      'slug' => ['required','string'],
      'status' => ['required','string','in:published,unpublished'],
    ];
  }

  public function prepareSlug() {
    return Str::slug($this->slug);
  }
}