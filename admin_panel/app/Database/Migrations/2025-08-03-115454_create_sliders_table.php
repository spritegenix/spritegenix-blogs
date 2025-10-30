<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateSlidersTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateSlidersTable extends Migration
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
		'image' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => false,
		],
		'image_title' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'alt' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'slider_title1' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'slider_title2' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'slider_title3' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'slider_description' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => false,
		],
		'status' => [
			'type' => 'INT',
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('sliders');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('sliders');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}