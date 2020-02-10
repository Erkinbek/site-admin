<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%reception}}`.
	 */
	class m200210_035525_create_reception_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%reception}}', [
				'id' => $this->primaryKey(),
				'full_name' => $this->string(255)->notNull(),
				'phone' => $this->string(55)->notNull(),
				'address' => $this->string(255)->notNull(),
				'full_text' => $this->string(),
				'file' => $this->string(55),
				'status' => $this->integer(3),
				'response' => $this->string(),
				'category' => $this->integer(2)
			]);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%reception}}');
		}
	}
