<?php include '../header.php'; ?>
<link rel="canonical" href="http://cobcheshire.com/blog" />
<title>Cock O' Barton | Blog</title>
<?php include '../nav.php'; ?>
<div class="container blog">
  <div class="row">
    <div class="col-lg-9 bodycopy justify">
      <h1 class="mb48 mt48">Blog</h1>
      <?php
		  $request_url = 'http://cockobarton.tumblr.com/api/read?start=0';
		  $xml = simplexml_load_file($request_url);
		  $posts = $xml->xpath("/tumblr/posts/post");
		  foreach($posts as $post) {
			  $title = str_replace("…", "...", $post->{'regular-title'});
			  $content = str_replace("’", "'", $post->{'regular-body'});
			  $content = str_replace("…", "...", $content);
			  $content = str_replace("–", "-", $content);
			  $content = str_replace("£", "&pound;", $content);
			  echo '<h3 class="mt48" title="' . $title . '">' . $title . '</h3><br />';
			  echo $content;
		  }
	  ?>
    </div>
    <div class="col-lg-3">
      <?php include '../banner.php'; ?>
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>
