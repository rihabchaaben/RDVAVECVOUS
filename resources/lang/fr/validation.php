<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute est pas un URL validé.',
    'after' => ':attribute doit être une date après le :date.',
    'after_or_equal' => ':attribute doit être une date après ou la même que :date.',
    'alpha' => ':attribute peut contenir seulement des lettres.',
    'alpha_dash' => ':attribute peut contenir seulement des lettres, des nombres, tiret et underscores.',
    'alpha_num' => ':attribute peut contenir seulement des lettres et des nombres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date avant le :date.',
    'before_or_equal' => ':attribute doit être une date avant ou la même que :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max kil-octets.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit avoir entre :min et :max articles.',
    ],
    'boolean' => ':attribute doit être vrai ou faux.',
    'confirmed' => ':attribute ne correspond pas',
    'date' => ':attribute est pas une date validé.',
    'date_equals' => ':attribute doit être la même date que :date.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => ':attribute et :other doivent être différents.',
    'digits' => ':attribute doit être les chiffres :digits.',
    'digits_between' => ':attribute doit être entre les chiffres :min et :max.',
    'dimensions' => ':attribute a des dimensions d\'image invalides.',
    'distinct' => ':attribute a une valeur dupliquée.',
    'email' => ':attribute doit être un email validé.',
    'exists' => ':attribute sélectionné(e) est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être supérieure à :value.',
        'file' => ':attribute doit être supérieure à :value kilo-octets.',
        'string' => ':attribute doit être supérieure à :value caractères.',
        'array' => ':attribute doit avoir plus que :value articles.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être supérieure à ou égale à :value.',
        'file' => ':attribute doit être supérieure à ou égale à :value kilo-octets.',
        'string' => ':attribute doit être supérieure à ou égale à :value caractères.',
        'array' => ':attribute doit avoir :value articles ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné(e) est invalide.',
    'in_array' => ':attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un nombre entier.',
    'ip' => ':attribute doit être une adresse IP. validée',
    'ipv4' => ':attribute doit être une adresse IPv4 validée.',
    'ipv6' => ':attribute doit être une adresse IPv6 validée.',
    'json' => ':attribute doit être une chaîne de charactères JSON validée.',
    'lt' => [
        'numeric' => ':attribute doit être inférieure à :value.',
        'file' => ':attribute doit être inférieure à :value kilo-octets.',
        'string' => ':attribute doit être inférieure à :value caractères.',
        'array' => ':attribute doit avoir moins que :value articles.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inférieure ou égale à :value.',
        'file' => ':attribute doit être inférieure ou égale à  :value kilo-octets.',
        'string' => ':attribute doit être inférieure ou égale à  :value caractères.',
        'array' => ':attribute ne doit pas avoir plus que :value articles.',
    ],
    'max' => [
        'numeric' => ':attribute ne peut pas être supérieure à :max.',
        'file' => ':attribute ne peut pas être supérieure à :max kilo-octets.',
        'string' => ':attribute ne peut pas être supérieure à :max caractères.',
        'array' => ':attribute ne peut pas avoir plus que :max articles.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilo-octets.',
        'string' => ':attribute doit être au moins :min caractères.',
        'array' => ':attribute doit avoir au moins :min articles.',
    ],
    'not_in' => ':attribute sélectionné(e) est invalide.',
    'not_regex' => 'Format de :attribute est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'present' => 'Le champs :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Ce champs requis.',
    'required_if' => ':attribute est requis quand :other est: :value.',
    'required_unless' => ':attribute est requis sauf si :other est parmi les valeurs suivantes: :values.',
    'required_with' => ':attribute est requis quand :values est présent(e).',
    'required_with_all' => ':attribute est reuis quand :values sont présents.',
    'required_without' => 'Champs :attribute requis.',
    'required_without_all' => ':attribute est requis lorsque aucun de: :values est présent(e).',
    'recaptcha' => ':attribute est incorrecte.',// 16/10/2020
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilo-octets.',
        'string' => 'Le champs :attribute doit avoir :size caractères.',
        'array' => ':attribute doit contenir :size articles.',
    ],
    'starts_with' => ':attribute doit commencer par l\'une des valeurs suivantes: :values',
    'string' => ':attribute doit être une chaine de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute est déja utilisé.',
    'uploaded' => 'Echec du téléchargement de :attribute.',
    'url' => 'Le format de :attribute est invalide.',
    'uuid' => ':attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
