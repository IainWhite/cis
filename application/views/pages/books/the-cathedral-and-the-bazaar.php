<div class="row">
    <div class="col-lg-6 col-md-6 margin-bottom-10">
        <span class="label label-aqua rounded"><strong>Author:</strong> <?php echo $this->stencil->addLink('Eric S. Raymond', 'P'); ?></span>
    </div>
    <div class="col-lg-6 col-md-6">
        <span class="pull-right">
            <?php echo $this->stencil->addBookRating(3); ?>
        </span>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Cathedral and the Bazaar'); ?>
        <?php //echo $this->stencil->addBookCover('','id'); ?>
        <p><strong>The Cathedral and the Bazaar: Musings on Linux and Open Source by an Accidental Revolutionary</strong> (abbreviated <strong>CatB</strong>) is an essay, and later a book, by <?php echo $this->stencil->addLink('Eric S. Raymond', 'P'); ?> on software engineering methods, based on his observations of the <?php echo $this->stencil->addLink('Linux kernel', 'OS'); ?> development process and his experiences managing an open source project, fetchmail.</p>
        <p>It examines the struggle between top-down and bottom-up design.</p>
        <p>The essay was first presented by the author at the Linux Kongress on 27 May 1997 in W&uuml;rzburg and was published as part of the book in 1999.</p>
        <p>The essay contrasts two different free software development models:</p>
        <ul>
            <li>The Cathedral model, in which source code is available with each software release, but code developed between releases is restricted to an exclusive group of software developers. GNU Emacs and GCC are presented as examples.</li>
            <li>The Bazaar model, in which the code is developed over the Internet in view of the public. Raymond credits Linus Torvalds, leader of the Linux kernel project, as the inventor of this process. Raymond also provides anecdotal accounts of his own implementation of this model for the Fetchmail project.</li>
        </ul>
        <p>The essay's central thesis is Raymond's proposition that "<em>given enough eyeballs, all bugs are shallow</em>" (which he terms <?php echo $this->stencil->addLink('Linus;s Law', 'W'); ?>): the more widely available the source code is for public testing, scrutiny, and experimentation, the more rapidly all forms of bugs will be discovered.</p>
        <p>In contrast, Raymond claims that an inordinate amount of time and energy must be spent hunting for bugs in the Cathedral model, since the working version of the code is available only to a few developers.</p>

        <h2>Lessons for creating good open source software</h2>
        <p>Raymond points to 19 "lessons" learned from various software development efforts, each describing attributes associated with good practice in open source software development:</p>
        <ol>
            <li>Every good work of software starts by scratching a developer's personal itch.</li>
            <li>Good programmers know what to write. Great ones know what to rewrite (and reuse).</li>
            <li>Plan to throw one [version] away; you will, anyhow. (Copied from <?php echo $this->stencil->addLink('Fred Brooks', 'P'); ?>' <?php echo $this->stencil->addLink('the Mythical Man Month', 'B'); ?>)</li>
            <li>If you have the right attitude, interesting problems will find you.</li>
            <li>When you lose interest in a program, your last duty to it is to hand it off to a competent successor.</li>
            <li>Treating your users as co-developers is your least-hassle route to rapid code improvement and effective debugging.</li>
            <li>Release early. Release often. And listen to your customers.</li>
            <li>Given a large enough beta-tester and co-developer base, almost every problem will be characterized quickly and the fix obvious to someone.</li>
            <li>Smart data structures and dumb code works a lot better than the other way around.</li>
            <li>If you treat your beta-testers as if they're your most valuable resource, they will respond by becoming your most valuable resource.</li>
            <li>The next best thing to having good ideas is recognizing good ideas from your users. Sometimes the latter is better.</li>
            <li>Often, the most striking and innovative solutions come from realizing that your concept of the problem was wrong.</li>
            <li>Perfection (in design) is achieved not when there is nothing more to add, but rather when there is nothing more to take away. (Attributed to Antoine de Saint-Exupéry)</li>
            <li>Any tool should be useful in the expected way, but a truly great tool lends itself to uses you never expected.</li>
            <li>When writing gateway software of any kind, take pains to disturb the data stream as little as possible and never throw away information unless the recipient forces you to!</li>
            <li>When your language is nowhere near Turing-complete, syntactic sugar can be your friend.</li>
            <li>A security system is only as secure as its secret. Beware of pseudo-secrets.</li>
            <li>To solve an interesting problem, start by finding a problem that is interesting to you.</li>
            <li>Provided the development coordinator has a communications medium at least as good as the Internet, and knows how to lead without coercion, many heads are inevitably better than one.</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="pull-rightcol-lg-12 col-md-12 margin-bottom-10">
        <?php //echo $this->stencil->addBuyBook('','id'); ?>
        <span class="pull-right label label-aqua rounded">
            <strong>ISBN:</strong> 0596001312
            <strong>EAN:</strong> 9780596001315
        </span>
    </div>
</div>

