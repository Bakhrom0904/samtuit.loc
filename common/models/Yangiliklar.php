<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yangiliklar".
 *
 * @property int $id
 * @property string|null $sarlavha
 * @property string|null $rasm
 * @property string|null $qisqa_uz
 * @property string|null $toliq_uz
 * @property string|null $qisqa_ru
 * @property string|null $toliq_ru
 * @property string|null $qisqa_en
 * @property string|null $toliq_en
 * @property string|null $vaqt
 */
class Yangiliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangiliklar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qisqa_uz', 'toliq_uz', 'qisqa_ru', 'toliq_ru', 'qisqa_en', 'toliq_en'], 'string'],
            [['vaqt'], 'safe'],
            [['sarlavha', 'rasm'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sarlavha' => 'Sarlavha',
            'rasm' => 'Rasm',
            'qisqa_uz' => 'Qisqa Uz',
            'toliq_uz' => 'Toliq Uz',
            'qisqa_ru' => 'Qisqa Ru',
            'toliq_ru' => 'Toliq Ru',
            'qisqa_en' => 'Qisqa En',
            'toliq_en' => 'Toliq En',
            'vaqt' => 'Vaqt',
        ];
    }
}
