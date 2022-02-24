<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%elonlar}}`.
 */
class m220224_082137_add_sarlavha_ru_column_sarlavha_en_column_to_elonlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%elonlar}}', 'sarlavha_ru', $this->string(255));
        $this->addColumn('{{%elonlar}}', 'sarlavha_en', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%elonlar}}', 'sarlavha_ru');
        $this->dropColumn('{{%elonlar}}', 'sarlavha_en');
    }
}
