<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Jobttt;
use App\Models\Category;
use App\Models\Region;
use App\Models\Company;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'employer']);
        // Role::create(['name' => 'company']);

        // $user = User::find(1);
        // $user->assignRole('admin');

        // $employer = User::find(2);
        // $employer->assignRole('employer');

        // $company = User::find(3);
        // $company->assignRole('company');



        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        Category::factory(10)->create();
        Region::factory(10)->create();
        Company::factory(10)->create();
        Jobttt::factory(30)->create();
    }
}
