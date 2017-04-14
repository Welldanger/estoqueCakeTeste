<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Estoque In']), ['action' => 'edit', $estoqueIn->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Estoque In']), ['action' => 'delete', $estoqueIn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoqueIn->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Estoque In']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estoque In']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Produto']), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="estoqueIn col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($estoqueIn->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Produto</th>
                        <td><?= $estoqueIn->has('produto') ? $this->Html->link($estoqueIn->produto->title, ['controller' => 'Produtos', 'action' => 'view', $estoqueIn->produto->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($estoqueIn->id) ?></td>
                    </tr>
                                <tr>
                        <th>Quantidade</th>
                        <td><?= $this->Number->format($estoqueIn->quantidade) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($estoqueIn->created) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
