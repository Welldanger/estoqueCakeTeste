<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Categorias'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="categorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Categoria' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($categoria) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('title');
                                    echo $this->Form->input('url');
                                    echo $this->Form->input('produtos._ids', ['options' => $produtos]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
