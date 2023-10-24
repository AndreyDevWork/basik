<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%post}}`.
 */
class m231024_165017_add_position_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%post}}', 'select', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%post}}', 'select');
    }
}
