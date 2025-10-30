<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateProjectThumbnailsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreateProjectThumbnailsTable extends Migration
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
		'proj_id' => [
			'type' => 'BIGINT',
			'null' => false,
		],
		'thumbnail' => [
			'type' => 'VARCHAR',
			'constraint' => 2000,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('project_thumbnails');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('project_thumbnails');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}