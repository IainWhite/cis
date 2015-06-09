<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Books'); ?>

        <h2>By Title</h2>
        <?php echo $this->stencil->addBook('The Pragmatic Programmer: From Journeyman to Master', $how = 'title'); ?>

        <h2>By Author</h2>
        <?php echo $this->stencil->addBook('Martin Fowler', $how = 'author'); ?>

        <h2>By Type</h2>
        <?php echo $this->stencil->addBook('php'); ?>

        <h2>By Cat</h2>
        <?php echo $this->stencil->addBook('agile', $how = 'cat'); ?>

        <h2>Random 3 By Author</h2>
        <?php echo $this->stencil->addBook('Martin Fowler', $how = 'author', $num = 3); ?>

        <h2>Random 3 By Type</h2>
        <?php echo $this->stencil->addBook('php', $how = 'type', $num = 3); ?>

        <h2>Random 3 By Cat</h2>
        <?php echo $this->stencil->addBook('agile', $how = 'cat', $num = 3); ?>

    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h2>Cover by Title</h2>
        <?php echo $this->stencil->addBookCover('The Pragmatic Programmer: From Journeyman to Master'); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h2>Cover by Id</h2>
        <?php echo $this->stencil->addBookCover('9781430322641','id'); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h2>Buy Book by Title</h2>
        <?php echo $this->stencil->addBuyBook('The Pragmatic Programmer: From Journeyman to Master'); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h2>Buy Book by Id</h2>
        <?php echo $this->stencil->addBuyBook('9781430322641','id'); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h2>Book Ratings</h2>
        <p><?php echo $this->stencil->addBookRating(0); ?></p>
        <p><?php echo $this->stencil->addBookRating(1); ?></p>
        <p><?php echo $this->stencil->addBookRating(2); ?></p>
        <p><?php echo $this->stencil->addBookRating(3); ?></p>
        <p><?php echo $this->stencil->addBookRating(4); ?></p>
        <p><?php echo $this->stencil->addBookRating(5); ?></p>
        <p><?php echo $this->stencil->addBookRating(6); ?></p>

    </div>
</div>


