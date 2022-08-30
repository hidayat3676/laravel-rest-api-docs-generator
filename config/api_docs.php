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
    'home' => [
        'params' => [
            'id' => 'required flyer id in url param'
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
