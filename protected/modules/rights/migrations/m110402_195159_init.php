<?php

class m110402_195159_init extends CDbMigration {

	public function up() {

		echo "*** WARNING ***\nJust for debugging - Primary Key definitions missing!\n\n";

		$this->createTable("AuthAssignment", array(
			"itemname" => "varchar(64) not null",
			"userid" => "varchar(64) not null",
			"bizrule" => "text",
			"data" => "text",
			), "");

		$this->insert("AuthAssignment", array(
			"itemname" => "Admin",
			"userid" => "2",
			"bizrule" => "",
			"data" => "N;",
			));

		$this->createTable("AuthItem", array(
			"name" => "varchar(64) not null",
			"type" => "integer NOT NULL",
			"description" => "text",
			"bizrule" => "text",
			"data" => "text",
			), "");

		$this->insert("AuthItem", array(
			"name" => "Admin",
			"type" => "2",
			"description" => "",
			"bizrule" => "",
			"data" => "N;",
			));

		$this->insert("AuthItem", array(
			"name" => "Authenticated",
			"type" => "2",
			"description" => "",
			"bizrule" => "",
			"data" => "N;",
			));

		$this->insert("AuthItem", array(
			"name" => "Guest",
			"type" => "2",
			"description" => "",
			"bizrule" => "",
			"data" => "N;",
			));

		$this->createTable("AuthItemChild", array(
			"parent" => "varchar(64) not null",
			"child" => "varchar(64) not null",
			), "");

		$this->createTable("Rights", array(
			"itemname" => "varchar(64) not null",
			"type" => "integer NOT NULL",
			"weight" => "integer NOT NULL",
			), "");
	}

	public function down() {
		$this->dropTable('AuthAssignment');
		$this->dropTable('AuthItem');
		$this->dropTable('AuthItemChild');
		$this->dropTable('Rights');
	}

	/*
	  // Use safeUp/safeDown to do migration with transaction
	  public function safeUp()
	  {
	  }

	  public function safeDown()
	  {
	  }
	 */
}