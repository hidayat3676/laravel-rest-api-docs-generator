<?php

/*
 *  each url keys "headers", "params", "responses"
 * below is a sample data for single api endpoint all these params or optional you can pass any of these and ignore
 * others as you want
 *
*/
return [
    //specify base url
    'baseUrl' => 'localhost',
    //assume a route 'api/home' don't need to add the prefix  i.e 'api' here
    'home' => [
        'params' => [
            'name' => 'Some description'
        ],
        'headers' => [
            'key' => 'description'
        ],
        'responses' => [
            'errors' => [
                //can have either string description or nested array
                'key' => 'description',
                'another-key' => [
                    'data' => 'some data',
                    'data2' => 'some data2'
                ]
            ],
            'success' => [
                'key' => 'description',
                //can have either string description or nested array
                'another-key' => [
                    'data' => 'some data',
                    'data2' => 'some data2'
                ]
            ]
        ]
    ],

];
