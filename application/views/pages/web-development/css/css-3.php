<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CSS-3'); ?>
        <p>The <strong>CSS-3</strong> specification is still under development by <?php echo $this->stencil->addLink('W3C', 'C'); ?>. However, many of the new CSS-3 properties have been implemented in modern browsers.</p>
        <p>CSS3 is completely backwards-compatible with earlier versions of <?php echo $this->stencil->addLink('CSS', 'WD'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>CSS-3 Modules</h2>
            <p>CSS-3 has been split into "modules". It contains the "old CSS specification" (which has been split into smaller pieces). In addition, new modules are added.</p>
            <ul>
                <li>Selectors</li>
                <li>Box Model</li>
                <li>Backgrounds and Borders</li>
                <li>Image Values and Replaced Content</li>
                <li>Text Effects</li>
                <li>2D / 3D Transformations</li>
                <li>Animations</li>
                <li>Multiple Column Layout</li>
                <li>User Interface</li>
            </ul>
        </div>
    </div>
<?php endif; ?>