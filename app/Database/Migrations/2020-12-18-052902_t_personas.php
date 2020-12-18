<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPersonas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_persona'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nombre'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'fecha'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'edad'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id_persona', true);
		$this->forge->createTable('t_persona');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_persona');
	}
}
