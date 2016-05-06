<div class="modal fade" id="<?php echo $item['source']['id']?>" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $item['label']?></h4>
            </div>
            <div class="modal-body">
                <?php if ('html' == $item['source']['type']) :?>
                    <?php if (is_array($item['source']['url'])) :?>
                        <?php foreach ($item['source']['url'] as $url) :?>
                            <?php echo $this->render($url); ?>
                            <br />
                        <?php endforeach;?>
                    <?php endif;?>
                <?php elseif ('img' == $item['source']['type']) :?>
                    <?php if (is_array($item['source']['url'])) :?>
                        <?php foreach ($item['source']['url'] as $url) :?>
                            <img src="<?php echo $url?>" alt="" width="100%">
                            <br />
                        <?php endforeach;?>
                    <?php endif;?>
                <?php endif;?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>