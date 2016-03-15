<section id="sp-main-body">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div id="system-message-container"></div>
                    <div id="sp-page-builder" class="sp-page-builder  page-1">
                        <div class="page-content">
                            <section class="sppb-section main-header" style="margin:0 0 0 0;padding:50px 0 0 0;color:#ffffff;background-image:url(source/images/sppagebuilder/banner2.jpg);background-size:cover;background-attachment:fixed;">
                                <div class="sppb-container">
                                    <div class="sppb-section-title sppb-text-center">
                                        <h1 class="sppb-title-heading" style="font-size:45px;line-height: 45px;font-weight:700;color:#ffffff;">Кирос Групп</h1>
                                        <p class="sppb-title-subheading" style="font-size:16px;">Электросетевая компания</p>
                                    </div>
                                    <div class="sppb-row">
                                        <div class="sppb-col-sm-12">
                                            <div class="sppb-addon-container" style="">
                                                <div class="sppb-addon sppb-addon-featured-courses ">
                                                    <div class="sppb-addon-content">
                                                        <div class="row">
                                                            <div class="col-sm-3 featured-course">
                                                                <div class="featured-course-inner">
                                                                    <p style="font-size:12px;">Технологическое присоединение к электрическим сетям</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 featured-course">
                                                                <div class="featured-course-inner">
                                                                    <p style="font-size:12px;">Услуги по передаче (транзиту) электрической энергии</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 featured-course">
                                                                <div class="featured-course-inner">
                                                                    <p style="font-size:12px;">Капитальное строительство объектов электроснабжения</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 featured-course">
                                                                <div class="featured-course-inner">
                                                                    <p style="font-size:12px;">Проектирование, Электромонтажные и пусконаладочные работы</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="sppb-section " style="margin:20px 0;">
                                <div class="sppb-container">
                                    <div class="sppb-row">
                                        <div class="sppb-col-sm-4 ">
                                            <div class="sppb-addon-container" style="">
                                                <div class="sppb-addon sppb-addon-module ">
                                                    <h3 class="sppb-addon-title" style="color:#404040;">Новости</h3>
                                                    <div class="sppb-addon-content">  
                                                        <div class="latestnews">
                                                            <?php if (!empty($news)) :?>
                                                                <?php foreach ($news as $new) :?>
                                                                    <div itemscope="" itemtype="">
                                                                        <a href="<?php echo \yii\helpers\Url::to(['/main/default/view-news', 'id' => $new['id']])?>" itemprop="url">
                                                                            <span itemprop="name">
                                                                                <?php echo $new['title']?>		
                                                                            </span>
                                                                        </a>
                                                                        <small><?php echo \Yii::$app->formatter->asDatetime($new['updated_at'])?></small>
                                                                    </div>
                                                                <?php endforeach;?>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-col-sm-4">
                                            <div class="sppb-addon-container" style="">
                                                <div class="sppb-addon sppb-addon-module ">
                                                    <h3 class="sppb-addon-title" style="color:#404040;">Статьи</h3>
                                                    <div class="sppb-addon-content">
                                                        <div class="latestnews">
                                                            <?php if (!empty($articles)) :?>
                                                                <?php foreach ($articles as $art) :?>
                                                                    <div itemscope="" itemtype="">
                                                                        <a href="<?php echo \yii\helpers\Url::to(['/main/default/view-article', 'id' => $art['id']])?>" itemprop="url">
                                                                            <span itemprop="name">
                                                                                <?php echo $art['title']?>			
                                                                            </span>
                                                                        </a>
                                                                        <small><?php echo \Yii::$app->formatter->asDatetime($art['updated_at'])?></small>
                                                                    </div>
                                                                <?php endforeach;?>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-col-sm-4">
                                            <div class="sppb-addon-container" style="">
                                                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                                    <h3 class="sppb-addon-title" style="color:#404040;">Контакты</h3>
                                                    <div class="sppb-addon-content">
                                                        г. Москва, 1-й кирпичный переулок 4 корп 2 оф. 202<br>
                                                        Генеральный директор Носов Константин Владимирович<br>
                                                        Моб: +7 978 080-12-81<br>
                                                        E-mail: <a href="mailto:kirosgroup2011@gmail.com">kirosgroup2011@gmail.com</a>
                                                        <p>
                                                            <a title="ТАРИФЫ" href="<?php echo \yii\helpers\Url::to(['/main/default/tarif'])?>">ТАРИФЫ</a><br>
                                                            <a title="О КОМПАНИИ" href="<?php echo \yii\helpers\Url::to(['/main/default/about'])?>">О КОМПАНИИ</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="sppb-section " style="margin:40px 0;">
                                <div class="sppb-container">
                                    <div class="sppb-section-title sppb-text-center">
                                        <h3 class="sppb-title-heading" style="font-size:30px;line-height: 30px;font-weight:700;color:#000000;">О компании</h3>
                                        <p class="sppb-title-subheading" style="font-size:px;">Электросетевая компания</p>
                                    </div><div class="sppb-row">
                                        <div class="sppb-col-sm-12">
                                            <div class="sppb-addon-container" style="padding:20px 0 0;">
                                                <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                                    <div class="sppb-addon-content">
                                                        <p style="text-align: justify;">
                                                            АО «КИРОС ГРУПП» осуществляет свою деятельность с 2011 года. Компания предоставляет свои услуги в городе Москве и Московской области, а также в городе Севастополе. <br>
                                                            Основной задачей нашей работы является обеспечение надежного электроснабжения потребителей электрической энергии в целях поддержки предприятий, учреждений организаций, малого  и среднего бизнеса, жилого и нежилого фонда, а также исключения возникновения аварийных ситуаций на электрооборудовании. <br>
                                                            Обслуживание электрических установок, осуществляется посредством круглосуточной оперативно - диспетчерской службы АО «КИРОС ГРУПП».
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="sppbSection" class="sppb-section total-counter" style="margin:80px 0 0 0;padding:80px 0;background-image:url(source/images/counter-bg.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
                                <div class="sppb-container">
                                    <div class="sppb-row">
                                        <div class="sppb-col-sm-3">
                                            <div class="sppb-addon-container counters" style="">
                                                <div class="sppb-icon sppb-text-center ">
                                                    <span style="display:inline-block;text-align:center;color:#ffffff;;">
                                                        <i class="fa fa-book" style="font-size:36px;width:36px;height:36px;line-height:36px;;"></i>
                                                    </span>
                                                </div>
                                                <div class="sppb-empty-space  clearfix" style="margin-bottom:25px;"></div>
                                                <div class="sppb-addon sppb-addon-animated-number sppb-text-center animated-number">
                                                    <div class="sppb-addon-content" style="">
                                                        <div class="sppb-animated-number" data-digit="142" data-duration="1000" style="color:#ffffff;font-size:45px;line-height:45px;">0</div>
                                                        <div class="sppb-animated-number-title" style="color:#ffffff;font-size:16px;line-height:16px;">Проекта</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-col-sm-3">
                                            <div class="sppb-addon-container counters" style="">
                                                <div class="sppb-icon sppb-text-center ">
                                                    <span style="display:inline-block;text-align:center;color:#ffffff;;">
                                                        <i class="fa fa-group" style="font-size:36px;width:36px;height:36px;line-height:36px;;"></i>
                                                    </span>
                                                </div>
                                                <div class="sppb-empty-space  clearfix" style="margin-bottom:25px;"></div>
                                                <div class="sppb-addon sppb-addon-animated-number sppb-text-center ">
                                                    <div class="sppb-addon-content" style="">
                                                        <div class="sppb-animated-number" data-digit="1254" data-duration="1000" style="color:#ffffff;font-size:45px;line-height:45px;">0</div>
                                                        <div class="sppb-animated-number-title" style="color:#ffffff;font-size:16px;line-height:16px;">Довольных клиента</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="sppb-col-sm-3">
                                            <div class="sppb-addon-container counters" style="">
                                                <div class="sppb-icon sppb-text-center ">
                                                    <span style="display:inline-block;text-align:center;color:#ffffff;;">
                                                        <i class="fa fa-globe" style="font-size:36px;width:36px;height:36px;line-height:36px;;"></i>
                                                    </span>
                                                </div>
                                                <div class="sppb-empty-space  clearfix" style="margin-bottom:25px;"></div>
                                                <div class="sppb-addon sppb-addon-animated-number sppb-text-center ">
                                                    <div class="sppb-addon-content" style="">
                                                        <div class="sppb-animated-number" data-digit="54" data-duration="1000" style="color:#ffffff;font-size:45px;line-height:45px;">0</div>
                                                        <div class="sppb-animated-number-title" style="color:#ffffff;font-size:16px;line-height:16px;">Объекта по РФ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-col-sm-3">
                                            <div class="sppb-addon-container counters" style="">
                                                <div class="sppb-icon sppb-text-center ">
                                                    <span style="display:inline-block;text-align:center;color:#ffffff;;">
                                                        <i class="fa fa-wifi" style="font-size:36px;width:36px;height:36px;line-height:36px;;"></i>
                                                    </span>
                                                </div>
                                                <div class="sppb-empty-space  clearfix" style="margin-bottom:25px;"></div>
                                                    <div class="sppb-addon sppb-addon-animated-number sppb-text-center ">
                                                        <div class="sppb-addon-content" style="">
                                                            <div class="sppb-animated-number" data-digit="3890" data-duration="1000" style="color:#ffffff;font-size:45px;line-height:45px;">0</div>
                                                            <div class="sppb-animated-number-title" style="color:#ffffff;font-size:16px;line-height:16px;">Метров коммуникаций</div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </section>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>