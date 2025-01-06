<?php

namespace App\Enums;


use Mahmoudmhamed\LaravelHelpers\Traits\EnumOptionsTrait;

enum ModuleNameEnum: string
{
    use EnumOptionsTrait;

    case USERS = 'users';
    case ROLES = 'roles';
    case COURSES = 'courses';
    case CATEGORIES = 'categories';
    case TESTIMONIALS = 'testimonials';
    case ENROLCLIENTS = 'enroll_clients';
    case SETTINGS = 'settings';
    case CLIENTS = 'clients';

}
