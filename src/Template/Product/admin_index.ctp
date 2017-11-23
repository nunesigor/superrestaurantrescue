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
                <th scope="col" style="width: 65px;"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtde') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_new') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo1') ?></th>
                <th scope="col" class="actions" style="width: 61px;"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= h($product->qtde) ?></td>
                <td><?= h($product->is_new) ?></td>
                <td><?= $this->Html->image('upload/'.$product->photo1,
                        ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
                <td class="actions">
                    <p><?= $this->Html->link(__('View'), ['action' => 'adminview', $product->id]) ?></p>
                    <p><?= $this->Html->link(__('Edit'), ['action' => 'adminedit', $product->id]) ?></p>
                    <p><?= $this->Form->postLink(__('Delete'), ['action' => 'admindelete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?></p>
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
