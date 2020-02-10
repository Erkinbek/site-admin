<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%languages}}`.
	 */
	class m200210_035439_create_languages_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%languages}}', [
				'id' => $this->primaryKey(),
				'name' => $this->string(25)->notNull(),
				'locale' => $this->string(5)->notNull()
			]);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%languages}}');
		}
	}
