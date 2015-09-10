<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('DMAIC'); ?>
        <?php echo $this->stencil->addImage('DMAIC', 'jpg', 'left'); ?>
        <p><strong>DMAIC</strong> (an abbreviation for <strong>Define, Measure, Analyze, Improve and Control</strong>) refers to a data driven improvement cycle used for improving, optimizing and stabilizing business processes and designs. The DMAIC improvement cycle is the core tool used to drive <?php echo $this->stencil->addLink('Six Sigma', 'PM'); ?> projects. However, DMAIC is not exclusive to Six Sigma and can be used as the framework for other improvement applications.</p>

        <h2>DMAIC Steps</h2>
        <p>DMAIC is an abbreviation of the five improvement steps it comprises: Define, Measure, Analyze, Improve and Control. All of the DMAIC process steps are required and always proceed in the given order.</p>

        <h3>Define</h3>
        <p>The purpose of this step is to clearly articulate the business problem, goal, potential resources, project scope and high level project timeline. This information is typically captured within project charter document. Write down what you currently know. Seek to clarify facts, set objectives and form the project team. Define the following:</p>
        <ul>
            <li>A problem</li>
            <li>The customer(s)</li>
            <li><strong><?php echo $this->stencil->addLink('Voice of the customer', 'PM'); ?> (VOC)</strong> and <strong><?php echo $this->stencil->addLink('Critical to Quality', 'PM'); ?> (CTQs)</strong> - what are the critical process outputs?</li>
            <li>The target process subject to DMAIC and other related business processes</li>
            <li>Project targets or goal</li>
            <li>Project boundaries or scope</li>
            <li>A project charter is often created and agreed upon during the Define step.</li>
        </ul>

        <h3>Measure</h3>
        <p>The purpose of this step is to objectively establish current baselines as the basis for improvement. This is a data collection step, the purpose of which is to establish process performance baselines. The performance metric baseline(s) from the Measure phase will be compared to the performance metric at the conclusion of the project to determine objectively whether significant improvement has been made. The team decides on what should be measured and how to measure it. It is usual for teams to invest a lot of effort into assessing the suitability of the proposed measurement systems. Good data is at the heart of the DMAIC process:</p>
        <ul>
            <li>Identify the gap between current and required performance.</li>
            <li>Collect data to create a process performance capability baseline for the project metric, that is, the process Y(s) (there may be more than one output).</li>
            <li>Assess the measurement system (for example, a gauge study) for adequate accuracy and precision.</li>
            <li>Establish a high level process flow baseline. Additional detail can be filled in later.</li>
        </ul>

        <h3>Analyze</h3>
        <p>The purpose of this step is to identify, validate and select root cause for elimination. A large number of potential root causes (process inputs, X) of the project problem are identified via root cause analysis (for example a <?php echo $this->stencil->addLink('fishbone diagram', 'PM'); ?>). The top 3-4 potential root causes are selected using multi voting or other consensus tool for further validation. A data collection plan is created and data are collected to establish the relative contribution of each root causes to the project metric, Y. This process is repeated until "valid" root causes can be identified. Within Six Sigma, often complex analysis tools are used. However, it is acceptable to use basic tools if these are appropriate. Of the "validated" root causes, all or some can be:</p>
        <ul>
            <li>List and prioritize potential causes of the problem</li>
            <li>Prioritize the root causes (key process inputs) to pursue in the Improve step</li>
            <li>Identify how the process inputs (Xs) affect the process outputs (Ys). Data is analyzed to understand the magnitude of contribution of each root cause, X, to the project metric, Y. Statistical tests using p-values accompanied by Histograms, Pareto charts, and line plots are often used to do this.</li>
            <li>Detailed process maps can be created to help pin-point where in the process the root causes reside, and what might be contributing to the occurrence.</li>
        </ul>

        <h3>Improve</h3>
        <p>The purpose of this step is to identify, test and implement a solution to the problem; in part or in whole. This depends on the situation. Identify creative solutions to eliminate the key root causes in order to fix and prevent process problems. Use brainstorming or techniques like <strong><?php echo $this->stencil->addLink('Six Thinking Hats', 'PM'); ?></strong> and <strong><?php echo $this->stencil->addLink('Random Words', 'PM'); ?></strong>. Some projects can utilize complex analysis tools like <strong>DOE (<?php echo $this->stencil->addLink('Design of Experiments', 'PM'); ?>)</strong>, but try to focus on obvious solutions if these are apparent. However, the purpose of this step can also be to find solutions without implementing them.</p>
        <ul>
            <li>Create</li>
            <li>Focus on the simplest and easiest solutions</li>
            <li>Test solutions using <strong><?php echo $this->stencil->addLink('Plan-Do-Check-Act', 'PM'); ?> (PDCA)</strong> cycle</li>
            <li>Based on PDCA results, attempt to anticipate any avoidable risks associated with the "improvement" using <strong><?php echo $this->stencil->addLink('FMEA', 'PM'); ?></strong></li>
            <li>Create a detailed implementation plan</li>
            <li>Deploy improvements</li>
        </ul>

        <h3>Control</h3>
        <p>The purpose of this step is to sustain the gains. Monitor the improvements to ensure continued and sustainable success. Create a control plan. Update documents, business process and training records as required.</p>
        <p>A <?php echo $this->stencil->addLink('Control chart', 'PM'); ?> can be useful during the Control stage to assess the stability of the improvements over time by serving as 1. a guide to continue monitoring the process and 2. provide a response plan for each of the measures being monitored in case the process becomes unstable.</p>

        <h3>Replicate and thank the teams</h3>
        <p>This is additional to the standard DMAIC steps but it should be considered. Think about replicating the changes in other processes. Share your new knowledge within and outside of your organization. It is very important to always provide positive morale support to team members in an effort to maximize the effectiveness of DMAIC.</p>
        <p>Replicating the improvements, sharing your success and thanking your team members helps build buy in for future DMAIC or improvement initiatives.</p>

        <h2>Additional Steps</h2>
        <p>Some organizations add a <strong>R</strong>ecognize step at the beginning, which is to recognize the right problem to work on, thus yielding an <strong>RDMAIC</strong> methodology.</p>

    </div>
</div>