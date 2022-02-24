<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%yangiliklar}}`.
 */
class m220224_081905_add_sarlavha_ru_column_sarlavha_en_column_to_yangiliklar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%yangiliklar}}', 'sarlavha_ru', $this->string(255));
        $this->addColumn('{{%yangiliklar}}', 'sarlavha_en', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%yangiliklar}}', 'sarlavha_ru');
        $this->dropColumn('{{%yangiliklar}}', 'sarlavha_en');
    }
}
