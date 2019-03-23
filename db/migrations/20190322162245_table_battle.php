<?php


use Phinx\Migration\AbstractMigration;

class TableBattle extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $battle = $this->table('tb_battle');
        $battle->addColumn('room_name', 'string');
        $battle->addColumn('player', 'string');
        $battle->addColumn('row_square','integer');
        $battle->addColumn('column_square','integer');
        $battle->addColumn('created_at','datetime',['default' => 'CURRENT_TIMESTAMP']);
        $battle->addColumn('updated_at','datetime',['default' => 'CURRENT_TIMESTAMP']);

        $battle->save();
    }
}
