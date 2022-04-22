<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%elonlar}}`.
 */
class m220222_033737_create_elonlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%elonlar}}', [
            'id' => $this->primaryKey(),
            'sarlavha_uz' => $this->string(255),
            'rasm' => $this->string(255),
            'qisqa_uz' => $this->text(),
            'toliq_uz' => $this->text(),
            'qisqa_ru' => $this->text(),
            'toliq_ru' => $this->text(),
            'qisqa_en' => $this->text(),
            'toliq_en' => $this->text(),
            'vaqt' => $this->timestamp()->defaultExpression('NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%elonlar}}');
    }
}
