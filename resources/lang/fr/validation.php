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

'accepted' => 'Le champ :attribute doit être accepté.',
'active_url' => 'Le champ :attribute n’est pas une URL valide.',
'after' => 'Le champ :attribute doit être une date postérieure à :date.',
'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
'array' => 'Le champ :attribute doit être un tableau.',
'before' => 'Le champ :attribute doit être une date antérieure à :date.',
'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
'between' => [
    'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
    'file' => 'Le champ :attribute doit être compris entre :min et :max kilobytes.',
    'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
    'array' => 'Le champ :attribute doit avoir entre :min et :max éléments.',
    ],
   'boolean' => 'Le champ :attribute doit être vrai ou faux.',
'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
'date' => 'Le champ :attribute n’est pas une date valide.',
'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
'different' => 'Le champ :attribute et :other doivent être différents.',
'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
'dimensions' => 'Le champ :attribute a des dimensions d’image invalides.',
'distinct' => 'Le champ :attribute a une valeur en double.',
'email' => 'Le champ :attribute doit être une adresse email valide.',
'ends_with' => 'Le champ :attribute doit se terminer par l’une des valeurs suivantes : :values.',
'exists' => 'Le champ :attribute sélectionné est invalide.',
'file' => 'Le champ :attribute doit être un fichier.',
'filled' => 'Le champ :attribute doit avoir une valeur.',
'gt' => [
    'numeric' => 'Le champ :attribute doit être supérieur à :value.',
    'file' => 'Le champ :attribute doit être supérieur à :value kilobytes.',
    'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
    'array' => 'Le champ :attribute doit contenir plus de :value éléments.',
    ],
    'gte' => [
    'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
    'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilobytes.',
    'string' => 'Le champ :attribute doit contenir au moins :value caractères.',
    'array' => 'Le champ :attribute doit avoir :value éléments ou plus.',
],
'image' => 'Le champ :attribute doit être une image.',
'in' => 'Le champ :attribute sélectionné est invalide.',
'in_array' => 'Le champ :attribute n’existe pas dans :other.',
'integer' => 'Le champ :attribute doit être un entier.',
'ip' => 'Le champ :attribute doit être une adresse IP valide.',
'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
'lt' => [
    'numeric' => 'Le champ :attribute doit être inférieur à :value.',
    'file' => 'Le champ :attribute doit être inférieur à :value kilobytes.',
    'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
    'array' => 'Le champ :attribute doit avoir moins de :value éléments.',
],
   'lte' => [
    'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
    'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilobytes.',
    'string' => 'Le champ :attribute doit contenir au plus :value caractères.',
    'array' => 'Le champ :attribute ne doit pas avoir plus de :value éléments.',
],
'max' => [
    'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
    'file' => 'Le champ :attribute ne doit pas dépasser :max kilobytes.',
    'string' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
    'array' => 'Le champ :attribute ne doit pas avoir plus de :max éléments.',
],
'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
'min' => [
    'numeric' => 'Le champ :attribute doit être d’au moins :min.',
    'file' => 'Le champ :attribute doit être d’au moins :min kilobytes.',
    'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
    'array' => 'Le champ :attribute doit avoir au moins :min éléments.',
],
'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
'not_in' => 'Le champ :attribute sélectionné est invalide.',
'not_regex' => 'Le format du champ :attribute est invalide.',
'numeric' => 'Le champ :attribute doit être un nombre.',
'password' => 'Le mot de passe est incorrect.',
'present' => 'Le champ :attribute doit être présent.',
'regex' => 'Le format du champ :attribute est invalide.',
'required' => 'Le champ :attribute est obligatoire.',
'required_if' => 'Le champ :attribute est obligatoire quand :other est :value.',
'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
'required_with_all' => 'Le champ :attribute est obligatoire quand :values sont présents.',
'required_without' => 'Le champ :attribute est obligatoire quand :values n’est pas présent.',
'required_without_all' => 'Le champ :attribute est obligatoire quand aucun des :values n’est présent.',
'prohibited' => 'Le champ :attribute est interdit.',
'prohibited_if' => 'Le champ :attribute est interdit quand :other est :value.',
'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
'same' => 'Le champ :attribute et :other doivent correspondre.',
    'size' => [
    'numeric' => 'Le champ :attribute doit être :size.',
    'file' => 'Le champ :attribute doit être de :size kilobytes.',
    'string' => 'Le champ :attribute doit contenir :size caractères.',
    'array' => 'Le champ :attribute doit contenir :size éléments.',
],
'starts_with' => 'Le champ :attribute doit commencer par l’une des valeurs suivantes : :values.',
'string' => 'Le champ :attribute doit être une chaîne de caractères.',
'timezone' => 'Le champ :attribute doit être une zone valide.',
'unique' => 'Le champ :attribute a déjà été pris.',
'uploaded' => 'Le téléchargement du fichier :attribute a échoué.',
'url' => 'Le format du champ :attribute est invalide.',
'uuid' => 'Le champ :attribute doit être un UUID valide.',

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
        'rule-name' => 'message-personnalisé',
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