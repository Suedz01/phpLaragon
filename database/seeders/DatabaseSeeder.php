<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        //all of the permissions listed
        //admin's permissions
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        //editor's permissions
        Permission::create(['name' => 'create-something']);
        Permission::create(['name' => 'edit-something']);
        Permission::create(['name' => 'delete-something']);
        //none's permission
        Permission::create(['name' => 'visualise-dashboard']);

        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Parceiros']);
        $noneRole = Role::create(['name' => 'None']);


        //assigning permissions to admin (which also has the editor's permissions)
        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-something',
            'edit-something',
            'delete-something',
        ]);

        //assigning permissions to editor
        $editorRole->givePermissionTo([
            'create-something',
            'edit-something',
            'delete-something',
        ]);

        $noneRole->givePermissionTo([
        ]);
    }

    /*
    Criando um admin:
    $user = User::first();
    $user->assignRole('Admin');

    Atribuir permisões pela role:
    $role = Role::findByName('Admin');
    $role->givePermissionTo('edit-users');

    Removing permission:
    $user = User::first();
    $user->revokePermissionTo('edit-users');

    Removing permissions by role:
    $role = Role::findByName('Admin');
    $role->revokePermissionTo('edit-users');
    */
}