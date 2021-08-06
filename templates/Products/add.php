<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Add product') ?></legend>
                <?php
                echo $this->Form->control('imagen');
                echo $this->Form->control('imagen_larga');
                echo $this->Form->control('titulo_ES');
                echo $this->Form->control('titulo_EN');
                echo $this->Form->control('descripcion_corta_EN');
                echo $this->Form->control('descripcion_corta_ES');
                echo $this->Form->control('descripcion_larga_EN');
                echo $this->Form->control('descripcion_larga_ES');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
