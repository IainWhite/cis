<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Pareto Chart'); ?>
        <p>A <strong>Pareto chart</strong>, named after <strong>Vilfredo Pareto</strong>, is a type of chart that contains both bars and a line graph, where individual values are represented in descending order by bars, and the cumulative total is represented by the line.</p>
        <p>The left vertical axis is the frequency of occurrence, but it can alternatively represent cost or another important unit of measure. The right vertical axis is the cumulative percentage of the total number of occurrences, total cost, or total of the particular unit of measure. Because the reasons are in decreasing order, the cumulative function is a concave function. To take the example below, in order to lower the amount of late arrivals by 78%, it is sufficient to solve the first three issues.</p>
        <p>The purpose of the Pareto chart is to highlight the most important among a (typically large) set of factors. In quality control, it often represents the most common sources of defects, the highest occurring type of defect, or the most frequent reasons for customer complaints, and so on. Wilkinson (2006) devised an algorithm for producing statistically based acceptance limits (similar to confidence intervals) for each bar in the Pareto chart.</p>
        <p>The Pareto chart is one of the <?php echo $this->stencil->addLink('Seven Basic Tools of Quality Control', 'PM'); ?>.</p>

        <?php echo $this->stencil->addImage('Pareto Chart', 'png', 'center'); ?>
    </div>
</div>