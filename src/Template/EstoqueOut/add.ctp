<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('List {0}', 'Estoque Out'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="estoqueOut col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Estoque Out' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($estoqueOut) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('produto_id', ['options' => $produtos]);
                                    echo $this->Form->input('quantidade');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
