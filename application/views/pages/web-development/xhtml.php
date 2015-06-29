<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('XHMTL (EXtensible HTML)'); ?>
        <p><strong>XHTML</strong> (E<strong>X</strong>tensible <strong>HTML</strong>) is a mark-up language for Web pages from the <strong>W3C</strong>. XHTML combines <strong>HTML</strong> and <strong>XML</strong> into a single format (HTML 4.0 and XML 1.0). Like XML, XHTML can be extended with proprietary tags. Also like XML, XHTML must be coded more rigorously than HTML. Over the years, HTML coders have become sloppy, because Web browser software was originally written to tolerate many variations in HTML coding.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of XHTML</h2>
            <?php echo $this->stencil->addCodeSnippet('xhtml', 'xhtml.txt'); ?>
        </div>
    </div>
<?php endif; ?>