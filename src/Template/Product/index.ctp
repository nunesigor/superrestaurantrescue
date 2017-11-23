<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'adminadd']) ?></li>
    </ul>
</nav>
<div class="product index large-9 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtde') ?></th>
                <th scope="col"><?= $this->Paginator->sort('other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_new') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo5') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->description) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= h($product->qtde) ?></td>
                <td><?= h($product->other) ?></td>
                <td><?= h($product->is_new) ?></td>
                <td><?= h($product->photo1) ?></td>
                <td><?= h($product->photo2) ?></td>
                <td><?= h($product->photo3) ?></td>
                <td><?= h($product->photo4) ?></td>
                <td><?= h($product->photo5) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'adminview', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'adminedit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'admindelete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
