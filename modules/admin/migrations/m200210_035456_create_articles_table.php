<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%articles}}`.
	 */
	class m200210_035456_create_articles_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%articles}}', [
				'id' => $this->primaryKey(),
				'title' => $this->string(255)->notNull(),
				'introtext' => $this->string(),
				'fulltext' => $this->string()->notNull(),
				'hits' => $this->integer(8),
				'author_id' => $this->integer(3)->notNull(),
				'langugage_id' => $this->integer(3)->notNull(),
				'created' => $this->integer(10)->notNull(),
				'category_id' => $this->integer(3)->notNull(),
				'img' => $this->string(55),
				'status' => $this->integer(2),
			]);

			$this->addForeignKey(
				'fk-articles-language-id',
				'articles',
				'langugage_id',
				'languages',
				'id',
				'CASCADE'
			);

			$this->addForeignKey(
				'fk-articles-category-id',
				'articles',
				'category_id',
				'categories',
				'id',
				'CASCADE'
			);

			$this->addForeignKey(
				'fk-articles-author-id',
				'articles',
				'author_id',
				'users',
				'id',
				'CASCADE'
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%articles}}');
		}
	}
