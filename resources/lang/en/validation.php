<?php
/*
return [
    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [],

];
*/

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
    "accepted"              => "Field :attribute harus disetujui.",
    "active_url"            => "Field :attribute bukan valid URL.",
    "after"                 => "Field :attribute harus berupa tanggal setelah :date.",
    "alpha"                 => "Field :attribute hanya boleh berupa kata.",
    "alpha_dash"            => "Field :attribute hanya boleh berupa kata, nomor, and penghubung.",
    "alpha_num"             => "Field :attribute hanya boleh berupa kata and nomor.",
    "array"                 => "Field :attribute harus berupa array.",
    "before"                => "Field :attribute harus berupa tanggal sebelum :date.",
    "between"               => array(
        "numeric"           => "Field :attribute harus diantara :min - :max.",
        "file"              => "Field :attribute harus diantara :min - :max KB.",
        "string"            => "Field :attribute harus diantara :min - :max karakter.",
        "array"             => "Field :attribute harus diantara :min and :max items.",
    ),
    "boolean"               => "Field :attribute harus berupa true atau false",
    "confirmed"             => "Field :attribute konfirmasi tidak cocok.",
    "date"                  => "Field :attribute bukan tanggal valid.",
    "date_format"           => "Field :attribute tidak cocok dengan format :format.",
    "different"             => "Field :attribute dan :other harus berbeda.",
    "digits"                => "Field :attribute harus berupa :digits digit.",
    "digits_between"        => "Field :attribute harus di antara :min and :max digit.",
    "email"                 => "Field :attribute bukan berupa valid email.",
    "filled"                => "Field :attribute harus diisi.",
    "exists"                => "Field terpilih :attribute tidak valid.",
    "image"                 => "Field :attribute harus berupa gambar.",
    "in"                    => "Field selected :attribute tidak valid.",
    "integer"               => "Field :attribute harus berupa integer.",
    "ip"                    => "Field :attribute harus berupa IP address.",
    "max"                   => array(
        "numeric"           => "Field :attribute tidak boleh lebih dari :max.",
        "file"              => "Field :attribute tidak boleh lebih dari :max KB.",
        "string"            => "Field :attribute tidak boleh lebih dari :max karakter.",
        "array"             => "Field :attribute tidak boleh lebih dari :max items.",
    ),
    "mimes"                 => "Field :attribute harus berupa file: :values.",
    "min"                   => array(
        "numeric"           => "Field :attribute harus lebih dari :min.",
        "file"              => "Field :attribute harus lebih dari :min KB.",
        "string"            => "Field :attribute harus lebih dari :min karakter.",
        "array"             => "Field :attribute harus paling tidak :min items.",
    ),
    "not_in"                => "Field selected :attribute tidak valid.",
    "numeric"               => "Field :attribute harus berupa angka.",
    "regex"                 => "Field :attribute format tidak valid.",
    "required"              => "Field :attribute harus diisi.",
    "required_if"           => "Field :attribute harus diisi ketika :other adalah :value.",
    "required_with"         => "Field :attribute harus diisi ketika :values ada.",
    "required_with_all"     => "Field :attribute harus diisi ketika :values tidak ada.",
    "required_without"      => "Field :attribute harus diisi ketika :values tidak ada.",
    "required_without_all"  => "Field :attribute harus diisi ketika :values tidak ada.",
    "same"                  => "Field :attribute and :other harus sama.",
    "size"                  => array(
        "numeric"           => "Field :attribute harus :size.",
        "file"              => "Field :attribute harus :size KB.",
        "string"            => "Field :attribute harus :size karakter.",
        "array"             => "Field :attribute harus berisi :size items.",
    ),
    "unique"                => "Field :attribute sudah ada.",
    "url"                   => "Field :attribute format tidak valid.",
    "timezone"              => "Field :attribute timezone tidak valid.",
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
