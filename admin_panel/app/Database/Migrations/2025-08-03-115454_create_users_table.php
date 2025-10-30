<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateUsersTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateUsersTable extends Migration
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
		'firstname' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'lastname' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'password' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'u_type' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'profile_pic' => [
			'type' => 'VARCHAR',
			'constraint' => 1000,
			'null' => false,
		],
		'billing_name' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'company' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'country' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'postal_code' => [
			'type' => 'VARCHAR',
			'constraint' => 12,
			'null' => false,
		],
		'billing_email' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'phone' => [
			'type' => 'VARCHAR',
			'constraint' => 25,
			'null' => false,
		],
		'address' => [
			'type' => 'VARCHAR',
			'constraint' => 1500,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}