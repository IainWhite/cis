<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('INVEST Mnemonic'); ?>
        <p>The <strong>INVEST</strong> mnemonic was created by Bill Wake as a reminder of the characteristics of a good quality user story, as may be used in a <?php echo $this->stencil->addLink('Scrum', 'PMA'); ?> Backlog or {'XP'|link_urls:'m'}<?php echo $this->stencil->addLink('XP', 'PMA'); ?> project.</p>
        <ul>
            <li><strong>I</strong> - Independent: The user story should be self-contained, in a way that there is no inherent dependency on another user story.</li>
            <li><strong>N</strong> - Negotiable: User stories, up until they are part of an iteration, can always be changed and rewritten.</li>
            <li><strong>V</strong> - Valuable: A user story must deliver value to the end user.</li>
            <li><strong>E</strong> - Estimatable: You must always be able to estimate the size of a user story.</li>
            <li><strong>S</strong> - Sized appropriately or Small: User stories should not be so big as to become impossible to plan/task/prioritize with a certain level of certainty.</li>
            <li><strong>T</strong> - Testable: The user story or its related description must provide the necessary information to make test development possible.</li>
        </ul>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <dl>
            <dt>Independent</dt>
            <dd>One of the characteristics of Agile Methodologies such as Scrum or XP is the ability to move stories around, taking into account their relative priority - for example - without much effort. If you find user stories that are tightly dependent, a good idea might be to combine them into a single user story.</dd>
        </dl>
        <dl>
            <dt>Negotiable</dt>
            <dd>The only thing that is fixed and set in stone in an agile project is an iteration backlog (and, even then, it can be broken). While the story lies in the product backlog, it can be rewritten or even discarded, depending on business, market, technical or any other type of requirement by team members.</dd>
        </dl>
        <dl>
            <dt>Valuable</dt>
            <dd>The focus here is to bring actual project-related value to the end-user. Coming up with technical stories that are really fun to code but bring no value to the end-user violates one of the {'Agile'|link_urls:'m'} Principles, which is to continuously deliver valuable software.</dd>
        </dl>
        <dl>
            <dt>Estimable</dt>
            <dd>If a user story size cannot be estimated, it will never be planned, tasked, and, thus, become part of an iteration. So there's actually no point in keeping this kind of user story in the {'Product Backlog'|link_urls:'m'} at all. Most of the time, estimation cannot be executed due to the lack of supporting information either in the story description itself or directly from the {'Product Owner'|link_urls:'m'}.</dd>
        </dl>
        <dl>
            <dt>Sized appropriately or Small</dt>
            <dd>Try to keep your user story sizes to typically a few person-days and at most a few person-weeks. Anything beyond that range should be considered too large to be estimated with a good level of certainty or even "<em>epic</em>" and broken down into smaller user stories. There's no problem in starting with epic stories, as long as they are broken down when the time to place them in an iteration backlog becomes closer.</dd>
        </dl>
        <dl>
            <dt>Testable</dt>
            <dd>Bear in mind that a story should only be considered <em>DONE</em>, among other things, if it was tested successfully. If one cannot test a story due to lack of information, the story should not be considered a good candidate to be part of an iteration Backlog.</dd>
        </dl>
    </div>
</div>
<?php endif; ?>