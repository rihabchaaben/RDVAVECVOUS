<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProProfilRequest extends FormRequest
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
            'nom' => 'required',
            'description' => 'required',
            'siret' => 'required',
            'telephone' => 'required_without:mobile|size:10|regex:(0)',
            'mobile' => 'required_without:telephone|size:10|regex:(0)',
            'email' => 'required',
            'adresse' => 'required',
            'nom_assurance' => 'required',
            'description_garantie' => 'required',
            'cp' => 'required',
            'ville_id' => 'required',
            'category' => 'required',
            'zone_de_travail_vil' => 'required',
            'zone_de_travail_dep' => 'required',

        ];
    }
}
