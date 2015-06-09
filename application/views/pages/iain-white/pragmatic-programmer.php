<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Pragmatic Programmer'); ?>
        <?php $this->stencil->setDescription('Iain White is a Pragmatic Programmer who has been developing software for over ' . $this->stencil->elapsedYears('01/09/1987') . '.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, Pragmatic Programmer')); ?>

        <p>I am a big fan of the book <strong>The Pragmatic Programmer: From Journeyman to Master</strong> by Andrew Hunt and David Thomas.</p>

        <p>When I first read this book I saw a reflection of my few on Software Development and I always have a copy close and recommended it to team mates and managers.</p>

        <p>I often find myself quoting principles such as DRY and No Broken Windows.</p>

        <p>I regard myself as a Pragmatic Programmer.</p>


        <h3>DRY - Don't Repeat Yourself</h3>

        <p>Every piece of knowledge must have a single, unambiguous, authoritative representation within a system.</p>

        <p>This will increase your maintenance capabilities and lower bugs proliferation.</p>

        <h3>No Broken Windows</h3>

        <p>The concept of Broken Windows come from the criminological theory:</p>

        <p>Consider a building with a few broken windows. If the windows are not repaired, the tendency is for vandals to break a few more windows. Eventually, they may even break into the building, and if it’s unoccupied, perhaps become squatters.</p>

        <p>In software development, broken windows are bad designs, wrong decisions or even poor code. If you don’t fix them as you find them, you’ll end up quickly with software rot.</p>

        <?php echo $this->stencil->addBook('The Pragmatic Programmer: From Journeyman to Master', $how = 'title'); ?>

    </div>
</div>
