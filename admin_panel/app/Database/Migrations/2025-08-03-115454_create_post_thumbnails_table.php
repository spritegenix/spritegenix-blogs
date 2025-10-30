<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreatePostThumbnailsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreatePostThumbnailsTable extends Migration
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
		'post_id' => [
			'type' => 'BIGINT',
			'null' => false,
		],
		'thumbnail' => [
			'type' => 'VARCHAR',
			'constraint' => 2000,
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
        $this->forge->createTable('post_thumbnails');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('post_thumbnails');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}