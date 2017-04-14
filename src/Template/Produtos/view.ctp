<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Produto']), ['action' => 'edit', $produto->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Produto']), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Produtos']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Produto']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Estoque']), ['controller' => 'Estoque', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estoque']), ['controller' => 'Estoque', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Estoque In']), ['controller' => 'EstoqueIn', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estoque In']), ['controller' => 'EstoqueIn', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Estoque Out']), ['controller' => 'EstoqueOut', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estoque Out']), ['controller' => 'EstoqueOut', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Categorias']), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="produtos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($produto->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($produto->title) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($produto->id) ?></td>
                    </tr>
                                <tr>
                        <th>Price</th>
                        <td><?= $this->Number->format($produto->price) ?></td>
                    </tr>
                                <tr>
                        <th>Cost</th>
                        <td><?= $this->Number->format($produto->cost) ?></td>
                    </tr>
                                <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($produto->status) ?></td>
                    </tr>
                                <tr>
                        <th>Alert Quantity</th>
                        <td><?= $this->Number->format($produto->alert_quantity) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($produto->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($produto->modified) ?></tr>
                    </tr>
                                                    </table>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Description</h4>
                                                <?= $this->Text->autoParagraph(h($produto->description)); ?>
                                            </div>
                                            </div>


                        <div class="related">
                    <?php if (!empty($produto->estoque_in)): ?>
                    <h4><?= __('Related {0}', ['Estoque In']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Produto Id</th>
                                        <th>Quantidade</th>
                                        <th>Created</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->estoque_in as $estoqueIn): ?>
                        <tr>
                            <td><?= h($estoqueIn->id) ?></td>
                            <td><?= h($estoqueIn->produto_id) ?></td>
                            <td><?= h($estoqueIn->quantidade) ?></td>
                            <td><?= h($estoqueIn->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EstoqueIn', 'action' => 'view', $estoqueIn->id]) ?>



                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                        <div class="related">
                    <?php if (!empty($produto->estoque_out)): ?>
                    <h4><?= __('Related {0}', ['Estoque Out']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Produto Id</th>
                                        <th>Quantidade</th>
                                        <th>Created</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->estoque_out as $estoqueOut): ?>
                        <tr>
                            <td><?= h($estoqueOut->id) ?></td>
                            <td><?= h($estoqueOut->produto_id) ?></td>
                            <td><?= h($estoqueOut->quantidade) ?></td>
                            <td><?= h($estoqueOut->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EstoqueOut', 'action' => 'view', $estoqueOut->id]) ?>



                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                        <div class="related">
                    <?php if (!empty($produto->categorias)): ?>
                    <h4><?= __('Related {0}', ['Categorias']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Url</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->categorias as $categorias): ?>
                        <tr>
                            <td><?= h($categorias->id) ?></td>
                            <td><?= h($categorias->title) ?></td>
                            <td><?= h($categorias->url) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
