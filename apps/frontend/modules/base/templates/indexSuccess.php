<?php foreach ($content_objects as $content_object): ?>
    <?php if ($content_object->getObjectType()=='MasterPage'):?>
        <div id="masterpage"><?php echo $content_object->getContent() ?></div>
    <?php elseif ($content_object->getObjectType()=='Post'): ?>   
        <div id="post"><?php echo $content_object->getContent() ?></div>
    <?php else: ?>
        <div><?php echo $content_object->getUserId() ?></div>
        <div><?php echo $content_object->getName() ?></div>
        <div><?php echo $content_object->getAddress() ?></div>
        <div><?php echo $content_object->getAddress2() ?></div>
        <div><?php echo $content_object->getCity() ?></div>
        <div><?php echo $content_object->getZip() ?></div>
        <div><?php echo $content_object->getEmail() ?></div>
        <div><?php echo $content_object->getCCPNumber() ?></div>
        <div><?php echo $content_object->getFacebook() ?></div>
        <div><?php echo $content_object->getTwitter() ?></div>
        <div><?php echo $content_object->getTitle() ?></div>
        <div><?php echo $content_object->getFbContentLink() ?></div>
        <div><?php echo $content_object->getFbImpordivate() ?></div>
        <div><?php echo $content_object->gedivescription() ?></div>
        <div><?php echo $content_object->getComment() ?></div>
        <div><?php echo $content_object->getPostId() ?></div>
        <div><?php echo $content_object->getAlbumId() ?></div>
        <div><?php echo $content_object->getPhotoId() ?></div>
        <div><?php echo $content_object->getMixId() ?></div>
        <div><?php echo $content_object->getImage() ?></div>
        <div><?php echo $content_object->getImageThumb() ?></div>
        <div><?php echo $content_object->getImageHeight() ?></div>
        <div><?php echo $content_object->getImageWidth() ?></div>
        <div><?php echo $content_object->getImageThumbWidth() ?></div>
        <div><?php echo $content_object->getImageThumbHeight() ?></div>
        <div><?php echo $content_object->getArtistId() ?></div>
        <div><?php echo $content_object->getWebsite() ?></div>
        <div><?php echo $content_object->getMySpace() ?></div>
        <div><?php echo $content_object->getContactInfo() ?></div>
        <div><?php echo $content_object->getAudioUrl() ?></div>
        <div><?php echo $content_object->getStart() ?></div>
        <div><?php echo $content_object->getEnd() ?></div>
        <div><?php echo $content_object->getEventLocationId() ?></div>
        <div><?php echo $content_object->getPhone() ?></div>
        <div><?php echo $content_object->getMapUrl() ?></div>
        <div><?php echo $content_object->getLocationImage() ?></div>
        <div><?php echo $content_object->getCreatedAt() ?></div>
        <div><?php echo $content_object->getUpdatedAt() ?></div>
    <?php endif; ?>
<?php endforeach; ?>

