<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Nassi–Shneiderman Diagram'); ?>
        <?php echo $this->stencil->addImage('Nassi–Shneiderman Diagram', 'gif', 'right'); ?>
        <p>A <strong>Nassi–Shneiderman diagram (NSD)</strong> in computer programming is a graphical design representation for structured programming. This type of diagram was developed in 1972 by <strong>Isaac Nassi</strong> and <strong>Ben Shneiderman</strong> who were both graduate students at SUNY-Stony Brook. These diagrams are also called <strong><em>structograms</em></strong>, as they show a program's structures.</p>
        <p>Following a top down design, the problem at hand is reduced into smaller and smaller sub-problems, until only simple statements and control flow constructs remain. Nassi–Shneiderman diagrams reflect this top down decomposition in a straightforward way, using nested boxes to represent sub-problems. Consistent with the philosophy of structured programming, Nassi–Shneiderman diagrams have no representation for a GOTO statement.</p>
        <p>Nassi–Shneiderman diagrams are only rarely used for formal programming. Their abstraction level is close to structured program code and modifications require the whole diagram to be redrawn. Nonetheless, they can be useful for sketching processes and high level designs.</p>
        <p>Nassi–Shneiderman diagrams are (almost) isomorphic with <?php echo $this->stencil->addLink('flowcharts', 'PM'); ?>. Everything you can represent with a Nassi–Shneiderman diagram you can also represent with a flowchart. For flowcharts of programs, almost everything you can represent with a flowchart you can also represent with a Nassi–Shneiderman diagram. The exceptions are constructs like <code>goto</code> and the <?php echo $this->stencil->addLink('C', 'L'); ?> programming language break and continue statements for loops.</p>
    </div>
</div>