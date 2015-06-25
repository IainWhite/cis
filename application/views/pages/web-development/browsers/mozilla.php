<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Mozilla Application Suite'); ?>
        <p>The <strong>The Mozilla Application Suite</strong> (originally known as <strong>Mozilla</strong>, marketed as the <strong>Mozilla Suite</strong>) was a cross-platform integrated Internet suite.</p>
        <p>Its development was initiated by <?php echo $this->stencil->addLink('Netscape Communications Corporation', 'C'); ?>, before their acquisition by <?php echo $this->stencil->addLink('AOL', 'C'); ?>.</p>
        <p>It was based on the source code of <?php echo $this->stencil->addLink('Netscape Communicator', 'WB'); ?>.</p>
        <p>The development was spearheaded by the <strong>Mozilla Organization</strong> from 1998 to 2003, and by the <?php echo $this->stencil->addLink('Mozilla Foundation', 'C'); ?> from 2003 to 2006.</p>
        <p>It has been superseded by <strong><?php echo $this->stencil->addLink('SeaMonkey', 'WB'); ?> Internet suite</strong> (<em>SeaMonkey</em> was the original code name for the project), a community-driven Internet suite that is based on the same source code and continued to be developed with newer Mozilla codebase.</p>
        <p>The Mozilla Suite was composed of several main programs: <strong>Navigator</strong> (a Web browser), <strong>Communicator</strong> (Mozilla Mail & Newsgroups), a Web page developer (<strong>Mozilla Composer</strong>), an IRC client (ChatZilla) and an electronic address book.</p>
        <p>Also included were tools to synchronise the application with <strong>Palm Pilot</strong> devices, and several extensions for advanced Web development including the <strong><?php echo $this->stencil->addLink('DOM', 'WB'); ?> Inspector</strong> and <?php echo $this->stencil->addLink('Venkman', 'WD'); ?> (a <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> debugger).</p>
        <p>Versions 6 and 7 of the Netscape suite were based on the Mozilla Suite.</p>
        <p>The last official version is 1.7.13, as Mozilla Foundation is now focusing on the development of <?php echo $this->stencil->addLink('Firefox', 'WB'); ?> and <?php echo $this->stencil->addLink('Thunderbird', 'WD'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>In March 1998, Netscape released most of the code base for its popular Netscape Communicator suite under an open source license.</p>
            <p>The name of the application developed from this would be Mozilla, coordinated by the newly created Mozilla Organization, at the mozilla.org Web site.</p>
            <p>Although large parts of the original Communicator code, including the layout engine and front-end related codes, were abandoned shortly thereafter, the Mozilla Organization eventually succeeded in producing a full-featured Internet suite that surpassed Communicator in features, stability and degree of standards compliance.</p>
            <p>Under the AOL banner, Mozilla Organization continued development of the browser and management of the Mozilla source until July 2003 when this task was passed to the Mozilla Foundation.</p>
            <p>The Foundation is a non-profit organization composed primarily of developers and staff from mozilla.org and owns the Mozilla trademark (but not the copyright to the source code, which is retained by the individual and corporate contributors, but licensed under the terms of the GPL and MPL).</p>
            <p>It received initial donations from AOL, IBM, Sun Microsystems, Red Hat, and Mitch Kapor.</p>
            <p>However, all official ties with AOL were severed following the announcement of the end of the Netscape Navigator browser and AOL's agreement to use Microsoft's Internet Explorer browser in future versions of its AOL software.</p>
            <p>On 10 March 2005, the Mozilla Foundation announced that they would not release any further official versions of the suite beyond 1.7.x.</p>
            <p>However, the Mozilla Foundation emphasized that they would provide infrastructure for community members who wished to continue development.</p>
            <p>In effect, this means that the suite will still continue to be developed, but not by the Mozilla Foundation itself.</p>
            <p>To avoid confusing organizations that still want to use the Mozilla Suite, it was announced that the new, community-developed product would be named "<em>SeaMonkey</em>", with version numbers that start at "1.0".</p>
        </div>
    </div>
<?php endif; ?>