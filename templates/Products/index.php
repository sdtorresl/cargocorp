<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th><?= $this->Paginator->sort('imagen_larga') ?></th>
                    <th><?= $this->Paginator->sort('titulo_ES') ?></th>
                    <th><?= $this->Paginator->sort('titulo_EN') ?></th>
                    <th><?= $this->Paginator->sort('descripcion_corta_EN') ?></th>
                    <th><?= $this->Paginator->sort('descripcion_corta_ES') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->imagen) ?></td>
                        <td><?= h($product->imagen_larga) ?></td>
                        <td><?= h($product->titulo_ES) ?></td>
                        <td><?= h($product->titulo_EN) ?></td>
                        <td><?= h($product->descripcion_corta_EN) ?></td>
                        <td><?= h($product->descripcion_corta_ES) ?></td>
                        <td><?= h($product->created) ?></td>
                        <td><?= h($product->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
