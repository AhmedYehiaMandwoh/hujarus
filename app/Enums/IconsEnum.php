<?php

namespace App\Enums;

use Mahmoudmhamed\LaravelHelpers\Traits\EnumOptionsTrait;

enum IconsEnum: string
{
    use EnumOptionsTrait;

    case HOME = 'fa-home';
    case MOSQUE = 'fa-mosque';
    case PRAY = 'fa-pray';
    case QURAN = 'fa-quran';
    case KAABA = 'fa-kaaba';
    case STAR_AND_CRESCENT = 'fa-star-and-crescent';
    case HANDS_HELPING = 'fa-hands-helping';
    case CALENDAR_ALT = 'fa-calendar-alt';
    case COMPASS = 'fa-compass';
    case STAR = 'fa-star';
    case HEART = 'fa-heart';
    case HAND_HOLDING_HEART = 'fa-hand-holding-heart';
    case DOVE = 'fa-dove';
    case GRADUATION_CAP = 'fa-graduation-cap';
    case USER = 'fa-user';
    case COG = 'fa-cog';
    case BELL = 'fa-bell';
    case ENVELOPE = 'fa-envelope';
    case CAMERA = 'fa-camera';
    case COMMENT = 'fa-comment';
    case SEARCH = 'fa-search';
    case TRASH = 'fa-trash';
    case EDIT = 'fa-edit';
    case SAVE = 'fa-save';
    case FILE = 'fa-file';
    case LOCK = 'fa-lock';
    case UNLOCK = 'fa-unlock';
    case SHOPPING_CART = 'fa-shopping-cart';
    case PLUS = 'fa-plus';
    case MINUS = 'fa-minus';
    case CHECK = 'fa-check';
    case TIMES = 'fa-times';
    case POWER_OFF = 'fa-power-off';
    case SIGNAL = 'fa-signal';
    case WIFI = 'fa-wifi';
    case BATTERY_FULL = 'fa-battery-full';
}
