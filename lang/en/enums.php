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
        \App\Enums\ModuleNameEnum::CATEGORIES->value => 'Categories',
        \App\Enums\ModuleNameEnum::COURSES->value => 'Courses',
        \App\Enums\ModuleNameEnum::TESTIMONIALS->value => 'Testimonials',
        \App\Enums\ModuleNameEnum::ENROLCLIENTS->value => 'EnrollClients',
        \App\Enums\ModuleNameEnum::OFFERS->value => 'Offers',
        \App\Enums\ModuleNameEnum::SETTINGS->value => 'Settings',
    ],
    'IsActiveEnum' => [
        \App\Enums\IsActiveEnum::ACTIVE->value => 'Active',
        \App\Enums\IsActiveEnum::NOT_ACTIVE->value => 'Inactive',
    ],
    'IconsEnum' => [
    \App\Enums\IconsEnum::HOME->value => 'home',
    \App\Enums\IconsEnum::MOSQUE->value => 'mosque',
    \App\Enums\IconsEnum::PRAY->value => 'pray',
    \App\Enums\IconsEnum::QURAN->value => 'Quran',
    \App\Enums\IconsEnum::KAABA->value => 'Kaaba',
    \App\Enums\IconsEnum::STAR_AND_CRESCENT->value => 'star and crescent',
    \App\Enums\IconsEnum::HANDS_HELPING->value => 'charity',
    \App\Enums\IconsEnum::CALENDAR_ALT->value => 'Islamic calendar',
    \App\Enums\IconsEnum::COMPASS->value => 'Qibla compass',
    \App\Enums\IconsEnum::STAR->value => 'star',
    \App\Enums\IconsEnum::HEART->value => 'heart',
    \App\Enums\IconsEnum::HAND_HOLDING_HEART->value => 'charity heart',
    \App\Enums\IconsEnum::DOVE->value => 'peace',
    \App\Enums\IconsEnum::GRADUATION_CAP->value => 'graduation cap',
    \App\Enums\IconsEnum::USER->value => 'user',
    \App\Enums\IconsEnum::COG->value => 'settings',
    \App\Enums\IconsEnum::BELL->value => 'bell',
    \App\Enums\IconsEnum::ENVELOPE->value => 'envelope',
    \App\Enums\IconsEnum::CAMERA->value => 'camera',
    \App\Enums\IconsEnum::COMMENT->value => 'comment',
    \App\Enums\IconsEnum::SEARCH->value => 'search',
    \App\Enums\IconsEnum::TRASH->value => 'trash',
    \App\Enums\IconsEnum::EDIT->value => 'edit',
    \App\Enums\IconsEnum::SAVE->value => 'save',
    \App\Enums\IconsEnum::FILE->value => 'file',
    \App\Enums\IconsEnum::LOCK->value => 'lock',
    \App\Enums\IconsEnum::UNLOCK->value => 'unlock',
    \App\Enums\IconsEnum::SHOPPING_CART->value => 'shopping cart',
    \App\Enums\IconsEnum::PLUS->value => 'plus',
    \App\Enums\IconsEnum::MINUS->value => 'minus',
    \App\Enums\IconsEnum::CHECK->value => 'check',
    \App\Enums\IconsEnum::TIMES->value => 'times',
    \App\Enums\IconsEnum::POWER_OFF->value => 'power off',
    \App\Enums\IconsEnum::SIGNAL->value => 'signal',
    \App\Enums\IconsEnum::WIFI->value => 'wifi',
    \App\Enums\IconsEnum::BATTERY_FULL->value => 'full battery',
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
        \App\Enums\SettingsKeysEnum::PRIVACY_POLICY->value => 'Privacy Policy',
        \App\Enums\SettingsKeysEnum::TERMS_AND_CONDITIONS->value => 'Terms and Conditions',
        \App\Enums\SettingsKeysEnum::LOCATION->value => 'Location',
        \App\Enums\SettingsKeysEnum::PHONE->value => 'Phone',
        \App\Enums\SettingsKeysEnum::EMAIL->value => 'Email',
        \App\Enums\SettingsKeysEnum::FACEBOOK->value => 'Facebook',
        \App\Enums\SettingsKeysEnum::YOUTUBE->value => 'Youtube',
        \App\Enums\SettingsKeysEnum::INSTGRAM->value => 'Instgram',
        \App\Enums\SettingsKeysEnum::TIKTOK->value => 'Tiktok',
        
    ],
    'ClientOfferStatusEnum' => [
        \App\Enums\ClientOfferStatusEnum::USED->value => 'Used',
        \App\Enums\ClientOfferStatusEnum::SAVED->value => 'Saved',
        \App\Enums\ClientOfferStatusEnum::ENDED->value => 'Ended',
        \App\Enums\ClientOfferStatusEnum::NEW->value => 'New',
    ]
];
