<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class PostCategoriesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class PostCategoriesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $post_categories = [
            ['id' => '59','category_name' => 'Match Analysis & Reviews','slug' => 'match-analysis---reviews','company_id' => '24',],
            ['id' => '60','category_name' => 'Cricket News & Updates','slug' => 'cricket-news---updates','company_id' => '24',],
            ['id' => '61','category_name' => 'Players & Teams','slug' => 'players---teams','company_id' => '24',],
            ['id' => '62','category_name' => 'Cricket Tournaments & Series','slug' => 'cricket-tournaments---series','company_id' => '24',],
            ['id' => '63','category_name' => 'Cricket Tips & Tricks','slug' => 'cricket-tips---tricks','company_id' => '24',],
            ['id' => '64','category_name' => 'Fantasy Cricket & Predictions','slug' => 'fantasy-cricket---predictions','company_id' => '24',],
            ['id' => '65','category_name' => 'Records & Statistics','slug' => 'records---statistics','company_id' => '24',],
            ['id' => '66','category_name' => 'History & Nostalgia','slug' => 'history---nostalgia','company_id' => '24',],
            ['id' => '67','category_name' => 'Cricket Gear & Equipment','slug' => 'cricket-gear---equipment','company_id' => '24',],
            ['id' => '68','category_name' => 'Fan Zone & Community','slug' => 'fan-zone---community','company_id' => '24',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('post_categories')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('post_categories')->insertBatch($post_categories);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
