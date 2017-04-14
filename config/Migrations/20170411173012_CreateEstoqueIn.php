<?php
use Migrations\AbstractMigration;

class CreateEstoqueIn extends AbstractMigration
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
        $table = $this->table('estoque_in');
        $table->addColumn('produto_id','integer');
        $table->addColumn('quantidade','integer');
        $table->addColumn('created','datetime');
        $table->addForeignKey('produto_id','produtos','id');
        $table->create();
    }
}
