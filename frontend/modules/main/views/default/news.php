<section id="sp-page-title">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-page-title" style="background-image: url(/source/images/demo/about-subheader.jpg);">
                    <div class="container"><h2>Новости</h2></div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section id="sp-main-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div id="system-message-container"></div>
                    <article class="item item-page" itemscope="" itemtype="">
                        <meta itemprop="inLanguage" content="ru-RU">
                        <div class="entry-header">
                            <dl class="article-info">
                                <dt class="article-info-term"></dt>
                                <dd class="createdby" itemprop="author" itemscope="" itemtype="">
                                    <i class="fa fa-user"></i>
                                    <span itemprop="name" data-toggle="tooltip" title="" data-original-title="Автор: ">Super User</span>	
                                </dd>
                                <dd class="category-name">
                                    <i class="fa fa-folder-open-o"></i>
                                    <a href="#" itemprop="genre" data-toggle="tooltip" title="" data-original-title="Категория материалов">Новости</a>	
                                </dd>
                                <dd class="published">
                                    <i class="fa fa-calendar-o"></i>
                                    <time datetime="2015-05-26T00:00:00+00:00" itemprop="datePublished" data-toggle="tooltip" title="" data-original-title="Дата публикации">26 Май 2015</time>
                                </dd>
                                <dd class="hits">
                                    <span class="fa fa-eye"></span>
                                    <meta itemprop="interactionCount" content="UserPageVisits:287">
                                    Просмотров: 287
                                </dd>					
                                <dd class="post_rating" id="post_vote_79">Rating: 
                                    <div class="voting-symbol sp-rating">
                                        <span class="star" data-number="5"></span>
                                        <span class="star" data-number="4"></span>
                                        <span class="star" data-number="3"></span>
                                        <span class="star" data-number="2"></span>
                                        <span class="star" data-number="1"></span>		
                                    </div>
                                    <span class="ajax-loader fa fa-spinner fa-spin"></span>
                                    <span class="voting-result"></span>
                                </dd>
                            </dl>
                            <h2 itemprop="name"><?php echo $selectedArts['curr']['title']?></h2>
                        </div>
                        <div class="content_rating" itemprop="aggregateRating" itemscope="" itemtype="">
                            <p class="unseen element-invisible">Рейтинг: &nbsp;
                                <span itemprop="ratingValue">0</span>&nbsp;/&nbsp;
                                <span itemprop="bestRating">5</span>
                                <meta itemprop="ratingCount" content="0">
                                <meta itemprop="worstRating" content="0">
                            </p>
                            <img src="/source/blog/rating_star_blank.png" alt="Звезда не активна">
                            <img src="/source/blog/rating_star_blank.png" alt="Звезда не активна">
                            <img src="/source/blog/rating_star_blank.png" alt="Звезда не активна">
                            <img src="/source/blog/rating_star_blank.png" alt="Звезда не активна">
                            <img src="/source/blog/rating_star_blank.png" alt="Звезда не активна">
                        </div>
                        <div itemprop="articleBody">
                            <?php echo $selectedArts['curr']['text']?>
                        </div>
                        <ul class="pager pagenav">
                            <?php if (!empty($selectedArts['prev']['id'])) :?>
                                <li class="previous">
                                    <a href="<?php echo \yii\helpers\Url::to(['/main/default/view-news', 'id' => $selectedArts['prev']['id']])?>" rel="prev">
                                        <span class="icon-chevron-left"></span> Назад		
                                    </a>
                                </li>
                            <?php endif;?>
                            <?php if (!empty($selectedArts['next']['id'])) :?>
                                <li class="next">
                                    <a href="<?php echo \yii\helpers\Url::to(['/main/default/view-news', 'id' => $selectedArts['next']['id']])?>" rel="next">
                                        Вперёд <span class="icon-chevron-right"></span>		
                                    </a>
                                </li>
                            <?php endif;?>
                        </ul>
                        <div id="sp-comments"></div>		
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>