<?php

namespace App\Http\Requests\UserRequest\UserRequest;

use App\Helpers\Response\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest implements UserRequestInterface
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array {
        return [
            "name" => "required|min:3|max:255",
            "surname" => "required|min:3|max:255",
            "patronymic" => "min:3|max:255",
            "login" => "required|unique:users,login|min:3|max:255",
            "password" => "required|min:8|max:255",
            "access_id" => "required|exists:accesses,id",
        ];
    }

    public function messages(): array {
        return [
            "name.required" => "Поле имя обязательно для заполнения",
            "name.min" => "Минимальная длина имени 3 символа",
            "name.max" => "Максимальная длина имени 255 символов",

            "surname.required" => "Поле фамилия обязательно для заполнения",
            "surname.min" => "Минимальная длина фамилии 3 символа",
            "surname.max" => "Максимальная длина фамилии 255 символов",

            "patronymic.min" => "Минимальная длина отчества 3 символа",
            "patronymic.max" => "Максимальная длина отчества 255 символов",

            "login.required" => "Поле логина обязательно для заполнения",
            "login.min" => "Минимальная длина логина 3 символа",
            "login.max" => "Максимальная длина логина 255 символов",
            "login.unique" => "Данный логин в системе уже зарегистрирован",

            "password.required" => "Поле пароль обязательно для заполнения",
            "password.min" => "Минимальная длина пароля 3 символа",
            "password.max" => "Максимальная длина пароля 255 символов",

            "access_id.required" => "Поле доступа обязательно для заполнения",
            "access_id.exists" => "Выбранное поле не найдено в системе",
        ];
    }

    public function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(Response::error_data($validator->errors()));
    }
}
