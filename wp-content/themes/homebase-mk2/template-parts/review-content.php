<div class="main-wrapper__reviews--content">
    <div class="main-wrapper__reviews--content_item">
        <div class="user">
			<!--
            <div class="user-avatar">
                <img src="<?= $review['author']['image']; ?>" alt="user avatar">
            </div>

-->
            <div class="user-name">
                <p>
                    <span><?= $review['author']['full_name']; ?></span><br>
                    <?= $review['author']['position']; ?><br>
					<?= $review['author']['company']; ?><br>
                   
                    <?= $review['author']['address']; ?>
                </p>
            </div>
        </div>
        <div class="review-text">
            <div class="review-text__rating">
                <div class="review-text__rating--stars">
                	<?php for ($i = $review['review']['stars']; $i > 0 ; $i--) { ?>
                		<img src="<?= get_template_directory_uri(); ?>/images/star-full.svg" alt="reviews starts">
                	<?php }
                    for ($i = (5 - $review['review']['stars']); $i > 0 ; $i--) { ?>
                        <img src="<?= get_template_directory_uri(); ?>/images/star-empty.svg" alt="reviews starts">
                    <?php } ?>
                </div>
				<!--
                <div class="review-text__rating--text">
                    <p><?=  $review['review']['distribution_service']; ?></p>
                </div>
   				-->

            </div>
            <div class="review-text--title">
                <span><?=  $review['review']['headline']; ?></span>
            </div>
            <div class="review-text--description">
                <p><?=  $review['review']['description']; ?></p>
            </div>
            <div class="review-text--tags">
            	<?php foreach ($review['review']['features'] as $feature) { ?>
            		<a href="#"><?= $feature['feature']; ?></a>
            	<?php } ?>
            </div>
        </div>
    </div>
</div>