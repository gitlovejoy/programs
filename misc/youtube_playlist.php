<?php $cont = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/playlists/PLD629C50E1A85BF84/?v=2&alt=json&feature=plcp')); ?>
<?php $feed = $cont->feed->entry; ?>
<?php if(count($feed)): foreach($feed as $item): // youtube start ?>
   <?php echo $item->title->{'$t'}  ?> <br />
   <?php //echo $item->{'media$group'}->{'media$description'}->{'$t'}  ?>
<?php endforeach; endif; // youtube end ?>

