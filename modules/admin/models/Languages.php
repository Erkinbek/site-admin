<?php

	namespace app\modules\admin\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "languages".
	 *
	 * @property int $id
	 * @property string $name
	 * @property string $locale
	 *
	 * @property Articles[] $articles
	 * @property Categories[] $categories
	 */
	class Languages extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'languages';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['name', 'locale'], 'required'],
				[['name'], 'string', 'max' => 25],
				[['locale'], 'string', 'max' => 5],
			];
		}

		/**
		 * {@inheritdoc}
		 */
		public function attributeLabels()
		{
			return [
				'id' => 'ID',
				'name' => 'Name',
				'locale' => 'Locale',
			];
		}

		/**
		 * Gets query for [[Articles]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getArticles()
		{
			return $this->hasMany(Articles::className(), ['langugage_id' => 'id']);
		}

		/**
		 * Gets query for [[Categories]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getCategories()
		{
			return $this->hasMany(Categories::className(), ['language_id' => 'id']);
		}
	}
