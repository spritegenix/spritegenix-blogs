<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class EmailMsgSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 August, 2025 11:58:25 AM
 */

class EmailMsgSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Table Data ...
        $email_msg = [
            ['id' => '39','name' => 'Dinesh','email' => 'dinesh@ctechoman.com','subject' => 'Price','mblno' => '92315949','msg' => 'How much','company_id' => NULL,'created_at' => '2025-01-06 15:16:41',],
            ['id' => '40','name' => 'Scot','email' => 'pat@aneesho.com','subject' => 'Design Work','mblno' => '8102440753','msg' => 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like 
banners, advertisements, brochures, logos, flyers, etc. for a fixed monthly fee. 

We don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio 
with you.','company_id' => NULL,'created_at' => '2025-01-06 15:16:41',],
            ['id' => '41','name' => 'Niharika','email' => 'niharikasuvarna123@gmail.com','subject' => 'gfgfg','mblno' => '96325464','msg' => 'grt','company_id' => NULL,'created_at' => '2025-01-06 15:16:41',],
            ['id' => '42','name' => 'Niharika','email' => 'niharikasuvarna123@gmail.com','subject' => 'gfgfg','mblno' => '96325464','msg' => 'fdf','company_id' => NULL,'created_at' => '2025-01-06 15:16:41',],
        ];

        
        // Cleaning up the table before seeding ...
        $this->db->table('email_msg')->truncate();

        //Using Query Builder Class ...
        try {
            $this->db->table('email_msg')->insertBatch($email_msg);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}
