<?php

namespace App\Http\Requests\User;

use App\Models\user;
// use Gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this rule only use at update request
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255',
           ],
           'email' => [
                'required', 'email', 'max:255', Rule::unique('users')->ignore($this->user),
                // rule unique only work for other record id
           ],
           'password' => [
            'min:8', 'string', 'max:255',
       ],
        //add validation for role this here

        ];
    }
}
