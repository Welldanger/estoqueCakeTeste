<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['Estoque Out']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Produto']), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="estoqueOut col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estoque Out</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('produto_id') ?></th>
                                        <th><?= $this->Paginator->sort('quantidade') ?></th>
                                        <th><?= $this->Paginator->sort('created') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estoqueOut as $estoqueOut): ?>
                        <tr>
                                        <td><?= $this->Number->format($estoqueOut->id) ?></td>
                                        <td><?= $estoqueOut->has('produto') ? $this->Html->link($estoqueOut->produto->title, ['controller' => 'Produtos', 'action' => 'view', $estoqueOut->produto->id]) : '' ?></td>
                                        <td><?= $this->Number->format($estoqueOut->quantidade) ?></td>
                                        <td><?= h($estoqueOut->created) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $estoqueOut->id], ['class'=>'btn btn-default btn-xs']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                        <?= $this->Paginator->numbers(['escape'=>false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>