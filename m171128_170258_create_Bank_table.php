<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Bank`.
 */
class m171128_170258_create_Bank_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Bank', [
            'id' => $this->primaryKey(),
            'NANKNO' => $this->INT(),
            'BANKNAME' => $this->TETX(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Bank');
    }
}
