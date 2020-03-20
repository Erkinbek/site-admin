<?php

	namespace app\modules\admin\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "articles".
	 *
	 * @property int $id
	 * @property string $title
	 * @property string|null $introtext
	 * @property string $fulltext
	 * @property int|null $hits
	 * @property int $author_id
	 * @property int $langugage_id
	 * @property int $created
	 * @property int $category_id
	 * @property string|null $img
	 * @property int|null $status
	 *
	 * @property Users $author
	 * @property Categories $category
	 * @property Languages $langugage
	 */
	class Articles extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'articles';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['title', 'fulltext', 'introtext', 'author_id', 'langugage_id', 'category_id'], 'required'],
				[['author_id', 'langugage_id', 'created', 'category_id', 'created', 'status'], 'integer'],
				[['img'], 'string', 'max' => 55],
				[['hits'], 'safe'],
				[['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['author_id' => 'id']],
				[['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
				[['langugage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['langugage_id' => 'id']],
			];
		}

		/**
		 * {@inheritdoc}
		 */
		public function attributeLabels()
		{
			return [
				'id' => 'ID',
				'title' => 'Title',
				'introtext' => 'Introtext',
				'fulltext' => 'Fulltext',
				'hits' => 'Hits',
				'author_id' => 'Author ID',
				'langugage_id' => 'Langugage ID',
				'created' => 'Created',
				'category_id' => 'Category ID',
				'img' => 'Img',
				'status' => 'Status',
			];
		}

		/**
		 * Gets query for [[Author]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getAuthor()
		{
			return $this->hasOne(Users::className(), ['id' => 'author_id']);
		}

		/**
		 * Gets query for [[Category]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getCategory()
		{
			return $this->hasOne(Categories::className(), ['id' => 'category_id']);
		}

		/**
		 * Gets query for [[Langugage]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getLangugage()
		{
			return $this->hasOne(Languages::className(), ['id' => 'langugage_id']);
		}
	}
