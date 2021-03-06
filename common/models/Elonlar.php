<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "elonlar".
 *
 * @property int $id
 * @property string|null $sarlavha_uz
 * @property string|null $rasm
 * @property string|null $qisqa_uz
 * @property string|null $toliq_uz
 * @property string|null $qisqa_ru
 * @property string|null $toliq_ru
 * @property string|null $qisqa_en
 * @property string|null $toliq_en
 * @property string|null $vaqt
 * @property string|null $sarlavha_ru
 * @property string|null $sarlavha_en
 */
class Elonlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'elonlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qisqa_uz', 'toliq_uz', 'qisqa_ru', 'toliq_ru', 'qisqa_en', 'toliq_en'], 'string'],
            [['vaqt'], 'safe'],
            [['sarlavha_uz', 'rasm', 'sarlavha_ru', 'sarlavha_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sarlavha_uz' => 'Sarlavha Uz',
            'rasm' => 'Rasm',
            'qisqa_uz' => 'Qisqa Uz',
            'toliq_uz' => 'Toliq Uz',
            'qisqa_ru' => 'Qisqa Ru',
            'toliq_ru' => 'Toliq Ru',
            'qisqa_en' => 'Qisqa En',
            'toliq_en' => 'Toliq En',
            'vaqt' => 'Vaqt',
            'sarlavha_ru' => 'Sarlavha Ru',
            'sarlavha_en' => 'Sarlavha En',
        ];
    }
}
