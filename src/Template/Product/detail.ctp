<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-logo" style="width: 50%;">
                <a href="index.html" class="external">Super Restaurant <spam style="color: #FB6E14;">Rescue</spam></a>
            </div>
            <div class="fh5co-menu-2">
               <a href="/pages/home" class="external" data-nav-section="home">Home</a>
                        <a href="/pages/about" class="external" data-nav-section="about">About</a>
                        <a href="/product/listall/0" class="external" data-nav-section="new">New Products</a>
                        <a href="/product/listall/1" class="external" data-nav-section="used">Used Products</a>
                        <a href="/pages/contact" class="external" data-nav-section="reservation">Contact</a>
            </div>
        </div>

    </div>
</div>


<div id="fh5co-menus" data-section="detail" style="padding: 0px;">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="">Products Detail</h2>
            </div>
        </div>

        <div class="card fh5co-food-desc">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6" style="width: 300px;">
                        <div class="preview-pic tab-content" style="width: 250px;">
                            <?php if (!empty($product->photo1)): ?>
                            <div class="tab-pane active" id="pic-1"><img src="<?php echo $this->Url->image('upload/' . $product->photo1, 
                                ['alt' => 'Image could be displayed']);?>" /></div>
                            <?php endif; ?>
                            <?php if (!empty($product->photo2)): ?>
                            <div class="tab-pane" id="pic-2"><img src="<?php echo $this->Url->image('upload/' . $product->photo2, 
                                ['alt' => 'Image could be displayed']);?>" /></div>
                            <?php endif; ?>
                            <?php if (!empty($product->photo3)): ?>
                            <div class="tab-pane" id="pic-2"><img src="<?php echo $this->Url->image('upload/' . $product->photo3, 
                                ['alt' => 'Image could be displayed']);?>" /></div>
                            <?php endif; ?>
                            <?php if (!empty($product->photo4)): ?>
                            <div class="tab-pane" id="pic-2"><img src="<?php echo $this->Url->image('upload/' . $product->photo4, 
                                ['alt' => 'Image could be displayed']);?>" /></div>
                            <?php endif; ?>
                            <?php if (!empty($product->photo5)): ?>
                            <div class="tab-pane" id="pic-2"><img src="<?php echo $this->Url->image('upload/' . $product->photo5, 
                                ['alt' => 'Image could be displayed']);?>" /></div>
                            <?php endif; ?>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php if (!empty($product->photo1)): ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab" style="padding: unset;margin: unset;border: none;">
                                    <img style="width: 50px;" src="<?php echo $this->Url->image('upload/'.$product->photo1,
                                ['alt' => 'Image could be displayed','width' => '50','height' => '50']);?>" /></a></li>
                            <?php endif; ?>
                            
                            <?php if (!empty($product->photo2)): ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab" style="padding: unset;margin: unset;border: none;">
                                    <img style="width: 50px;" src="<?php echo $this->Url->image('upload/'.$product->photo2,
                                ['alt' => 'Image could be displayed','width' => '50','height' => '50']);?>" /></a></li>
                            <?php endif; ?>
                            <?php if (!empty($product->photo3)): ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab" style="padding: unset;margin: unset;border: none;">
                                    <img style="width: 50px;" src="<?php echo $this->Url->image('upload/'.$product->photo3,
                                ['alt' => 'Image could be displayed','width' => '50','height' => '50']);?>" /></a></li>
                            <?php endif; ?>
                            <?php if (!empty($product->photo4)): ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab" style="padding: unset;margin: unset;border: none;">
                                    <img style="width: 50px;" src="<?php echo $this->Url->image('upload/'.$product->photo4,
                                ['alt' => 'Image could be displayed','width' => '50','height' => '50']);?>" /></a></li>
                            <?php endif; ?>
                            <?php if (!empty($product->photo5)): ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab" style="padding: unset;margin: unset;border: none;">
                                    <img style="width: 50px;" src="<?php echo $this->Url->image('upload/'.$product->photo5,
                                ['alt' => 'Image could be displayed','width' => '50','height' => '50']);?>" /></a></li>
                            <?php endif; ?>
                        </ul>

                    </div>
                    <div class="fh5co-food-desc col-md-6">
                        <h3><?= h($product->name) ?></h3>

                        <p class="product-description"><?= h($product->description) ?></p>
                        <h4>current price: $<span style="color: #FB6E14;"><?= $this->Number->format($product->price) ?></span></h4>
                        <br>
                        <p class="product-description"><?= h($product->other) ?></p>
                        <?php if (!empty($product->qtde)): 
                            if ($product->qtde == '0'): ?>
                            <p class="product-description">Sold Out</p>
                            <?php else : ?>
                            <p class="product-description">In Stock</p>
                            <?php endif;
                        endif; ?>
                        <?php if (!empty($product->is_new)): 
                            if ($product->is_new == '0'): ?>
                            <p class="product-description">New Product</p>
                            <?php else : ?>
                            <p class="product-description">Used Product</p>
                            <?php endif;
                        endif; ?>

                        <div class="action">
                            <?= $this->Html->link(__('Back'), ['action' => 'listall', $product->is_new]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<div id="fh5co-footer">
    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="to-animate">&copy;All rights reserved.
                </p>
                <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="fh5co-social">
                    <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                    <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>