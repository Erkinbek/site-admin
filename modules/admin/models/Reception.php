<?php

namespace app\modules\admin\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "reception".
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone
 * @property string $address
 * @property string|null $full_text
 * @property string|null $file
 * @property int|null $status
 * @property string|null $response
 * @property int|null $category
 */
class Reception extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reception';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'phone', 'address'], 'required'],
            [['status', 'category'], 'integer'],
            [['full_name', 'address', 'full_text', 'response'], 'string', 'max' => 255],
            [['phone', 'file'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'full_text' => 'Full Text',
            'file' => 'File',
            'status' => 'Status',
            'response' => 'Response',
            'category' => 'Category',
        ];
    }
}
