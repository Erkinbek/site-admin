<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%categories}}`.
	 */
	class m200210_035447_create_categories_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%categories}}', [
				'id' => $this->primaryKey(),
				'name' => $this->string(55)->notNull(),
				'parent_id' => $this->integer(5),
				'language_id' => $this->integer(3)->notNull()
			]);

			$this->addForeignKey(
				'fk-categories-parent-id',
				'categories',
				'parent_id',
				'categories',
				'id',
				'CASCADE'
			);

			$this->addForeignKey(
				'fk-categories-language-id',
				'categories',
				'language_id',
				'languages',
				'id',
				'CASCADE'
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%categories}}');
		}
	}
