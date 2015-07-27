<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Accessibility'); ?>
        <p><strong>Web accessibility</strong> refers to the inclusive practice of removing barriers that prevent access to websites by people with disabilities.</p>
        <p>When sites are correctly designed, developed and edited, all users have equal access to information and functionality.</p>
        <p>For example, when a site is coded with semantically meaningful <?php echo $this->stencil->addLink('HTML', 'WD'); ?>, with textual equivalents provided for images and with links named meaningfully, this helps blind users using text-to-speech software and / or text-to-Braille hardware.</p>
        <p>When text and images are large and / or enlargeable, it is easier for users with poor sight to read and understand the content.</p>
        <p>When links are underlined (or otherwise differentiated) as well as coloured, this ensures that colour blind users will be able to notice them. When click-able links and areas are large, this helps users who cannot control a mouse with precision.</p>
        <p>When pages are coded so that users can navigate by means of the keyboard alone, or a single switch access device alone, this helps users who cannot use a mouse or even a standard keyboard.</p>
        <p>When videos are closed captioned or a sign language version is available, deaf and hard-of-hearing users can understand the video.</p>
        <p>When flashing effects are avoided or made optional, users prone to seizures caused by these effects are not put at risk.</p>
        <p>When content is written in plain language and illustrated with instructional diagrams and animations, users with dyslexia and learning difficulties are better able to understand the content.</p>
        <p>When sites are correctly built and maintained, all of these users can be accommodated without decreasing the usability of the site for non-disabled users.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>The needs that Web accessibility aims to address include:</p>
            <ul>
                <li><strong>Visual:</strong> Visual impairments including blindness, various common types of low vision and poor eyesight, various types of colour blindness.</li>
                <li><strong>Motor / Mobility:</strong> e.g. difficulty or inability to use the hands, including tremors, muscle slowness, loss of fine muscle control, etc., due to conditions such as Parkinson's Disease, muscular dystrophy, cerebral palsy, stroke.</li>
                <li><strong>Auditory:</strong> Deafness or hearing impairments, including individuals who are hard of hearing.</li>
                <li><strong>Seizures:</strong> Photoepileptic seizures caused by visual strobe or flashing effects.</li>
                <li><strong>Cognitive/Intellectual:</strong> Developmental disabilities, learning disabilities (dyslexia, dyscalculia, etc.), and cognitive disabilities of various origins, affecting memory, attention, developmental "maturity," problem-solving and logic skills, etc.</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Web Content Accessibility Guidelines (WCAG)</h2>
            <p><strong>Web Content Accessibility Guidelines (WCAG)</strong> are part of a series of web accessibility guidelines published by the <strong>Web Accessibility Initiative (<?php echo $this->stencil->addLink('WAI', 'C'); ?>)</strong> of the <strong>World Wide Web Consortium's (<?php echo $this->stencil->addLink('W3C', 'C'); ?>)</strong>, the main international standards organization for the <?php echo $this->stencil->addLink('World Wide Web', 'WD'); ?>.</p>
            <p>They consist of a set of guidelines for making content accessible, primarily for people with disabilities, but also for all user agents, including highly limited devices, such as mobile phones.</p>
            <p>The current version, WCAG 2.0, was published in December 2008 and is also an ISO standard, ISO/IEC 40500:2012.</p>
            <p><strong>WCAG 2.0:</strong> <?php echo $this->stencil->addExternalLink('www.w3.org/TR/WCAG20', 'http://www.w3.org/TR/WCAG20/'); ?></p>
        </div>
    </div>
<?php endif; ?>