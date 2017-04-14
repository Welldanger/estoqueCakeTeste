<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Produtos'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Estoque'), ['controller' => 'Estoque', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Estoque'), ['controller' => 'Estoque', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Estoque In'), ['controller' => 'EstoqueIn', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Estoque In'), ['controller' => 'EstoqueIn', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Estoque Out'), ['controller' => 'EstoqueOut', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Estoque Out'), ['controller' => 'EstoqueOut', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="produtos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Produto' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($produto) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('title');
                                    echo $this->Form->input('price');
                                    echo $this->Form->input('cost');
                                    echo $this->Form->input('status');
                                    echo $this->Form->input('description');
                                    echo $this->Form->input('alert_quantity');
                                    echo $this->Form->input('categorias._ids', ['options' => $categorias]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
