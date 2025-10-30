<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreatePostsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 August, 2025 11:54:53 AM
 */

class CreatePostsTable extends Migration
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
		'title' => [
			'type' => 'TEXT',
			'null' => false,
		],
		'post_type' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'category' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'short_description' => [
			'type' => 'MEDIUMTEXT',
			'null' => false,
		],
		'description' => [
			'type' => 'LONGTEXT',
			'null' => false,
		],
		'meta_keyword' => [
			'type' => 'VARCHAR',
			'constraint' => 2500,
			'null' => false,
		],
		'meta_description' => [
			'type' => 'VARCHAR',
			'constraint' => 5000,
			'null' => false,
		],
		'featured' => [
			'type' => 'VARCHAR',
			'constraint' => 1000,
			'null' => false,
		],
		'file_type' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'alt' => [
			'type' => 'VARCHAR',
			'constraint' => 1500,
			'null' => false,
		],
		'status' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'datetime' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'slug' => [
			'type' => 'VARCHAR',
			'constraint' => 1500,
			'null' => false,
		],
		'posted_by' => [
			'type' => 'BIGINT',
			'null' => false,
		],
		'category_slug' => [
			'type' => 'VARCHAR',
			'constraint' => 1500,
			'null' => false,
		],
		'company_id' => [
			'type' => 'INT',
			'null' => false,
		],
		'views' => [
			'type' => 'INT',
			'null' => true,
		],
		'tags' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'post_name' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('posts');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('posts');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}