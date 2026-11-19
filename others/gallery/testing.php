<?php
  // Page Variables
  include ($_SERVER['DOCUMENT_ROOT']."/blogothers/galleryinfo.php");
  $blogrelurl = "/blog";
  $blogurl = "http://www.alfredivy.per.sg/blog/";
  $section = "photosolo";
  $pgtitle = "Testing";
  $entryid = 37;
  $img = '<img alt="DSC_0247.jpg" src="http://www.alfredivy.per.sg/blog/others/DSC_0247-photo.jpg" width="480" height="318" />
';

  
  // Functions
  include ($_SERVER['DOCUMENT_ROOT']."/blogmeta/functions/all.php");
  
  DocHead();
  ContentOpen();
?>

<div id="desc">
  <h1>Testing</h1>
  <p>testing</p>
</div>

<div id="main">
  <p id="photo"><?= $img ?></p>
  <div id="meta">
    <ul>
      <li class="count">Photo <?= CatOrder($entryids, $entryid) ?> of <?= $gallerycount ?></li>
      <li class="date"> 7 February 2007</li>
      
    </ul>
  </div>



</div>







<?= ContentClose(); ?>

<p id="path"><a href="<?= $blogrelurl ?>">Gallery</a> > <a href="<?= $galleryurl ?>"><?= $gallerytitle ?></a> > <a href="<?= $galleryurl ?>gallery/">Gallery</a> > Testing</p>

