<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Planning Poker'); ?>
        <p><strong>Planning Poker</strong>, also called <strong>Scrum Poker</strong>, is a consensus-based technique for estimating, mostly used to estimate effort or relative size of development goals in software development.</p>
        <p>In Planning Poker, members of the group make estimates by playing numbered cards face-down to the table, instead of speaking them aloud. The cards are revealed, and the estimates are then discussed. By hiding the figures in this way, the group can avoid the cognitive bias of anchoring, where the first number spoken aloud sets a precedent for subsequent estimates.</p>
        <p>Planning Poker is a variation of the <?php echo $this->stencil->addLink('Wideband Delphi', 'PM'); ?> method. It is most commonly used in <?php echo $this->stencil->addLink('Agile software development', 'PM'); ?>, in particular in <?php echo $this->stencil->addLink('Scrum', 'PMA'); ?> and <?php echo $this->stencil->addLink('Extreme Programming', 'PMA'); ?>.</p>
        <p>The method was first defined and named by <?php echo $this->stencil->addLink('James Grenning', 'P'); ?> in 2002 and later popularised by <?php echo $this->stencil->addLink('Mike Cohn', 'P'); ?> in the book <?php echo $this->stencil->addLink('Agile Estimating and Planning', 'B'); ?>, whose company trade marked the term.</p>
        <p>The reason to use Planning Poker is to avoid the influence of the other participants. If a number is spoken, it can sound like a suggestion and influence the other participants' sizing. Planning poker should force people to think independently and propose their numbers simultaneously. This is accomplished by requiring that all participants show their card at the same time.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>Planning Poker is based on a list of features to be delivered, several copies of a deck of cards and optionally, an egg timer that can be used to limit time spent in discussion of each item.</p>
        <p>The feature list, often a list of user stories, describes some software that needs to be developed.</p>
        <p>The cards in the deck have numbers on them. A typical deck has cards showing the <?php echo $this->stencil->addLink('Fibonacci sequence', 'PM'); ?> including a zero: 0, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89; other decks use similar progressions.</p>
        <p>The reason for using the Fibonacci sequence is to reflect the inherent uncertainty in estimating larger items.</p>
        <p>Several commercially available decks use the sequence: 0, 1/2, 1, 2, 3, 5, 8, 13, 20, 40, 100, and optionally a ? (unsure), an infinity symbol (this task cannot be completed) and a coffee cup (I need a break). Some organisations use standard playing cards of Ace, 2, 3, 5, 8 and king. Where king means: "this item is too big or too complicated to estimate". "<em>Throwing a king</em>" ends discussion of the item for the current <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>.</p>
        <p>Smartphones allow developers to use mobile apps instead of physical card decks. When teams are not in the same geographical locations, collaborative software can be used as replacement for physical cards.</p>

        <h2>Procedure</h2>
        <p>At the estimation meeting, each estimator is given one deck of the cards. All decks have identical sets of cards in them.</p>

        <p>The meeting proceeds as follows:</p>
        <ul>
            <li>A Moderator, who will not play, chairs the meeting.</li>
            <li>The Product Manager provides a short overview. The team is given an opportunity to ask questions and discuss to clarify assumptions and risks. A summary of the discussion is recorded by the Project Manager.</li>
            <li>Each individual lays a card face down representing their estimate. Units used vary - they can be days duration, ideal days or story points. During discussion, numbers must not be mentioned at all in relation to feature size to avoid anchoring.</li>
            <li>Everyone calls their cards simultaneously by turning them over.</li>
            <li>People with high estimates and low estimates are given a soap box to offer their justification for their estimate and then discussion continues.</li>
            <li>Repeat the estimation process until a consensus is reached. The developer who was likely to own the deliverable has a large portion of the "consensus vote", although the Moderator can negotiate the consensus.</li>
            <li>To ensure that discussion is structured; the Moderator or the Project Manager may at any point turn over the egg timer and when it runs out all discussion must cease and another round of poker is played. The structure in the conversation is re-introduced by the soap boxes.</li>
        </ul>

        <p>The cards are numbered as they are to account for the fact that the longer an estimate is, the more uncertainty it contains. Thus, if a developer wants to play a 6 he is forced to reconsider and either work through that some of the perceived uncertainty does not exist and play a 5, or accept a conservative estimate accounting for the uncertainty and play an 8.</p>
    </div>
</div>
<?php endif; ?>