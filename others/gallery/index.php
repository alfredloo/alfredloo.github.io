<?php
  // Page Variables
  include ($_SERVER['DOCUMENT_ROOT']."/blogothers/galleryinfo.php");
  $pgtitle = $gallerytitle . " > Gallery";
  $section = "gallery";
  $blogrelurl = "/blog";
  $blogurl = "http://www.alfredivy.per.sg/blog/";

  // Functions
  include ($_SERVER['DOCUMENT_ROOT']."/blogmeta/functions/all.php");
  
  $imgs[] = Array(
    "str" => '<img alt="DSC_0247.jpg" src="http://www.alfredivy.per.sg/blog/others/DSC_0247-thumb.jpg" width="90" height="59" />
',
    "lnk" => '/blog/others/gallery/testing.php',
    "tag" => ''
    );


  $gallerycount = count($imgs);
  
  $gallerylimits = GalleryLimits($gallerycount);
  extract($gallerylimits);

  // Reverse array order if $displayorder set to "new" in cookie or POST variable:
  if ($displayorder == "new") $imgs = array_reverse($imgs);

  DocHead();
  ContentOpen();
?>

<div class="galleryinfo">
  <h1><?= $gallerytitle ?></h1>
  <p class="desc"><?= $gallerydesc ?></p>

</div>

<?php
  echo "<ul class=\"slides\">\n";
  if ($prevstart) {
    echo '  <li class="backward"><a href="'.$prevstart.'">';
    echo '<img alt="Previous page" title="Previous page" src="'.$blogrelurl.'meta/img/moreslide_prev.gif" width="90" height="67" />';
    echo "</a></li>\n";
  }
  for ($i = ($lolimit-1); $i < $hilimit; $i++) {
    $item = '  <li';
    if ($imgs[$i]['tag']) $item .= ' class="'.$imgs[$i]['tag'].'"';
    $item .= '><a href="'.$imgs[$i]['lnk'].'"';
    if (IsVertical($imgs[$i]['str'])) $item .= ' class="v"';
    $item .= '>'.$imgs[$i]['str'].'</a></li>'."\n";
    echo $item;
  }
  if ($nextstart) {
    echo '  <li class="forward"><a href="'.$nextstart.'">';
    echo '<img alt="Next page" title="Next page" src="'.$blogrelurl.'meta/img/moreslide_next.gif" width="90" height="67" />';
    echo "</a></li>\n";
  }
  echo "</ul>\n";
?>

<div class="galleryinfo">
  <p>Subscribe to updates: <a href="<?= $fullgalleryurl ?>index.xml" class="i"><img src="<?= $blogrelurl ?>meta/img/btn_rss.gif" alt="RSS" width="22" height="11" /></a></p>
<?= GalleryNav($imgs) ?>
</div>

<?= ContentClose(); ?>

<p id="path"><a href="<?= $blogrelurl ?>">Gallery</a> > <a href="<?= $galleryurl ?>"><?= $gallerytitle ?></a> > Gallery</p>  
