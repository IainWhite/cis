<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Coursera'); ?>
        <?php echo $this->stencil->addLogo('Coursera', 'jpg', 'left'); ?>
        <p><strong>Coursera</strong> is an educational technology company offering massive open on-line courses (MOOCs) founded by computer science professors <strong>Andrew Ng</strong> and <strong>Daphne Koller</strong> from Stanford University.</p>
        <p>Coursera works with universities to make some of their courses available on-line, and offers courses in physics, engineering, humanities, medicine, biology, social sciences, mathematics, business, computer science, and other subjects.</p>
        <br />
        <p class="pull-right"><strong>Website:</strong> <?php echo $this->stencil->addExternalLink('www.coursera.org', 'https://www.coursera.org/'); ?></p>

        <p>Iain White has taken <strong><?php echo $this->stencil->getQualificationsCount('coursera'); ?></strong> courses with Coursera.

        <h2>Latest Coursera Courses</h2>

        <?php echo $this->stencil->getQualifications('coursera', 10); ?>

        <p>See more...</p>

    </div>
</div>