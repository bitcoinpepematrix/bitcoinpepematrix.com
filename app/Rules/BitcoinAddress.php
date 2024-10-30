<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BitcoinAddress implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/^(1|3|bc1)[a-zA-Z0-9]{25,59}$/';

        if (! preg_match($pattern, $value)) {
            $fail('The :attribute is not a valid Bitcoin address.');
        }
    }
}
