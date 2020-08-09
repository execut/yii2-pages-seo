<?php
namespace execut\pagesSeo\migrations;

use execut\yii\migration\Migration;
use execut\yii\migration\Inverter;

class m200616_085043_addNoIndex extends Migration
{
    public function initInverter(Inverter $i)
    {
        $i->table('pages_pages')
            ->addColumns([
            'no_index' => $this->boolean(),
        ]);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
