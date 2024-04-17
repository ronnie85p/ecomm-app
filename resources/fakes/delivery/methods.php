<?php return [
    [
        'id' => 1,
        'name' => 'Самовывоз',
        'description' => 'Адрес выдачи товара: Россия, Московская область, Солнечногорский район, с/п Смирновское, пос. Смирновка, владение 2, строение 1.',
        'price' => 0,
        'weight_price' => 0.00,
        'distance_price' => 0.00,
        'free_delivery_amount' => 0.00,
        'logo' => 'assets/imgs/icons/icon-02.png',
        'rank' => 0,
        'active' => 1,
        'class' => 'App\EComm\Delivery\Handlers\PickupHandler',
        'properties' => '{}'
    ], [
        'id' => 2,
        'name' => 'Транспорт Завода «LATERES»',
        'description' => 'Адрес отгрузки товара: Россия, Московская область, Солнечногорский район, с/п Смирновское, пос. Смирновка, владение 2, строение 1',
        'price' => 0,
        'weight_price' => 0.00,
        'distance_price' => 0.00,
        'free_delivery_amount' => 0.00,
        'logo' => 'assets/imgs/icons/icon-03.png',
        'rank' => 0,
        'active' => 1,
        'class' => 'App\EComm\Delivery\Handlers\CompanyHandler',
        'properties' => '{}'
    ]
];