<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class ProjectCategoriesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $project_categories = [
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('project_categories')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('project_categories')->insertBatch($project_categories);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
