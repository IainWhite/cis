<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Y2k - The Millennium Bug'); ?>
        <p><strong>The Year 2000 problem</strong> (also known as the <strong>Y2K problem</strong>, the <strong>Millennium bug</strong>, the <strong>Y2K bug</strong>, or simply <strong>Y2K</strong>) was a problem for both digital (computer related) and non-digital documentation and data storage situations which resulted from the practice of abbreviating a four digit year to two digits.</p>
        <p>In 1997, The <strong>British Standards Institute (BSI<?php echo $this->stencil->addLink('BSI', 'C'); ?>)</strong> developed a standard, <strong>DISC PD2000-1</strong>, which defines "Year 2000 Conformity requirements" as four rules:</p>
        <ol>
            <li>No valid date will cause any interruption in operations.</li>
            <li>Calculation of durations between, or the sequence of, pairs of dates will be correct whether any dates are in different centuries.</li>
            <li>In all interfaces and in all storage, the century must be unambiguous, either specified, or calculable by algorithm.</li>
            <li>Year 2000 must be recognized as a leap year.</li>
        </ol>
        <p>It identifies two problems that may exist in many computer programs.</p>
        <p>Firstly, the practice of representing the year with two digits becomes problematic with logical error(s) arising upon "rollover" from x99 to x00.</p>
        <p>This has caused some date-related processing to operate incorrectly for dates and times on and after 1 January 2000, and on other critical dates which were billed "event horizons".</p>
        <p>Without corrective action, long-working systems would break down when the "... 97, 98, 99, 00 ..." ascending numbering assumption suddenly became invalid.</p>
        <p>Secondly, some programmers had misunderstood the rule that determines whether years that are exactly divisible by 100 are leap years, and assumed the year 2000 would not be a leap year.</p>
        <p>Although most years divisible by 100 are not leap years, if they are divisible by 400 then they are. Thus the year 2000 was a leap year.</p>
        <p>Companies and organizations worldwide checked, fixed, and upgraded their computer systems.</p>
    </div>
</div>