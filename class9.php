<?php
$array = [
    'name' => 'Sophia Rahman',
    'age' => [8, 'Months' ],
    'address' => [
        'street_address' => 'House 12, Road 1',
        'city' => 'Dhaka',
        'postal_code' => 1230,
        'country' => 'Bangladesh'
    ],
    'mobile_number' => [
        'country_prefix' => '+880',
        'national_number' => [
            'number1' => '012456674',
            'number2' => '017233984',
            'number3' => '017346328',
        ]
    ]
    ];

    echo $array['name'];
    echo '<br/>';
    // echo $array['mobile_number'];
    echo '<br/>';
    echo '<br/>';
    print_r($array);
