<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%users}}`.
	 */
	class m200210_035409_create_users_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%users}}', [
				'id' => $this->primaryKey(),
				'login' => $this->string(20)->notNull(),
				'password' => $this->string(50)->notNull(),
				'created' => $this->integer(10)->notNull(),
				'last_login' => $this->integer(10),
				'full_name' => $this->string(50)->notNull()
			]);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%users}}');
		}
	}
