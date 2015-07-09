<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SGML - Standard Generalized Markup Language'); ?>
        <p>The <strong>Standard Generalized Markup Language</strong> (<strong>SGML</strong>; ISO 8879:1986) is for defining generalized mark-up languages for documents.</p>
        <p>Generalized mark-up is based on two novel postulates:</p>
        <ul>
            <li>Mark-up should be declarative: it should describe a document's structure and other attributes, rather than specify the processing to be performed on it. Declarative mark-up is less likely to conflict with unforeseen future processing needs and techniques.</li>
            <li>Mark-up should be rigorous so that the techniques available for processing rigorously-defined objects like programs and databases can be used for processing documents as well.</li>
        </ul>
        <p><?php echo $this->stencil->addLink('HTML', 'WD'); ?> was theoretically an example of an SGML-based language until <?php echo $this->stencil->addLink('HTML5', 'WD'); ?>, which admits that browsers can't parse it as SGML (for compatibility reasons) and codifies exactly what they must do instead.</p>
    </div>
</div>