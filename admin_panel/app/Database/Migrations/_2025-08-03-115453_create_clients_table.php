<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateClientsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateClientsTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'company_id' => [
			'type' => 'INT',
			'null' => false,
			'unsigned' => true,
		],
		'client_logo' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'client_name' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'url' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('clients');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('clients');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}