<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Chicken and the Pig'); ?>
        <p>The fable of <strong>The Chicken and the Pig</strong> is about commitment to a project or cause. When producing a dish made of ham and eggs, the pig provides the ham which requires his sacrifice and the chicken provides the eggs which are not difficult to produce. Thus the pig is really committed in that dish while the chicken is only involved, yet both are needed to produce the dish.</p>
        <p>The fable</p>
        <p>A Pig and a Chicken are walking down the road.</p>
        <p>The Chicken says: "<em>Hey Pig, I was thinking we should open a restaurant!</em>"</p>
        <p>Pig replies: "<em>Hm, maybe, what would we call it?</em>"</p>
        <p>The Chicken responds: "<em>How about 'ham-n-eggs'?</em>"</p>
        <p>The Pig thinks for a moment and says: "<em>No thanks. I'd be committed, but you'd only be involved!</em>"</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Agile Project Management</h2>
            <p>The fable is referenced to define two types of project members by the <?php echo $this->stencil->addLink('Scrum', 'PMS'); ?> agile management system: pigs, who are totally committed to the project and accountable for its outcome, and chickens, who consult on the project and are informed of its progress. By extension, a rooster or gamecock, can be defined as a person who struts around offering uninformed, unhelpful opinions. This analogy is based upon the pig being able to provide bacon (a sacrificial offering, for which the pig must die in order to provide) versus a chicken which provides eggs (non-sacrificial).</p>
            <p>A successful project needs both chickens and pigs (roosters are seen as unproductive). However, given the sacrifice required of being a pig forswearing other projects and opportunities they can be difficult to collect. Thus, the construction of a successful project-team must ensure that the project has sufficient "pigs" and that they are empowered to drive the project in return for committing to and taking accountability for it.</p>
        </div>
    </div>
<?php endif; ?>