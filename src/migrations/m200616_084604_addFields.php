<?php
namespace execut\pagesSeo\migrations;
use execut\yii\migration\Migration;
use execut\yii\migration\Inverter;

class m200616_084604_addFields extends Migration
{
    public function initInverter(Inverter $i)
    {
        $i->table('pages_pages')->addColumns([
            'title' => $this->string(),
            'description' => $this->string(),
            'keywords' => $this->text(),
            'header' => $this->string(),
            'text' => $this->text(),
        ]);
    }

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        if (!$this->db->getTableSchema('pages_pages')->getColumn('title')) {
            parent::safeUp();
        }
    }

    public function safeDown()
    {
    }
}
