<div style="clear:left;"></div>
<div id="kommentar_formular">
 
<h3 id="respond">Kommentar schreiben</h3>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
  
			<label for="author">Name</label><br />
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
          	<br /><br />
            <label for="email">Email <small>(wird nicht veröffentlicht)</small></label><br />
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
          	<br /><br />
          	<label for="kommentar">Kommentar</label><br />
			<textarea name="comment" id="comment" style="width: 100%;" rows="10" tabindex="4"></textarea>
            <br /><br />
            <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" />
      		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			
   <?php do_action('comment_form', $post->ID); ?>
 
</form>
 
</div> <!-- kommentar_formular -->

<div id="kommentare">
   <?php foreach ($comments as $comment) : ?>
 
      <div class="comment" id="comment-<?php comment_ID() ?>">
 
         <small class="commentmetadata"><?php comment_author_link() ?> <strong>|</strong> am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr</small>
 
         <?php comment_text() ?>
 
          <?php if ($comment->comment_approved == '0') : ?>
            <strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
         <?php endif; ?>
 
      </div>
   <?php endforeach; /* end for each comment */ ?>
</div><!-- kommentare -->