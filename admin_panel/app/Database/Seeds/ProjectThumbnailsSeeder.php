<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class ProjectThumbnailsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class ProjectThumbnailsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $project_thumbnails = [
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('project_thumbnails')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('project_thumbnails')->insertBatch($project_thumbnails);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
