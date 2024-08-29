<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Books;
use App\Models\Reviews;
use App\Enums\GuardEnums;
use App\Models\Locations;
use App\Models\Favourites;
use App\Models\Departments;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $defAdmin = Admin::factory()->create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'), 
            'role' => GuardEnums::ADMIN->value,
        ]); 
        
        // authors
        $defAuthor = User::factory()->create([
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('author'), 
            'role' => GuardEnums::AUTHOR->value,
        ]); 
        // ? users
        $defUser = User::factory()->create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'), 
            'role' => GuardEnums::USER->value,
        ]); 
  
        //? Create 10 Admin
        $admins = Admin::factory()
        ->admin()
        ->count(4)
        ->create();
        $admins->push($defAdmin);

        //? Create 10 Author
        $authors = User::factory()
        ->author()
        ->count(9)
        ->create();
        $admins->push($defAuthor);
       
        //? Create 10 Users
        $users = User::factory()
        ->user()
        ->count(9)
        ->create();
        $admins->push($defUser);


        //? Create 10 Departments
        $departments = Departments::factory()->count(10)->create();

 
        //? Create 10 Books
        $books = Books::factory()->count(20)->create();

        //? Create 10 Location
        $location = Locations::factory()->count(20)->create();

        //? Create 10 Reviews
        $reviews = Reviews::factory()->count(20)->create();

        //? create 10 favourite books
        $favourite = Favourites::factory()->count(10)->create();

    }
}
