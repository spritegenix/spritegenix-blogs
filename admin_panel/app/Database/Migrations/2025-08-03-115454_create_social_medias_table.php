<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateSocialMediasTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateSocialMediasTable extends Migration
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
		'name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'link' => [
			'type' => 'VARCHAR',
			'constraint' => 2000,
			'null' => false,
		],
		'class' => [
			'type' => 'VARCHAR',
			'constraint' => 2500,
			'null' => false,
		],
		'userid' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => false,
		],
		'token' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('social_medias');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('social_medias');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}