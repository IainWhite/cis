<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Capability Maturity Model (CMM)'); ?>
        <p><strong>CMM</strong> (<strong>C</strong>apability <strong>M</strong>aturity <strong>M</strong>odel) is a methodology used to develop and refine an organization's software development process.</p>
        <p>The model describes a five-level evolutionary path of increasingly organized and systematically more mature processes.</p>
        <p>CMM consists of five levels, numbered 1 through 5.</p>
        <p>Level 1 means that the organization doesn’t have any defined, repeatable, or improvable approach to building software.</p>
        <p>At level 5, an organization has a defined, repeatable, and improvable set of practices for developing software.</p>
        <p>Level 1 is considered an immature organization; level 5 is considered a mature organization.</p>
        <p>At each level, the practices that should be employed are defined as Key Practice Area (KPAs).</p>
        <p>Bill Curtis and Mark Paulk from the <strong>Software Engineering Institute</strong> (<strong>SEI</strong>) at Carnegie Mellon University developed CMM in the early 1990s.</p>
        <p>If an organization believes that it has thoroughly implemented the KPAs for a specific level, it can engage someone who has been certified by SEI to assess this. If the organization is compliant, it is so certified.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>The CMM is similar to <strong>ISO 9001</strong>. The 9000 series of standards specified by the <strong>International Organization for Standardization</strong> (<strong>ISO</strong>). The ISO 9000 standards specify an effective quality system for manufacturing and service industries; ISO 9001 deals specifically with software development and maintenance. The main difference between the two systems lies in their respective purposes: ISO 9001 specifies a minimal acceptable quality level for software processes, while the CMM establishes a framework for continuous process improvement and is more explicit than the ISO standard in defining the means to be employed to that end.</p>
            <h3>Five Maturity Levels of Software Processes</h3>
            <ol>
                <li>At the <strong><em>initial </em></strong>level, processes are disorganized, even chaotic. Success is likely to depend on individual efforts, and is not considered to be repeatable, because processes would not be sufficiently defined and documented to allow them to be replicated.</li>
                <li>At the <strong><em>repeatable </em></strong>level, basic project management techniques are established, and successes could be repeated, because the requisite processes would have been made established, defined, and documented.</li>
                <li>At the <strong><em>defined </em></strong>level, an organization has developed its own standard software process through greater attention to documentation, standardization, and integration.</li>
                <li>At the <strong><em>managed </em></strong>level, an organization monitors and controls its own processes through data collection and analysis.</li>
                <li>At the <strong><em>optimizing </em></strong>level, processes are constantly being improved through monitoring feedback from current processes and introducing innovative processes to better serve the organization's particular needs.</li>
            </ol>
            <p><?php echo $this->stencil->addWikiLink('Capability Maturity Model'); ?></p>
        </div>
    </div>
<?php endif; ?>