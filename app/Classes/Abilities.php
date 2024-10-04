<?php

namespace App\Classes;

use App\Enums\ModuleNameEnum;

enum Abilities: string
{
    //users
    case M_USERS_INDEX = 'm_users_index';
    case M_USERS_INDEX_EXPORT = 'm_users_index_export';
    case M_USERS_STORE = 'm_users_store';
    case M_USERS_UPDATE = 'm_users_update';
    case M_USERS_DELETE = 'm_users_delete';
    case M_USERS_MAIN_DATA = 'M_USERS_MAIN_DATA';
    case M_USERS_ADD_CUSTOM_ABILITY = 'M_USERS_ADD_CUSTOM_ABILITY';

        // SETTINGS
        case M_SETTINGS_INDEX = 'm_settings_index';
        case M_SETTINGS_UPDATE = 'm_settings_update';

    // CATEGORIES
    case M_CATEGORIES_INDEX = 'm_categories_index';
    case M_CATEGORIES_INDEX_EXPORT = 'm_categories_index_export';
    case M_CATEGORIES_CREATE = 'm_categories_create';
    case M_CATEGORIES_UPDATE = 'm_categories_update';
    case M_CATEGORIES_DELETE = 'm_categories_delete';
    case M_CATEGORIES_MAIN_DATA = 'm_categories_main_data';
    // TESTIMONIALS
    case M_TESTIMONIALS_INDEX = 'm_testimonials_index';
    case M_TESTIMONIALS_INDEX_EXPORT = 'm_testimonials_index_export';
    case M_TESTIMONIALS_CREATE = 'm_testimonials_create';
    case M_TESTIMONIALS_UPDATE = 'm_testimonials_update';
    case M_TESTIMONIALS_DELETE = 'm_testimonials_delete';
    case M_TESTIMONIALS_MAIN_DATA = 'm_testimonials_main_data';
    // ENROLCLIENTS
    case M_ENROLCLIENTS_INDEX = 'm_enroll_clients_index';
    case M_ENROLCLIENTS_INDEX_EXPORT = 'm_enroll_clients_index_export';

    // COURSES
    case M_COURSES_INDEX = 'm_courses_index';
    case M_COURSES_INDEX_EXPORT = 'm_courses_index_export';
    case M_COURSES_CREATE = 'm_courses_create';
    case M_COURSES_UPDATE = 'm_courses_update';
    case M_COURSES_DELETE = 'm_courses_delete';
    case M_COURSES_MAIN_DATA = 'm_courses_main_data';





  //roles
    case M_ROLES_INDEX = 'm_roles_index';
    case M_ROLES_EXPORT = 'm_roles_export';
    case M_ROLES_DELETE = 'm_roles_delete';
    case M_ROLES_STORE = 'm_roles_store';
    case M_ROLES_UPDATE = 'M_ROLES_UPDATE';
    public const PERMISSIONS = [
        ['key' => self::M_USERS_INDEX, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_INDEX_EXPORT, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_STORE, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_UPDATE, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_MAIN_DATA, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_DELETE, 'module' => ModuleNameEnum::USERS],
        ['key' => self::M_USERS_ADD_CUSTOM_ABILITY, 'module' => ModuleNameEnum::USERS],


        ['key' => self::M_ROLES_INDEX, 'module' => ModuleNameEnum::ROLES],
        ['key' => self::M_ROLES_EXPORT, 'module' => ModuleNameEnum::ROLES],
        ['key' => self::M_ROLES_STORE, 'module' => ModuleNameEnum::ROLES],
        ['key' => self::M_ROLES_UPDATE, 'module' => ModuleNameEnum::ROLES],
        ['key' => self::M_ROLES_DELETE, 'module' => ModuleNameEnum::ROLES],


        ['key' => self::M_CATEGORIES_INDEX, 'module' => ModuleNameEnum::CATEGORIES],
        ['key' => self::M_CATEGORIES_INDEX_EXPORT, 'module' => ModuleNameEnum::CATEGORIES],
        ['key' => self::M_CATEGORIES_CREATE, 'module' => ModuleNameEnum::CATEGORIES],
        ['key' => self::M_CATEGORIES_UPDATE, 'module' => ModuleNameEnum::CATEGORIES],
        ['key' => self::M_CATEGORIES_DELETE, 'module' => ModuleNameEnum::CATEGORIES],
        ['key' => self::M_CATEGORIES_MAIN_DATA, 'module' => ModuleNameEnum::CATEGORIES],

        ['key' => self::M_TESTIMONIALS_INDEX, 'module' => ModuleNameEnum::TESTIMONIALS],
        ['key' => self::M_TESTIMONIALS_INDEX_EXPORT, 'module' => ModuleNameEnum::TESTIMONIALS],
        ['key' => self::M_TESTIMONIALS_CREATE, 'module' => ModuleNameEnum::TESTIMONIALS],
        ['key' => self::M_TESTIMONIALS_UPDATE, 'module' => ModuleNameEnum::TESTIMONIALS],
        ['key' => self::M_TESTIMONIALS_DELETE, 'module' => ModuleNameEnum::TESTIMONIALS],
        ['key' => self::M_TESTIMONIALS_MAIN_DATA, 'module' => ModuleNameEnum::TESTIMONIALS],

        ['key' => self::M_ENROLCLIENTS_INDEX, 'module' => ModuleNameEnum::ENROLCLIENTS],
        ['key' => self::M_ENROLCLIENTS_INDEX_EXPORT, 'module' => ModuleNameEnum::ENROLCLIENTS],


        ['key' => self::M_COURSES_INDEX, 'module' => ModuleNameEnum::COURSES],
        ['key' => self::M_COURSES_INDEX_EXPORT, 'module' => ModuleNameEnum::COURSES],
        ['key' => self::M_COURSES_CREATE, 'module' => ModuleNameEnum::COURSES],
        ['key' => self::M_COURSES_UPDATE, 'module' => ModuleNameEnum::COURSES],
        ['key' => self::M_COURSES_DELETE, 'module' => ModuleNameEnum::COURSES],
        ['key' => self::M_COURSES_MAIN_DATA, 'module' => ModuleNameEnum::COURSES],
        
        
        ['key' => self::M_SETTINGS_INDEX, 'module' => ModuleNameEnum::SETTINGS],
        ['key' => self::M_SETTINGS_UPDATE, 'module' => ModuleNameEnum::SETTINGS],

    ];


    public static function getModulePermission(ModuleNameEnum $moduleNameEnum): \Illuminate\Support\Collection
    {
        return collect(self::PERMISSIONS)->where('module', $moduleNameEnum);
    }

    /*get abilities by name*/
    public static function getAbilities(): \Illuminate\Support\Collection
    {
        $items = collect(self::PERMISSIONS);
        $response = collect();
        foreach ($items as $item) {
            $response->push([
                'module' => $item['module'],
                'alias' => $item['alias'] ?? $item['module'],
                'key' => $item['key']->value
            ]);
        }
        return $response;
    }
}
