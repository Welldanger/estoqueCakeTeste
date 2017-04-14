<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Categoria']), ['action' => 'edit', $categoria->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Categoria']), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Categorias']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Categoria']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Produto']), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="categorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($categoria->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($categoria->title) ?></td>
                    </tr>
                                                        <tr>
                        <th>Url</th>
                        <td><?= h($categoria->url) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($categoria->id) ?></td>
                    </tr>
                                                                </table>
                                        <div class="related">
                    <?php if (!empty($categoria->produtos)): ?>
                    <h4><?= __('Related {0}', ['Produtos']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Cost</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Alert Quantity</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categoria->produtos as $produtos): ?>
                        <tr>
                            <td><?= h($produtos->id) ?></td>
                            <td><?= h($produtos->title) ?></td>
                            <td><?= h($produtos->price) ?></td>
                            <td><?= h($produtos->cost) ?></td>
                            <td><?= h($produtos->status) ?></td>
                            <td><?= h($produtos->description) ?></td>
                            <td><?= h($produtos->alert_quantity) ?></td>
                            <td><?= h($produtos->created) ?></td>
                            <td><?= h($produtos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
