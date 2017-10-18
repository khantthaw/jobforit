
<form action="<?php echo site_url('news/saveNewsInsertForm'); ?>" method='post'>
 News Title<input type="text" name="news-title" class="news-title"><br>
 News Content<textarea width="200px" height="100px" class="news-content" name="news-content"></textarea><br>
 News Photo<input type="file" name="news-photo" class="news-photo"><br>
 <input type="submit" name="news-submit" class="news-submit" value="Save News">
 <input type="reset" name="news-reset" class="news-reset" value="Cancel">
</form>
