<section id="sp-main-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div id="system-message-container"></div>
                    <article class="item item-page" itemscope="" itemtype="">
                        <meta itemprop="inLanguage" content="ru-RU">
                        <div class="entry-header">
                            <h2 itemprop="name">Тариф</h2>
                        </div>
                        <div itemprop="articleBody">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2016">2016</a></li>
                                <li><a data-toggle="tab" href="#2017">2017</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="2016" class="tab-pane fade in active">
                                    <div class="tab-title">2016</div>
                                    <?php if (!empty($sources['2016'])) :?>
                                         <div class="tab-content-menu">
                                            <?php echo yii\widgets\Menu::widget($sources['2016']); ?>
                                        </div>

                                        <?php foreach ($sources['2016']['items'] as $item) :?>
                                            <?php echo $this->render('tarif_module', ['item' => $item]); ?>
                                    
                                            <?php if (isset($item['items'])) :?>
                                                <?php foreach ($item['items'] as $subItem) :?>
                                                    <?php echo $this->render('tarif_module', ['item' => $subItem]); ?>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            <div id="2017" class="tab-pane fade">
                                <div class="tab-title">2017</div>
                                <?php if (!empty($sources['2017'])) :?>
                                    <div class="tab-content-menu">
                                       <?php echo yii\widgets\Menu::widget($sources['2017']); ?>
                                   </div>

                                   <?php foreach ($sources['2017']['items'] as $item) :?>
                                       <?php echo $this->render('tarif_module', ['item' => $item]); ?>

                                       <?php if (isset($item['items'])) :?>
                                           <?php foreach ($item['items'] as $subItem) :?>
                                               <?php echo $this->render('tarif_module', ['item' => $subItem]); ?>
                                           <?php endforeach;?>
                                       <?php endif;?>
                                   <?php endforeach;?>
                               <?php endif;?>
                            </div>
                        </div>
                        </div>
                    </article>    
                </div>
            </div> 
        </div>
    </div>    
</section>