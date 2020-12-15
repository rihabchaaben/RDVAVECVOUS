<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SepaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bic' => 'required|max:20',
            'pays' => 'required',
            'iban' => 'required|size:20|regex:(FR76)',
        ];
    }

    public function messages()
    {
        return [
            'bic.required' => 'Le numéro Bic est obligatoire',
            'iban.required' => 'Le numéro IBAN est obligatoire',
            // 'bic.max' => 'Verifié le numéro Bic ',
            'bic.max' => 'Vérifiez le numéro Bic ',
            'iban.regex' => 'Le numéro IBAN commence par FR76',
            'iban.size' => 'Le numéro IBAN commence par FR76',
        ];
    }
}
