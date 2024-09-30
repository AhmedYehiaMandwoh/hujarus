<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Silber\Bouncer\Database\Role;
use Silber\Bouncer\Database\Ability;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles and permissions
        $this->createRolesAndPermissions();

        // Create super admin user
        if (!User::first()) {
            $this->createSuperAdmin();
        }
    }

    /**
     * Create roles and permissions.
     */
    public function createRolesAndPermissions(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'title' => 'Administrator']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'title' => 'User']);

        // Create permissions (abilities)
        $manageUsers = Ability::firstOrCreate(['name' => 'manage-users', 'title' => 'Manage Users']);
        $viewReports = Ability::firstOrCreate(['name' => 'view-reports', 'title' => 'View Reports']);

        // Assign abilities to roles
        Bouncer::allow($adminRole)->to($manageUsers);
        Bouncer::allow($adminRole)->to($viewReports);
        Bouncer::allow($userRole)->to($viewReports);
    }

    /**
     * Create a super admin user.
     */
    public function createSuperAdmin(): void
    {
        $superAdmin = User::query()->firstOrCreate(
            [
                'email' => 'admin@example.com',
            ],
            [
                'name' => 'Admin',
                'password' => bcrypt('123456'),
            ]
        );

        // Assign the admin role to the super admin
        Bouncer::assign('admin')->to($superAdmin);

        // Optionally, give the super admin all abilities directly
        Bouncer::allow($superAdmin)->everything();
    }
}
