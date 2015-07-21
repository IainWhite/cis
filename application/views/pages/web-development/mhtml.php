<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MHTML (MIME HTML)'); ?>
        <p><strong>MHTML</strong>, short for <strong>MIME HTML</strong>, is a web page archive format used to combine resources that are typically represented by external links (such as images, <?php echo $this->stencil->addLink('Flash', 'WD'); ?> animations, <?php echo $this->stencil->addLink('Java applets', 'WD'); ?>, and audio files) with <?php echo $this->stencil->addLink('HTML', 'WD'); ?> code into a single file.</p>
        <p>The content of an MHTML file is encoded as if it were an HTML e-mail message, using the MIME type <code>multipart/related</code>.</p>
        <p>The first part of the file is normally encoded HTML; subsequent parts are additional resources identified by their original <?php echo $this->stencil->addLink('URLs', 'WD'); ?> and encoded in <?php echo $this->stencil->addLink('base64', 'WD'); ?>.</p>
        <p>This format is sometimes referred to as <strong>MHT</strong>, after the suffix <code>.mht</code> given to such files by default when created by <?php echo $this->stencil->addLink('Microsoft Word', 'ITS'); ?>, <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?>, or <?php echo $this->stencil->addLink('Opera', 'WB'); ?>.</p>
        <p>MHTML is a proposed standard, circulated in a revised edition in 1999 as <?php echo $this->stencil->addRFCLink('2557'); ?>.</p>
        <p>It is important to note that the resources are not stored in the file but rather links are saved.</p>
        <p>Use of "<em>save as</em>" and selecting "<em>webpage complete (HTML)</em>" creates a directory to store the resource files in and thus the save does not change over time.</p>
    </div>
</div>

