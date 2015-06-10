<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline("Brooks's Law"); ?>
        <p><strong>Brooks's Law</strong> is a principle in software development which says that <em>"adding manpower to a late software project makes it later."</em></p>
        <p>It was coined by <?php echo $this->stencil->addLink('Fred Brooks', '/people'); ?> in his 1975 book <?php echo $this->stencil->addLink('The Mythical Man-Month', '/books'); ?>. The corollary of Brooks's Law is that there is an incremental person who, when added to a project, makes it take more, not less time.</p>
        <p>Brooks adds that <em><strong>"Nine women can't make a baby in one month."</strong></em></p>
     </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>According to Brooks himself, the law is an "outrageous oversimplification", but it captures the general rule. Brooks points to two main factors that explain why it works this way:</p>
        <ol>
            <li>
                <p>It takes some time for the people added to a project to become productive. Brooks calls this the "ramp up" time.</p>
                <p>Software projects are complex engineering endeavors, and new workers on the project must first become educated about the work that has preceded them; this education requires diverting resources already working on the project, temporarily diminishing their productivity while the new workers are not yet contributing meaningfully.</p>
                <p>Each new worker also needs to integrate with a team composed of multiple engineers who must educate the new worker in their area of expertise in the code base, day by day.</p>
                <p>In addition to reducing the contribution of experienced workers (because of the need to train), new workers may even have negative contributions – for example, if they introduce bugs that move the project further from completion.</p>
            </li>
            <li>
                <p>Communication overheads increase as the number of people increases.</p>
                <p>Due to combinatorial explosion, the number of different communication channels increases rapidly with the number of people.</p>
                <p>Everyone working on the same task needs to keep in sync, so as more people are added they spend more time trying to find out what everyone else is doing.</p>
            </li>
        </ol>
    </div>
</div>