<div class="pagination-centered">
    <ul class="page-numbers">
    	<li>
            <a class="prev arrow page_click" href="<?= ($page > 1) ? '?review_page=1' : ''; ?>" data-page="<?= ($page > 1) ? 1 : 0; ?>" data-wpel-link="internal">&lt;&lt;</a>
        </li>
        <li>
            <a class="prev arrow page_click" href="<?= ($page > 1) ? '?review_page='.($page-1) : ''; ?>" data-page="<?= ($page > 1) ? $page-1 : 0; ?>" data-wpel-link="internal">&lt;</a>
        </li>
    	<?php for ($i = 1; $i <= $max_pages; $i++) { 
    		if($i == $page){ ?>
	    		<li>
		            <span aria-current="page" data-page="<?= $i; ?>" class="page-numbers current"><?= $i; ?></span>
		        </li>
	    	<?php } else{ ?>
	    		<li>
		            <a class="page-numbers page_click" href="<?= '?review_page='.$i; ?>" data-page="<?= $i; ?>" data-wpel-link="internal"><?= $i; ?></a>
		        </li>
	    	<?php }
	    } ?>
        <li>
            <a class="next arrow page_click" href="<?= ($page == $max_pages) ? '' : '?review_page='.($page+1); ?>" data-page="<?= ($page == $max_pages) ? 0 : $page+1; ?>" data-wpel-link="internal">&gt; </a>
        </li>
        <li>
            <a class="next arrow page_click" href="<?= ($page == $max_pages) ? '' : '?review_page='.$max_pages; ?>" data-page="<?= ($page == $max_pages) ? 0 : $max_pages; ?>" data-wpel-link="internal">&gt;&gt; </a>
        </li>
    </ul>
</div>