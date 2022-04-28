<?php

namespace common\models;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "yangiliklar".
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
class Yangiliklar extends \yii\db\ActiveRecord
{

    public $imageFile;

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
            [['sarlavha_uz', 'rasm', 'sarlavha_ru', 'sarlavha_en'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'png, jpg'],

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
    public function upload()
    {
            $this->rasm= $this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs('@frontend/web/rasmlar/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->imageFile = null;

            return true;
        } else {
            return false;
        }
    }

}
