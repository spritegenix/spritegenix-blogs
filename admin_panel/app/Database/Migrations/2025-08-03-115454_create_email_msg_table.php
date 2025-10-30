<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateEmailMsgTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateEmailMsgTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'BIGINT',
			'null' => false,
			'auto_increment' => true,
		],
		'name' => [
			'type' => 'VARCHAR',
			'constraint' => 30,
			'null' => false,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 30,
			'null' => false,
		],
		'subject' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'mblno' => [
			'type' => 'VARCHAR',
			'constraint' => 15,
			'null' => false,
		],
		'msg' => [
			'type' => 'TEXT',
			'null' => false,
		],
		'company_id' => [
			'type' => 'INT',
			'null' => true,
		],
		'created_at' => [
			'type' => 'TIMESTAMP',
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('email_msg');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('email_msg');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}