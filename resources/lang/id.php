<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => 'Wrong email or password',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'year',
        'm' => 'months',
        'd' => 'days',
        'h' => 'hours',
        'i' => 'minutes',
        's' => 'seconds',

        'ago' => 'ago',
        'recently' => 'recently',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' =>'required' ,
            'email' =>'email' ,
            'dns' =>'dns' ,
            'url' =>'url' ,
            'uuid' =>'uuid' ,
            'int' =>'int' ,
            'float' =>'float' ,
            'min' =>'min' ,
            'max' =>'max' ,
            'sama' =>'sama' ,
            'unik' =>'unik' ,
        ],

        'file' => [
            'required' => ':field dibutuhkan!.',
            'min' => ':field panjang minimal: :attribute',
            'max' => ':field panjang maxsimal: :attribute',
            'mimetypes' => ':field diperbolehkan: :attribute',
            'mimes' => ':field diperbolehkan: :attribute',
            'unsafe' => ':field terindikasi tidak aman!.',
            'corrupt' => ':field tidak terupload dengan benar!.',
        ],
    ]
];
