<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MIME - Multipurpose Internet Mail Extensions'); ?>
        <p><strong>Multipurpose Internet Mail Extensions</strong> (<strong>MIME</strong>) is an standard that extends the format of <?php echo $this->stencil->addLink('email', 'WD'); ?> to support:</p>
        <ul>
            <li>Text in character sets other than <?php echo $this->stencil->addLink('ASCII', 'IT'); ?></li>
            <li>Non-text attachments</li>
            <li>Message bodies with multiple parts</li>
            <li>Header information in non-ASCII character sets</li>
        </ul>
        <p>Although MIME was designed mainly for <?php echo $this->stencil->addLink('SMTP', 'IPA'); ?> protocol, its use today has grown beyond describing the content of email and now often includes descriptions of content type in general.</p>
    </div>
</div>