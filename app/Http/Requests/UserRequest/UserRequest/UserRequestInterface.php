<?php

namespace App\Http\Requests\UserRequest\UserRequest;

use Illuminate\Contracts\Validation\Validator;

interface UserRequestInterface
{
    public function rules(): array;
    public function messages(): array;
    public function failedValidation(Validator $validator): void;
}
