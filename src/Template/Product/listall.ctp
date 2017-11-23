<?php

?>
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

        <div id="fh5co-menus" data-section="new" style="padding: 0px;">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2" style="padding-top: 30px;">
                        <h2 class="">New products list</h2>
                    </div>
                </div>
                <div class="row row-padded">
                    <div class="col-md-12">
                        <div class="fh5co-food-menu to-animate-2">
                            <ul>
                                <?php foreach ($product as $product): ?>
                                <li>
                                    <div class="fh5co-food-desc" style="display: inline-flex;">
                                        <figure style="width: unset;">
                                            <?= $this->Html->image('upload/'.$product->photo1,
                        ['alt' => "Image couldn't be displayed",
                                     'width'=>'50','height'=>'50','class'=>'img-responsive']) ?>
                                        </figure>
                                        <div style="padding-top: 13px;padding-left: 10px;">
                                            <h3><?= h($product->name) ?></h3>
                                            <p><?= h($product->description) ?></p>
                                            <?= $this->Html->link(__('See Details'), ['action' => 'detail', $product->id]) ?>
                                        </div>
                                    </div>
                                    <div class="fh5co-food-pricing">
                                        US$ <?= $this->Number->format($product->price) ?>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
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
        
        
     