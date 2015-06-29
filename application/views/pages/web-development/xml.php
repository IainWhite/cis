<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('XML (Extensible Markup Language'); ?>
        <p><strong>Extensible Markup Language</strong> (<strong>XML</strong>) is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable.</p>
        <p>The design goals of XML emphasize simplicity, generality, and usability over the Internet. It is a textual data format with strong support via Unicode for the languages of the world. Although the design of XML focuses on documents, it is widely used for the representation of arbitrary data structures, for example in web services.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of XML</h2>
            <?php echo $this->stencil->addCodeSnippet('xml', 'xml.txt'); ?>
        </div>
    </div>
<?php endif; ?>