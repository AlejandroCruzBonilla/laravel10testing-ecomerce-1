<?php

namespace App\Traits\Validations;

trait CommonRules {

  public function commonRules() {
    return [
      'slug' => ['required','string'],
      'status' => ['required','string','in:published,unpublished'],
    ];
  }
}