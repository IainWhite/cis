<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('HMTL (Hypertext Markup Language)'); ?>
        <p><strong>HTML</strong> (<strong>H</strong>yper<strong>t</strong>ext <strong>M</strong>arkup <strong>L</strong>anguage) is the language of the web. HTML is a set of tags that are used to define the content, layout and the formatting of the web document. Web Browsers use the HTML tags to define how to display the text.</p>
        <p>HyperText Markup Language is the document format used on the Web. Web pages are built with tags embedded in the text that are coded in HTML. The tags define the page layout, fonts and hypertext links to other documents on the Web. Each link contains the <strong>URL</strong> (address) of a Web page residing on the same server or any server worldwide, hence "World Wide" Web. The HTML also defines all the graphic elements used on the page, which are separate files on a local or remote server.</p>
        <p>HTML is a mark-up language (the <strong>ML</strong> in HTML). A mark-up language can be thought of as a "presentation language," but it is not a programming language</p>
        <p>HTML was originally conceived as a simple mark-up language to render research documents on the Web. No one envisioned Web pages turning into multimedia applications, but HTML pages have been reworked and jury-rigged to make them function as such. As a result, the source code behind today's Web pages is often a complex concoction of tags and scripting.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>HTML Versions</h3>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version</th>
                    <th>Year</th>
                </tr>
                <tr>
                    <td>HTML</td>
                    <td>1991</td>
                </tr>
                <tr>
                    <td>HTML+</td>
                    <td>1993</td>
                </tr>
                <tr>
                    <td>HTML 2.0</td>
                    <td>1995</td>
                </tr>
                <tr>
                    <td>HTML 3.2</td>
                    <td>1997</td>
                </tr>
                <tr>
                    <td>HTML 4.01</td>
                    <td>1999</td>
                </tr>
                <tr>
                    <td>XHTML 1.0</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>HTML5</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>XHTML5</td>
                    <td>2013</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of HTMl</h2>
            <?php echo $this->stencil->addCodeSnippet('html', 'html.txt'); ?>
        </div>
    </div>
<?php endif; ?>
