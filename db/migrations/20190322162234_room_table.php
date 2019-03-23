<?php


use Phinx\Migration\AbstractMigration;

class RoomTable extends AbstractMigration
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
        $room = $this->table('tb_room');
        $room->addColumn('name_room','string',["null" => false]);
        $room->addColumn('x_player','string',['null' => false]);
        $room->addColumn('o_player','string',['null' => true]);
        $room->addcolumn('winner','string',['null'=>true]);
        $room->addColumn('created_at','datetime',['default' => 'CURRENT_TIMESTAMP']);
        $room->addColumn('updated_at','datetime',['default' => 'CURRENT_TIMESTAMP']);

        $room->save();
    }
}
