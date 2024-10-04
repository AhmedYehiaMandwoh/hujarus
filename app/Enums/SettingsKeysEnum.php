<?php

namespace App\Enums;

use Mahmoudmhamed\LaravelHelpers\Traits\EnumOptionsTrait;

enum SettingsKeysEnum: string
{
    use EnumOptionsTrait;

    case PRIVACY_POLICY = "privacy_policy";
    case TERMS_AND_CONDITIONS = "terms_and_conditions";
    case LOCATION = "location";
    case PHONE = "phone";
    case EMAIL = "email";
    case FACEBOOK = "facebook";
    case YOUTUBE = "youtube";
    case INSTGRAM = "instgram";
    case TIKTOK = "tiktok";
}
