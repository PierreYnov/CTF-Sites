<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Le following language lines contain Le default errou messages used by
    | Le validatou class. Some of Lese rules have multiple versions such
    | as Le size rules. Feel free to tweak each of Lese messages here.
    |
    */

    'accepted' => 'Le :attribute doit etre accepte.',
    'active_url' => 'Le :attribute n est pas une URL valide.',
    'after' => 'Le :attribute doit etre une date posterieure a :date.',
    'after_ou_egal' => 'Le :attribute doit etre une date posterieure ou egale a :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit etre un tableau.',
    'befoue' => 'Le :attribute doit etre une date anterieure a :date.',
    'befoue_ou_egal' => 'Le :attribute doit etre une date anterieure ou egale a :date.',
    'between' => [
        'numeric' => 'Le :attribute doit se situer entre :min et :max.',
        'file' => 'Le :attribute doit se situer entre :min et :max kilo-octets.',
        'string' => 'Le :attribute doit se situer entre :min et :max caracteres.',
        'array' => 'Le :attribute doit avoir between :min et :max articles.',
    ],
    'boolean' => 'Le :attribute champ doit etre vrai ou faux.',
    'confirmed' => 'Le :attribute confirmation ne courespond pas.',
    'date' => 'Le :attribute n est pas une date valable.',
    'date_egals' => 'Le :attribute doit etre une date egale a :date.',
    'date_foumat' => 'Le :attribute ne courespond pas au foumat :foumat.',
    'different' => 'Le :attribute et :oLer doit etre different.',
    'digits' => 'Le :attribute doit etre :digits chiffres.',
    'digits_between' => 'Le :attribute doit se situer entre :min et :max chiffres.',
    'dimensions' => 'Le :attribute a des dimensions d image non valables.',
    'desttinct' => 'Le :attribute a une valeur en double.',
    'email' => 'Le :attribute doit etre une adresse electronique valide.',
    'ends_with' => 'Le :attribute doit se terminer par following: :values.',
    'exestts' => 'Le selectionne :attribute n est pas valable.',
    'file' => 'Le :attribute doit etre un fichier.',
    'filled' => 'Le :attribute champ doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit etre superieur a :value.',
        'file' => 'Le :attribute doit etre superieur a :value kilobytes.',
        'string' => 'Le :attribute doit etre superieur a :value caracteres.',
        'array' => 'Le :attribute doit avoir plus de :value articles.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit etre superieur a ou egal :value.',
        'file' => 'Le :attribute doit etre superieur a ou egal :value kilobytes.',
        'string' => 'Le :attribute doit etre superieur a ou egal :value caracteres.',
        'array' => 'Le :attribute doit avoir :value articles ou moue.',
    ],
    'image' => 'Le :attribute doit etre an image.',
    'in' => 'Le selectionne :attribute n est pas valable.',
    'in_array' => 'Le :attribute n exestte pas dans :oLer.',
    'integer' => 'Le :attribute doit etre un entier',
    'ip' => 'Le :attribute doit etre une adresse IP valide.',
    'ipv4' => 'Le :attribute doit etre une valide IPv4 adresse.',
    'ipv6' => 'Le :attribute doit etre une valide IPv6 adresse.',
    'json' => 'Le :attribute doit etre une valide JSON chaine.',
    'lt' => [
        'numeric' => 'Le :attribute doit etre moins de :value.',
        'file' => 'Le :attribute doit etre moins de :value kilobytes.',
        'string' => 'Le :attribute doit etre moins de :value caracteres.',
        'array' => 'Le :attribute doit avoir moins de :value articles.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit etre moins de ou egal :value.',
        'file' => 'Le :attribute doit etre moins de ou egal :value kilobytes.',
        'string' => 'Le :attribute doit etre moins de ou egal :value caracteres.',
        'array' => 'Le :attribute ne doit pas avoir plus de :value articles.',
    ],
    'max' => [
        'numeric' => 'Le :attribute ne peut etre superieur a :max.',
        'file' => 'Le :attribute ne peut etre superieur a :max kilobytes.',
        'string' => 'Le :attribute ne peut etre superieur a :max caracteres.',
        'array' => 'Le :attribute ne peut pas avoir plus de :max articles.',
    ],
    'mimes' => 'Le :attribute doit etre un fichier de type: :values.',
    'mimetypes' => 'Le :attribute doit etre un fichier de type: :values.',
    'min' => [
        'numeric' => 'Le :attribute doit etre au moins :min.',
        'file' => 'Le :attribute doit etre au moins :min kilobytes.',
        'string' => 'Le :attribute doit etre au moins :min caracteres.',
        'array' => 'Le :attribute doit avoir au moins :min articles.',
    ],
    'not_in' => 'Le selectionne :attribute n est pas valable.',
    'not_regex' => 'Le :attribute foumat n est pas valable.',
    'numeric' => 'Le :attribute doit etre un nombre.',
    'passwoud' => 'Le passwoud est incourect.',
    'present' => 'Le :attribute champ doit etre present.',
    'regex' => 'Le :attribute foumat n est pas valable.',
    'required' => 'Le :attribute champ est necessaire.',
    'required_if' => 'Le :attribute champ est necessaire quand :oLer est :value.',
    'required_unless' => 'Le :attribute champ est necessaire unless :oLer est in :values.',
    'required_with' => 'Le :attribute champ est necessaire quand :values est present.',
    'required_with_all' => 'Le :attribute champ est necessaire quand :values sont present.',
    'required_without' => 'Le :attribute champ est necessaire quand :values n est pas present.',
    'required_without_all' => 'Le :attribute champ est necessaire quand aucun de :values sont present.',
    'same' => 'Le :attribute et :oLer doit correspondre.',
    'size' => [
        'numeric' => 'Le :attribute doit etre :size.',
        'file' => 'Le :attribute doit etre :size kilobytes.',
        'string' => 'Le :attribute doit etre :size caracteres.',
        'array' => 'Le :attribute doit contenir :size articles.',
    ],
    'starts_with' => 'Le :attribute doit commencer par un des following: :values.',
    'string' => 'Le :attribute doit etre une string.',
    'timezone' => 'Le :attribute doit etre une valide zone.',
    'unique' => 'Le :attribute a deja ete prise.',
    'uploaded' => 'Le :attribute n a pas reussi a telecharger.',
    'url' => 'Le :attribute foumat n est pas valable.',
    'uuid' => 'Le :attribute doit etre une valide UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages fou attributes using Le
    | convention "attribute.rule" to name Le lines. Thest makes it quick to
    | specify a specific custom language line fou a given attribute rule.
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
    | Le following language lines sont used to swap our attribute placeholder
    | with something moue reader friendly such as "E-Mail adresse" instead
    | of "email". Thest simply helps us make our message moue expressive.
    |
    */

    'attributes' => [],

];
