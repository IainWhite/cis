<div class="row">
    <div class="col-lg-6 col-md-6 margin-bottom-10">
        <span class="label label-aqua rounded"><strong>Authors:</strong> <?php echo $this->stencil->addLink('Andy Hunt', 'P'); ?> and <?php echo $this->stencil->addLink('David Thomas', 'P'); ?></span>
    </div>
    <div class="col-lg-6 col-md-6">
        <span class="pull-right">
            <?php echo $this->stencil->addBookRating(6); ?>
        </span>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Pragmatic Programmer: From Journeyman to Master'); ?>
        <?php echo $this->stencil->addBookCover('9780201616224','id'); ?>
        <p>In the preface to the book, the authors write, "<em>This book will help you become a better programmer</em>". That brief sentence, echoing the book's subtitle "<em>from journeyman to master</em>", is a promise from the authors to the reader. The assumption is that you are already a programmer and you want to be a better one. The promise is that following the tips and suggestions will improve your effectiveness and productivity.</p>
        <p>The Pragmatic Programmer is targeted at programmers who love what they do and want to be better at it. In fact, the first tip in the book is "<em>Care About Your Craft</em>". The idea being that if you don't enjoy developing software, you shouldn't be doing it.</p>
        <p>Be aware that to the authors, being a programmer doesn't mean just writing code. Being a programmer also includes requirements gathering, analysis and design, writing specifications, testing, debugging, writing documentation, managing the customer's expectations, and keeping yourself up to date, just the sort of skills and responsibilities you would expect of a master software developer.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <h2>Chapter highlights</h2>
            <h3>Preface</h3>
            <p>I'm including the Preface in the chapter highlights because it includes the first two tips in the book "<em>Care About Your Craft</em>" and "<em>Think! About Your Work</em>". The first is a reminder that developing software should be something you enjoy doing. The second is a challenge to remain conscious of your actions and decisions throughout the day - every day. The authors also describe their point of view on programming, what it takes to be a Pragmatic Programmer, and the layout of the book.</p>
            <h3>Chapter 1, A Pragmatic Philosophy</h3>
            <p>Discusses the core attitudes and behaviours of a pragmatic programmer - like being responsible, dealing with change, the importance of communication, and increasing your knowledge and experience.</p>
            <h3>Chapter 2, A Pragmatic Approach</h3>
            <p>Reveals useful but rarely documented tips and processes for things like decision making, creating prototypes, debugging, producing estimates, and domain languages.</p>
            <h3>Chapter 3, The Basic Tools</h3>
            <p>Identifies the standard tools every programmer (pragmatic or not) who wants to excel at their craft needs to master. This includes scripting languages, text editors (and the need to be very proficient with them), revision control systems, and command shells. This chapter may be where you find yourself in disagreement with the authors. In "Power Editing" the authors strongly recommend using one text editor for everything - writing code, email, user documentation, you name it. If you work in an environment where design docs, tech specs, user documentation and the like are expected to be written in something like MS-Word or Open Office, your email client has its own editor, and you write your code using an IDE, then that's three different editors you "have to " use. But wait, there may still be a way to reach the goal. If you read closely you'll see that what the the authors actually recommended is using a single editor, <em>or</em>a single set of key bindings. Most modern editors will allow you to customize which keystrokes activate which features, so you can reconfigure the different editors you have to use to accept the same keystrokes and achieve the goal.</p>
            <h3>Chapter 4, Pragmatic Paranoia</h3>
            <p>Acknowledges the painful truth that no software is perfect and provides some ideas on how to find and fix errors as early as possible and minimize the effect of errors that make it into production code. Topics covered include design by contract, using asserts and exceptions, suggestions for error handling, and ensuring you release any resources that have been allocated.</p>
            <h3>Chapter 5, Bend, or Break</h3>
            <p>Covers some techniques for writing code that is easily maintainable and modifiable. Topics include reduced coupling in your code (both physical and temporal), using metadata instead of hard coding configurations, using blackboards and different ways of handling events including the publish/subscribe model and MVC.</p>
            <h3>Chapter 6, While You Are Coding</h3>
            <p>Rails against the notion that coding should be approached as a mechanical process that converts a detailed design into source code. The authors suggest that mindlessly translating a design into code is a primary factor in creating poorly written, and sometimes actually wrong, software and that programmers must constantly be thinking about what they are writing and how it effects the rest of the system.</p>
            <h3>Chapter 7, Before the Project</h3>
            <p>Focuses our attention on some key things that need to be addressed at the very beginning of a project like eliciting and documenting requirements, dealing with constraints, producing specifications, and development methodologies.</p>
            <h3>Chapter 8, Pragmatic Projects</h3>
            <P>Moves from the realm of pragmatic individuals to pragmatic teams and discusses several topics that can lead to the ultimate success or failure of a project. Topics covered include how groups of pragmatic programmers can work together as a team, automating everything (well, almost everything), various types of tests that should be in place (all automated, of course), and managing the customer's expectations.</p>
            <h3>Appendix A, Resources</h3>
            <p>Contains references to organizations, books and magazines, and web sites of interest. It also contains the book's bibliography.</p>
            <h3>Appendix B, Answers to Exercises</h3>
            <p>Contains the authors' answers to the exercises found throughout the book. The intent is to show you how the authors think, not to provide you with the One True answer. According to the authors, very few of the exercises have a single correct answer. To get the most out of this book, you should think about the problems and try to come up with your own "right" answer.</p>
        </div>
    </div>

    <div class="row">
        <div class="pull-rightcol-lg-12 col-md-12 margin-bottom-10">
            <?php echo $this->stencil->addBuyBook('9780201616224','id'); ?>
            <span class="pull-right label label-aqua rounded">
                <strong>ISBN:</strong> 020161622X
                <strong>EAN:</strong> 9780201616224
            </span>
        </div>
    </div>
<?php endif; ?>
