<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?=
            $this->Form->postLink(
                    __('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'admin_index']) ?></li>
    </ul>
</nav>
<div class="product form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('description');
        echo $this->Form->control('price');
        echo $this->Form->control('qtde');
        echo $this->Form->control('other');
        echo $this->Form->control('is_new');
        
        
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <hr>
    <?= $this->Form->create('Product',['url' => 'Product/adminaddaphotos/'.$product->id,'type' => 'file']); ?>
    <fieldset>  
    <?php
        if (!empty($product->photo1)){
            echo $this->Html->image('upload/' . $product->photo1, 
                ['alt' => 'Image could be displayed',
                'width' => '50',
                'height' => '50']);
            echo $this->Form->postLink(__('Remove Image'), ['action' => 'admindeletephoto1', $product->id]);
        } else {
            echo $this->Form->file('photo1');
        }
        if (!empty($product->photo2)){
            echo $this->Html->image('upload/' . $product->photo2, 
                ['alt' => 'Image could be displayed',
                'width' => '50',
                'height' => '50']);
            echo $this->Form->postLink(__('Remove Image'), ['action' => 'admindeletephoto2', $product->id]);
        } else {
            echo $this->Form->file('photo2');
        }
        if (!empty($product->photo3)){
            echo $this->Html->image('upload/' . $product->photo3, 
                ['alt' => 'Image could be displayed',
                'width' => '50',
                'height' => '50']);
            echo $this->Form->postLink(__('Remove Image'), ['action' => 'admindeletephoto3', $product->id]);
        } else {
            echo $this->Form->file('photo3');
        }
        if (!empty($product->photo4)){
            echo $this->Html->image('upload/' . $product->photo4, 
                ['alt' => 'Image could be displayed',
                'width' => '50',
                'height' => '50']);
            echo $this->Form->postLink(__('Remove Image'), ['action' => 'admindeletephoto4', $product->id]);
        } else {
            echo $this->Form->file('photo4');
        }
        if (!empty($product->photo5)){
            echo $this->Html->image('upload/' . $product->photo5, 
                ['alt' => 'Image could be displayed',
                'width' => '50',
                'height' => '50']);
            echo $this->Form->postLink(__('Remove Image'), ['action' => 'admindeletephoto5', $product->id]);
        } else {
            echo $this->Form->file('photo5');
        }
        ?>
        </fieldset>
        <?= $this->Form->submit('Upload Photos', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?> 
        
    
</div>
