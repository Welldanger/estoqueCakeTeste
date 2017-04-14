<?php
use Migrations\AbstractMigration;

class CreateEstoque extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('estoque');
        $table->addColumn('produto_id','integer');
        $table->addColumn('quantidade','integer');
        $table->addColumn('unit_price','decimal',[
            'precision'=>11,
            'scale'=>2
        ]);
        $table->addColumn('unit_cost','decimal',[
            'precision'=>11,
            'scale'=>2
        ]);
        $table->addColumn('created','datetime');
        $table->addColumn('modified','datetime');
        $table->addForeignKey('produto_id','produtos','id');
        $table->create();
    }
}
