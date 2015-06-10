<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MoSCoW Method'); ?>
        <p><strong>MoSCoW</strong> is a technique used in business analysis and software development to reach a common understanding with stakeholders on the importance they place on the delivery of each requirement. It is also known as <strong>MoSCoW prioritisation</strong> or <strong>MoSCoW analysis</strong>.</p>
        <p>According to <em>A Guide to the Business Analysis Body of Knowledge</em>, version 2.0, section 6.1.5.2, the MoSCoW categories are as follows:</p>
        <ul>
            <li><strong>M</strong> - MUST: Describes a requirement that must be satisfied in the final solution for the solution to be considered a success.</li>
            <li><strong>S</strong> - SHOULD: Represents a high-priority item that should be included in the solution if it is possible. This is often a critical requirement but one which can be satisfied in other ways if strictly necessary.</li>
            <li><strong>C</strong> - COULD: Describes a requirement which is considered desirable but not necessary. This will be included if time and resources permit.</li>
            <li><strong>W</strong> - WONT: Represents a requirement that stakeholders have agreed will not be implemented in a given release, but may be considered for the future. (note: occasionally the word "Would" is substituted for "Won't" to give a clearer understanding of this choice)</li>
        </ul>
        <p>The <em>o</em>'s in MoSCoW are added simply to make the word pronounceable, and are often left lower case to indicate that they don't stand for anything.</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>This use of MoSCoW was first developed by Dai Clegg of Oracle UK Consulting; in <em>CASE Method Fast-Track: A RAD Approach</em> although he subsequently donated the intellectual property rights to the <strong>Dynamic Systems Development Method</strong> (<strong>DSDM</strong>) Consortium.
        <p>MoSCoW is often used with timeboxing, where a deadline is fixed so that the focus can be on the most important requirements, and as such is seen as a core aspect of rapid application development (RAD) software development processes, such as Dynamic Systems Development Method (DSDM) and agile software development techniques.</p>

        <h2>Prioritisation of MoSCoW requirements</h2>
        <p>All requirements are important, but they are prioritised to deliver the greatest and most immediate business benefits early. Developers will initially try to deliver all the <strong>M</strong>, <strong>S</strong> and <strong>C</strong> requirements but the <strong>S</strong> and <strong>C</strong> requirements will be the first to go if the delivery timescale looks threatened.</p>
        <p>The plain English meaning of the MoSCoW words has value in getting customers to understand what they are doing during prioritisation in a way that other ways of attaching priority, like high, medium and low, do not.</p>
        <dl>
            <dt>Must have</dt>
            <dd>requirements labeled as <strong>MUST</strong> are critical to project success and have to be included in the current delivery timebox in order for it to be a success. If even one <strong>MUST</strong> requirement is not included, the project delivery should be considered a failure (note: requirements can be downgraded from <strong>MUST</strong>, by agreement with all relevant stakeholders; for example, when new requirements are deemed more important). <strong>MUST</strong> can also be considered a backronym for the <strong>M</strong>inimum <strong>U</strong>sable <strong>S</strong>ubse<b>T</b>.</dd>
        </dl>
        <dl>
            <dt>Should have</dt>
            <dd><strong>SHOULD</strong> requirements are important to project success, but are not necessary for delivery in the current delivery timebox. <strong>SHOULD</strong> requirements are as important as <strong>MUST</strong>, although <strong>SHOULD</strong> requirements are often not as time-critical or have workarounds, allowing another way of satisfying the requirement, so can be held back until a future delivery timebox.</dd>
        </dl>
        <dl>
            <dt>Could have</dt>
            <dd>requirements labeled as <strong>COULD</strong> are less critical and often seen as <strong>nice to have</strong>. A few easily satisfied <strong>COULD</strong> requirements in a delivery can increase customer satisfaction for little development cost.</dd>
        </dl>
        <dl>
            <dt>Won't have</dt>
            <dd>These requirements are either the least-critical, lowest-payback items, or not appropriate at that time. As a result, <strong>WON'T</strong> requirements are not planned into the schedule for the delivery timebox. <strong>WON'T</strong> requirements are either dropped or reconsidered for inclusion in later timeboxes. This, however doesn't make them any less important.</dd>
        </dl>
    </div>
</div>