<?php
use Migrations\AbstractMigration;

class CreateCategoriasProdutos extends AbstractMigration
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
        $table = $this->table('categorias_produtos');
        $table->addColumn('categoria_id','integer');
        $table->addColumn('produto_id','integer');
        $table->addForeignKey('categoria_id','categorias','id');
        $table->addForeignKey('produto_id','produtos','id');
        $table->create();
    }
}
