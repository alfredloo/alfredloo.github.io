<?php
  
  
  // Page Variables
  include ($_SERVER['DOCUMENT_ROOT']."/blogothers/galleryinfo.php");
  $pgtitle = $gallerytitle;
  $section = "title auto";
  $blogrelurl = "/blog";
  $blogurl = "http://www.alfredivy.per.sg/blog/";
  $img = '<img alt="DSC_0247.jpg" src="http://www.alfredivy.per.sg/blog/others/DSC_0247-photo.jpg" width="480" height="318" />
';
    
  // Functions
  include ($_SERVER['DOCUMENT_ROOT']."/blogmeta/functions/all.php");
  
  DocHead();
  ContentOpen();
?>

  <div id="titleimg"><a href="gallery/"><img alt="DSC_0247.jpg" src="http://www.alfredivy.per.sg/blog/others/DSC_0247-photo.jpg" width="480" height="318" />
</a></div>
  
  <div id="gallerydesc">
  <h1><?= $pgtitle ?></h1>
  <p><?= $gallerydesc ?></p>
  <p>Updated: February 2007</p>
  <p>(<em>1 photos</em>)
    <a href="<?= $fullgalleryurl ?>index.xml" class="i"><img src="<?= $blogrelurl ?>meta/img/btn_rss.gif" alt="RSS" width="22" height="11" /></a></p>
  <p><a href="gallery/" class="i"><img src="<?= $blogrelurl ?>meta/img/btn_view_gallery.gif" alt="View gallery" width="97" height="21" /></a></p>
  </div>

<?= ContentClose(); ?>

<p id="path"><a href="<?= $blogrelurl ?>">Gallery</a> > <?= $gallerytitle; ?></p>  



