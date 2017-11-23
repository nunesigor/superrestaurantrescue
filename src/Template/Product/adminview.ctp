<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'adminedit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'admindelete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'admin_index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'adminadd']) ?> </li>
    </ul>
</nav>
<div class="product view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($product->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtde') ?></th>
            <td><?= h($product->qtde) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is New') ?></th>
            <td><?= h($product->is_new) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo1') ?></th>
            <td><?= $this->Html->image('upload/'.$product->photo1,
                                    ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo2') ?></th>
            <td><?= $this->Html->image('upload/'.$product->photo2,
                    ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo3') ?></th>
            <td><?= $this->Html->image('upload/'.$product->photo3,
                    ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo4') ?></th>
            <td><?= $this->Html->image('upload/'.$product->photo4,
                    ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo5') ?></th>
            <td><?= $this->Html->image('upload/'.$product->photo5,
                    ['alt' => 'Image could be displayed',
                                     'width'=>'50',
                                     'height'=>'50']) ?></td>
        </tr>
    </table>
</div>
