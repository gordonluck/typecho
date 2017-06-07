<?php $this->need('header.php'); ?>
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
			<div class="post text">
				<div class="date" data-day="<?php $this->date('d'); ?>" data-month="Jun">
					<span class="day"><?php $this->date('d'); ?></span>
					<?php $this->date('M'); ?>
				</div>				
				<div class="entry">
					<h1><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?> 的永久连接"><?php $this->title() ?></a></h1>
					<?php $this->content('ReadMore'); ?>
					<!--div class="tags"><a href="#" title="nome"><span>nome</span></a></div-->
				</div>
				<div class="meta">
					<div class="details">
						<?php $this->category(','); ?>
						<a href="<?php $this->permalink() ?>#comments" title="Comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
					</div>
					<div class="share">
						<a class="sharelink" data-permalink="<?php $this->permalink() ?>">Share this</a>
						<div class="expand">
							<input type="text" readonly="" value="<?php $this->permalink() ?>" class="shorturl">
							<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php $this->permalink() ?>" data-text="<?php $this->title() ?>" data-count="none" data-via="pixelunion">Tweet</a>
							<div class="fblike"></div>
						</div>
					</div><!-- /share -->
					<a href="<?php $this->permalink() ?>" title="About the theme">Permalink</a>
				</div>
				<div class="clear"></div>
			</div><!-- /post -->
	<?php endwhile; ?>
    <?php else: ?>
	<div class="post text">
            <h1 class="entry_title">404 Not Found</h1>
        </div>
    <?php endif; ?>
			<div class="clear"></div>

			<div id="pagination">

				<div class="prev active"><?php $this->pageLink('<span class="arrow"></span><span class="title">Prev</span><span class="cap"></span>', 'prev'); ?></div>
				<div class="next active"><?php $this->pageLink('<span class="cap"></span><span class="title">Next</span><span class="arrow"></span>', 'next'); ?></div>
			</div><!-- /pagination -->

			<div class="clear"></div>
		</div><!-- /content -->
	<?php $this->need('footer.php'); ?>