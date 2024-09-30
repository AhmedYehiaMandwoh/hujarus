<?php

return [
    'ModuleNameEnum' => [
        \App\Enums\ModuleNameEnum::USERS->value => 'Administrative Structure',
        \App\Enums\ModuleNameEnum::ROLES->value => 'Roles',
        \App\Enums\ModuleNameEnum::hospitality_providers->value => 'Hospitality Providers',
        \App\Enums\ModuleNameEnum::BRANCHES->value => 'Branches',
        \App\Enums\ModuleNameEnum::WITHDRAWS->value => 'Withdrawals',
        \App\Enums\ModuleNameEnum::CLIENTS->value => 'Clients',
        \App\Enums\ModuleNameEnum::SPONSORS->value => 'Sponsors',
        \App\Enums\ModuleNameEnum::OFFERS->value => 'Offers',
        \App\Enums\ModuleNameEnum::SETTINGS->value => 'Settings',
    ],
    'IsActiveEnum' => [
        \App\Enums\IsActiveEnum::ACTIVE->value => 'Active',
        \App\Enums\IsActiveEnum::NOT_ACTIVE->value => 'Inactive',
    ],

    'OfferDiscountTypeEnum' => [
        \App\Enums\OfferDiscountTypeEnum::DISCOUNT->value => 'Discount',
        \App\Enums\OfferDiscountTypeEnum::FREE->value => 'Free',
        \App\Enums\OfferDiscountTypeEnum::HONOR->value => 'Honor',
    ],
    'OfferValidToTypeEnum' => [
        \App\Enums\OfferValidToTypeEnum::WEEK->value => 'Week',
        \App\Enums\OfferValidToTypeEnum::DAY->value => 'Day',
        \App\Enums\OfferValidToTypeEnum::MONTH->value => 'Month',
        \App\Enums\OfferValidToTypeEnum::TWO_MONTHS->value => 'Two Months',
        \App\Enums\OfferValidToTypeEnum::THREE_MONTHS->value => 'Three Months',
        \App\Enums\OfferValidToTypeEnum::SIX_MONTHS->value => 'Six Months',
    ],
    'OfferCanUseTypeEnum' => [
        \App\Enums\OfferCanUseTypeEnum::DIRECT->value => 'Direct',
        \App\Enums\OfferCanUseTypeEnum::TOMORROW_MORNING->value => 'Tomorrow Morning',
        \App\Enums\OfferCanUseTypeEnum::AFTER_ONE_DAY->value => 'After 24 Hours',
        \App\Enums\OfferCanUseTypeEnum::FROM_DATE->value => 'From Date',
    ],
    'HospitalityProviderTypesEnum' => [
        \App\Enums\HospitalityProviderTypesEnum::RESTAURANT->value => 'Restaurant',
        \App\Enums\HospitalityProviderTypesEnum::HOTEL->value => 'Hotel',
        \App\Enums\HospitalityProviderTypesEnum::EXHIBITION->value => 'Exhibition',
        \App\Enums\HospitalityProviderTypesEnum::CAFE->value => 'Cafe',
    ],
    'SettingsKeysEnum' => [
        \App\Enums\SettingsKeysEnum::WHEEL_ROTATION_TIME->value => 'Time Difference Between Wheel Rotations (in hours)',
        \App\Enums\SettingsKeysEnum::TERMS_AND_CONDITIONS->value => 'Terms and Conditions',
    ],
    'ClientOfferStatusEnum' => [
        \App\Enums\ClientOfferStatusEnum::USED->value => 'Used',
        \App\Enums\ClientOfferStatusEnum::SAVED->value => 'Saved',
        \App\Enums\ClientOfferStatusEnum::ENDED->value => 'Ended',
        \App\Enums\ClientOfferStatusEnum::NEW->value => 'New',
    ]
];
