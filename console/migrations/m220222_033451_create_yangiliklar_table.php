<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%yangiliklar}}`.
 */
class m220222_033451_create_yangiliklar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%yangiliklar}}', [
            'id' => $this->primaryKey(),
            'sarlavha' => $this->string(255),
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
        $this->dropTable('{{%yangiliklar}}');
    }
}
