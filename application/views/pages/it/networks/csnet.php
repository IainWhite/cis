<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Computer Science Network (CSNET)'); ?>
        <p>The <strong>Computer Science Network</strong> (<strong>CSNET</strong>) was a computer network that began operation in 1981 in the United States.</p>
        <p>Its purpose was to extend networking benefits, for computer science departments at academic and research institutions that could not be directly connected to <?php echo $this->stencil->addLink('ARPANET', 'ITN'); ?>, due to funding or authorization limitations.</p>
        <p>It played a significant role in spreading awareness of, and access to, national networking and was a major milestone on the path to development of the global <?php echo $this->stencil->addLink('Internet', 'ITN'); ?>.</p>
        <p>CSNET was funded by the <strong>National Science Foundation</strong> for an initial three year period from 1981 to 1984.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Lawrence Landweber at the University of Wisconsin-Madison prepared the original CSNET proposal, on behalf of a consortium of universities (Georgia Tech, University of Minnesota, University of New Mexico, Oklahoma University, Purdue University, University of California-Berkeley, University of Utah, University of Virginia, University of Washington, University of Wisconsin, and Yale University).</p>
            <p>The US National Science Foundation (NSF) requested a review from David J. Farber at the University of Delaware. Farber assigned the task to his graduate student Dave Crocker who was already active in the development of electronic mail. The project was deemed interesting but in need of significant refinement.</p>
            <p>The proposal eventually gained the support of Vinton Cerf and DARPA. In 1980, the NSF awarded $5 million to launch the network. It was an unusually large project for the NSF at the time. A stipulation for the award of the contract was that the network needed to become self-sufficient by 1986.</p>
            <p>By 1981, three sites were connected: University of Delaware, Princeton University, and Purdue University.</p>
            <p>By 1982, 24 sites were connected expanding to 84 sites by 1984, including one in Israel. Soon thereafter, connections were established to computer science departments in Australia, Canada, France, Germany, Korea, and Japan. CSNET eventually connected more than 180 institutions.</p>
            <p>CSNET was a forerunner of the <strong>National Science Foundation Network</strong> (<?php echo $this->stencil->addLink('NSFNet', 'ITN'); ?>)</strong> which eventually became a backbone of the Internet.</p>
            <p>CSNET operated autonomously until 1989, when it merged with <strong>Bitnet</strong> to form the <strong>Corporation for Research and Educational Networking</strong> (<strong>CREN</strong>).</p>
            <p>By 1991, the success of the NSFNET and NSF-sponsored regional networks had rendered the CSNET services redundant, and the CSNET network was shut down in October 1991.</p>
        </div>
    </div>
<?php endif; ?>