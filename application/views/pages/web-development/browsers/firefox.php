<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Firefox'); ?>
        <p><strong>Mozilla Firefox</strong> (known simply as <strong>Firefox</strong>) is a free and open-source <?php echo $this->stencil->addLink('Web browser', 'WD'); ?> developed for <?php echo $this->stencil->addLink('Windows', 'OS'); ?>, <?php echo $this->stencil->addLink('OS X', 'OS'); ?>, and <?php echo $this->stencil->addLink('Linux', 'OS'); ?>, with a mobile version for <?php echo $this->stencil->addLink('Android', 'OS'); ?>, by the <?php echo $this->stencil->addLink('Mozzilla Foundation', 'C'); ?> and its subsidiary, the <strong>Mozilla Corporation</strong>.</p>
        <p>Firefox uses the <?php echo $this->stencil->addLink('Gecko', 'web-development/layout-engines'); ?> <?php echo $this->stencil->addLink('layout engine', 'WD'); ?> to render web pages, which implements current and anticipated web standards.</p>
        <p>The Firefox project began as an experimental branch of the <?php echo $this->stencil->addLink('Mozilla', 'WB'); ?> project by Dave Hyatt, Joe Hewitt and Blake Ross.</p>
        <p>They believed the commercial requirements of Netscape's sponsorship and developer-driven feature creep compromised the utility of the Mozilla browser.</p>
        <p>To combat what they saw as the Mozilla Suite's software bloat, they created a stand-alone browser, with which they intended to replace the Mozilla Suite.</p>
        <p>On 3 April 2003, the Mozilla Organization announced that they planned to change their focus from the Mozilla Suite to Firefox and <?php echo $this->stencil->addLink('Thunderbird', 'ITS'); ?>.</p>
        <p>The Firefox project has undergone several name changes.</p>
        <p>Originally titled <strong>Phoenix</strong>, it was renamed because of trademark problems with Phoenix Technologies.</p>
        <p>The replacement name, <strong>Firebird</strong>, provoked an intense response from the Firebird database software project.</p>
        <p>In response, the Mozilla Foundation stated that the browser should always bear the name <strong>Mozilla Firebird</strong> to avoid confusion.</p>
        <p>After further pressure, on 9 February 2004, Mozilla Firebird became <strong>Mozilla Firefox</strong>, often referred to as <strong>Firefox</strong>.</p>
        <p>Mozilla prefers the Firefox abbreviation <strong>Fx</strong> or <strong>fx</strong>, though it is often abbreviated as <strong>FF</strong>.</p>
        <p>The Firefox project went through many versions before they released version 1.0 on 9 November 2004.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Naming</h2>
            <p>The project which became Firefox started as an experimental branch of the Mozilla Suite called <strong>m/b</strong> (or <strong>mozilla/browser</strong>).</p>
            <p>After it had been sufficiently developed, binaries for public testing appeared in September 2002 under the name <strong>Phoenix</strong>.</p>
            <p>The Phoenix name was kept until 14 April 2003, when it was changed because of a trademark dispute with the BIOS manufacturer, <strong>Phoenix Technologies</strong> (which produces a BIOS based browser called Phoenix FirstWare Connect).</p>
            <p>The new name, <strong>Firebird</strong>, met with mixed reactions, particularly as the <strong>Firebird database server</strong> already carried the name.</p>
            <p>In response, the Mozilla Foundation stated that the browser should always bear the name <strong>Mozilla Firebird</strong> to avoid confusion with the database software.</p>
            <p>Continuing pressure from the Firebird community forced another change, and on 9 February 2004 the project was renamed <strong>Mozilla Firefox</strong> (or <strong>Firefox</strong> for short).</p>
            <p>The name "Firefox" (a reference to the red panda) was chosen for its similarity to "Firebird", but also for its uniqueness in the computing industry.</p>
            <p>To ensure that no further name changes would be necessary, the Mozilla Foundation began the process of registering Firefox as a trademark with the United States Patent and Trademark Office in December 2003.</p>
            <p>This trademark process led to a delay of several months in the release of Firefox 0.8 when the foundation discovered that Firefox had already been registered as a trademark in the UK for <strong>Charlton Company</strong> software.</p>
            <p>The situation was resolved when the foundation was given a license to use Charlton's European trademark.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Early Versions</h2>
            <p>Hyatt, Ross, Hewitt and Chanial developed their browser to combat the software bloat of the Mozilla Suite (codenamed, internally referred to, and continued by the community as <?php echo $this->stencil->addLink('SeaMonkey', 'WB'); ?>), which integrated features such as IRC, mail and news, and WYSIWYG HTML editing into one software suite.</p>
            <p>Firefox retains the cross-platform nature of the original Mozilla browser, using the <?php echo $this->stencil->addLink('XUL', 'WD'); ?> user interface mark-up language.</p>
            <p>The use of XUL makes it possible to extend the browser's capabilities through the use of extensions and themes.</p>
            <p>The development and installation processes of these add-ons raised security concerns, and with the release of Firefox 0.9, the Mozilla Foundation opened a Mozilla Update website containing "approved" themes and extensions.</p>
            <p>The use of XUL sets Firefox apart from other browsers, including other projects based on Mozilla's Gecko layout engine and most other browsers, which use interfaces native to their respective platforms (Galeon and Epiphany use GTK+; K-Meleon uses MFC; and Camino uses Cocoa).</p>
            <p>Many of these projects started before Firefox, and probably served as inspiration.</p>
            <p>On 5 February 2004 AMS, a business and IT consulting company, categorized Mozilla Firefox (then known as Firebird) as a "Tier 1" ("Best of Breed") open-source product, considering it technically strong and virtually risk free.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Rapid Release</h2>
            <p>In April 2011, the development process was split into several "channels", each working on a build in a different stage of development.</p>
            <p>The most recent available build is called "Nightly Builds" and offers the latest, untested features and updates.</p>
            <p>The "Aurora" build is up to six weeks behind "Nightly" and offers functionality that has undergone basic testing.</p>
            <p>The "Beta" channel is another six weeks away.</p>
            <p>It provides improved stability over the nightly builds and is the first development milestone that has the "Firefox" logo.</p>
            <p>"Release" is the current official version of Firefox.</p>
            <p>New releases are planned to occur at six week intervals.</p>
            <p>The stated aim of this faster-paced process is to get new features to users faster.</p>
            <p>This accelerated release cycle was met with criticism by users, as it often broke addon compatibility, as well as those who believe Firefox was simply trying to increase its version number to compare with other browsers such as <?php echo $this->stencil->addLink('Google Chrome', 'WB'); ?>.</p>
        </div>
    </div>

<?php endif; ?>