<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Estoque Out']), ['action' => 'edit', $estoqueOut->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Estoque Out']), ['action' => 'delete', $estoqueOut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoqueOut->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Estoque Out']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estoque Out']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Produto']), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="estoqueOut col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($estoqueOut->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Produto</th>
                        <td><?= $estoqueOut->has('produto') ? $this->Html->link($estoqueOut->produto->title, ['controller' => 'Produtos', 'action' => 'view', $estoqueOut->produto->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($estoqueOut->id) ?></td>
                    </tr>
                                <tr>
                        <th>Quantidade</th>
                        <td><?= $this->Number->format($estoqueOut->quantidade) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($estoqueOut->created) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
