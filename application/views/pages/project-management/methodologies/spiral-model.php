<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Spiral Model'); ?>
        <p>The <strong>Spiral model</strong>, also known as the <strong>Spiral Lifecycle Model</strong>, is a <strong><?php echo $this->stencil->addLink('Systems Development Life Cycle', 'PMM'); ?> (SDLC)</strong> model used in Information Technology. This model of development combines the features of the <strong><?php echo $this->stencil->addLink('Prototyping Model', 'PMM'); ?></strong> and the <strong><?php echo $this->stencil->addLink('Waterfall model', 'PMM'); ?></strong>. The Spiral Model is favored for large, expensive, and complicated projects.</p>

        <?php echo $this->stencil->addImage('Spiral Model', 'png', 'center', 'p', TRUE, NULL, TRUE); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>The steps in the spiral model can be generalised as follows:</p>
        <ol>
            <li>The new system requirements are defined in as much detail as possible. This usually involves interviewing a number of users representing all the external or internal users and other aspects of the existing system.</li>
            <li>A preliminary design is created for the new system.</li>
            <li>A first prototype of the new system is constructed from the preliminary design. This is usually a scaled down system, and represents an approximation of the characteristics of the final product.</li>
            <li>A second prototype is evolved by a fourfold procedure: (1) evaluating the first prototype in terms of its strengths, weaknesses, and risks; (2) defining the requirements of the second prototype; (3) planning and designing the second prototype; (4) constructing and testing the second prototype.</li>
            <li>At the customer's option, the entire project can be aborted if the risk is deemed too great. Risk factors might involve development cost overruns, operating cost miscalculation, or any other factor that could, in the customer's judgment, result in a less than satisfactory final product.</li>
            <li>The existing prototype is evaluated in the same manner as was the previous prototype, and, if necessary, another prototype is developed from it according to the fourfold procedure outlined above.</li>
            <li>The preceding steps are iterated until the customer is satisfied that the refined prototype represents the final product desired.
            <li>The final system is constructed, based on the refined prototype.</li>
            <li>The final system is thoroughly evaluated and tested. Routine maintenance is carried out on a continuing basis to prevent large scale failures and to minimize downtime.</li>
        </ol>
    </div>
</div>