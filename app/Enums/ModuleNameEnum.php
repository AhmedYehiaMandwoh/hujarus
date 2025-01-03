<?php

namespace App\Enums;


use Mahmoudmhamed\LaravelHelpers\Traits\EnumOptionsTrait;

enum ModuleNameEnum: string
{
    use EnumOptionsTrait;

    case USERS = 'users';
    case ROLES = 'roles';
    case hospitality_providers = 'hospitality_providers';
    case BRANCHES = 'branches';
    case WITHDRAWS = 'withdraws';
    case SPONSORS = 'sponsors';
    case COURSES = 'courses';
    case CATEGORIES = 'categories';
    case TESTIMONIALS = 'testimonials';
    case ENROLCLIENTS = 'enroll_clients';
    case SETTINGS = 'settings';
    case CLIENTS = 'clients';
    case OFFERS = 'offers';

}
