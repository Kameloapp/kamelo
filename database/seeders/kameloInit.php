<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class kameloInit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $adminRole = Role::create(['name' => 'admin']);
        $modoRole = Role::create(['name' => 'moderator']);
        $userRole = Role::create(['name' => 'user']);

        $userAS = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('jSuD-YeK-vue-hic-8ML-t0o'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $userAS->assignRole($adminRole);
    }
}
