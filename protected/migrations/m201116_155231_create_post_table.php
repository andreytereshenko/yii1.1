<?php

class m201116_155231_create_post_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('post', array(
            'id' => 'pk',
            'title' => 'text',
            'description' => 'text',
        ));
	}

	public function down()
	{
        $this->dropTable('post');
        return true;
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