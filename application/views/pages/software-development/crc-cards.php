<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CRC Cards'); ?>
        <p><strong>Class Responsibility Collaboration (CRC) Cards</strong> are a brainstorming tool used in the design of object-oriented software.</p>
        <p>They were originally proposed by <?php echo $this->stencil->addLink('Ward Cunningham', 'P'); ?> and <?php echo $this->stencil->addLink('Kent Beck', 'P'); ?> as a teaching tool, but are also popular among expert designers and recommended by <?php echo $this->stencil->addLink('Extreme Programming', 'PMA'); ?> supporters.</p>
        <p><?php echo $this->stencil->addLink('Martin Fowler', 'P'); ?> has described CRC cards as a viable alternative to <?php echo $this->stencil->addLink('UML', 'SD'); ?> sequence diagram to design the dynamics of object interaction and collaboration.</p>
        <p>CRC cards are usually created from index cards. Members of a brainstorming session will write up one CRC card for each relevant class / object of their design.</p>
        <p>The card is partitioned into three areas:</p>
        <ol>
            <li>On top of the card, the class name</li>
            <li>On the left, the responsibilities of the class</li>
            <li>On the right, collaborators (other classes) with which this class interacts to fulfill its responsibilities</li>
        </ol>
        <p>Using a small card keeps the complexity of the design at a minimum. It focuses the designer on the essentials of the class and prevents her / him from getting into its details and inner workings at a time when such detail is probably counter productive.</p>
        <p>It also forces the designer to refrain from giving the class too many responsibilities. Because the cards are portable, they can easily be laid out on a table and re-arranged while discussing a design with other people.</p>
    </div>
</div>
