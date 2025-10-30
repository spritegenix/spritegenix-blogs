<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class SocialMediasSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class SocialMediasSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $social_medias = [
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('social_medias')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('social_medias')->insertBatch($social_medias);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
