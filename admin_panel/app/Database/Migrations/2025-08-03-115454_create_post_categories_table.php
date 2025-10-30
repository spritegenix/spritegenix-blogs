<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreatePostCategoriesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreatePostCategoriesTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'null' => false,
			'auto_increment' => true,
		],
		'category_name' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'slug' => [
			'type' => 'VARCHAR',
			'constraint' => 1500,
			'null' => false,
		],
		'company_id' => [
			'type' => 'INT',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('post_categories');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('post_categories');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}