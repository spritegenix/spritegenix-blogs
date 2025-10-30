<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class UsersSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class UsersSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $users = [
            ['id' => '1','firstname' => 'admin','lastname' => '','email' => 'admin@cddoman.com','password' => 'ashik1234','created_at' => '2020-11-03 00:49:56','updated_at' => '2020-12-10 02:12:40','u_type' => 'superuser','profile_pic' => '','billing_name' => 'bharath raj','company' => 'Aitsun','country' => 'India','postal_code' => 'kerala','billing_email' => 'bharath@aitsun.com','phone' => '8943868855','address' => 'House no. 45?cloud nine?uppala?784444',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('users')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('users')->insertBatch($users);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
