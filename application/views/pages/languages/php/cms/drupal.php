<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Drupal'); ?>
        <p><strong>Drupal</strong> is a free and open-source content-management framework written in <?php echo $this->stencil->addLink('PHP', 'L'); ?> and distributed under the GNU General Public License.</p>
        <p>It is used as a back-end framework for at least 2.1% of all Web sites worldwide ranging from personal blogs to corporate, political, and government sites including <?php echo $this->stencil->addExternalLink('WhiteHouse.gov', 'http://www.whitehouse.gov/'); ?> and <?php echo $this->stencil->addExternalLink('data.gov.uk', 'http://data.gov.uk'); ?>. It is also used for knowledge management and business collaboration.</p>
        <p>The standard release of Drupal, known as Drupal core, contains basic features common to content management systems. These include user account registration and maintenance, menu management, RSS feeds, taxonomy, page layout customization, and system administration. The Drupal core installation can serve as a simple Web site, a single or multi-user blog, an Internet forum, or a community Web site providing for user generated content.</p>
        <p>As of October 2014, there are more than 30,000 free community-contributed add-ons, known as contributed modules, available to alter and extend Drupal's core capabilities and add new features or customize Drupal's behaviour and appearance. The Drupal community has more than 1 million members (as of October 2013) and 31,000 Developers (as of February 2014). Because of this plug-in extensibility and modular design, "The Drupal Overview" on Drupal's Web site describes it as a content management framework. Drupal is also described as a Web application framework, as it meets the generally accepted feature requirements for such frameworks.</p>
        <p>Although Drupal offers a sophisticated programming interface for developers, basic Web site installation and administration of the framework requires no programming skills.</p>
        <p>Drupal runs on any computing platform that supports both a Web server capable of running PHP (including <?php echo $this->stencil->addLink('Apache', 'WS'); ?>, <?php echo $this->stencil->addLink('IIS', 'WS'); ?>, <?php echo $this->stencil->addLink('Lighttpd', 'WS'); ?>, <?php echo $this->stencil->addLink('Hiawatha', 'WS'); ?>, <?php echo $this->stencil->addLink('Cherokee', 'WS'); ?> or <?php echo $this->stencil->addLink('Nginx', 'WS'); ?>) and a database (such as <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>, <?php echo $this->stencil->addLink('MongoDB', 'DB'); ?>, <?php echo $this->stencil->addLink('MariaDB', 'DB'); ?>, <?php echo $this->stencil->addLink('PostgreSQL', 'DB'); ?>, <?php echo $this->stencil->addLink('SQLite', 'DB'); ?>, or <?php echo $this->stencil->addLink('MS SQLServer', 'DB'); ?>) to store content and settings.</p>
        <p>Originally written by Dries Buytaert as a message board, Drupal became an open source project in 2001. The name Drupal represents an English rendering of the Dutch word "<em>druppel</em>", which means "<em>drop</em>" (as in "<em>a water droplet</em>"). The name came from the now-defunct Drop.org Web site, whose code slowly evolved into Drupal. Buytaert wanted to call the site "<em>dorp</em>" (Dutch for "<em>village</em>") for its community aspects, but mistyped it when checking the domain name and thought the error sounded better.</p>
        <p>Interest in Drupal got a significant boost in 2003 when it helped build "<strong>DeanSpace</strong>" for <strong>Howard Dean</strong>, one of the candidates in the U.S. Democratic Party's primary campaign for the 2004 U.S. presidential election. DeanSpace used open-source sharing of Drupal to support a decentralized network of approximately 50 disparate, unofficial pro-Dean websites that allowed users to communicate directly with one another as well as with the campaign. After Dean ended his campaign, members of his Web team continued to pursue their interest in developing a Web platform that could aid political activism by launching <strong>CivicSpace Labs</strong> in July 2004, "<em>the first company with full-time employees that was developing and distributing Drupal technology</em>". Other companies began to also specialize in Drupal development. By 2013 the Drupal Web site listed hundreds of vendors that offered Drupal related services.</p>
        <p>As of 2014 Drupal is developed by a community, and its popularity is growing rapidly. From July 2007 to June 2008 the <?php echo $this->stencil->addExternalLink('Drupal.org', 'http://drupal.org/'); ?> site provided more than 1.4 million downloads of Drupal software, an increase of approximately 125% from the previous year.</p>
        <p>As of February 2014 more than 1,015,000 sites used Drupal. These include hundreds of well-known organizations, including corporations, media and publishing companies, governments, non-profits, schools, and individuals. Drupal has won several Packt Open Source CMS Awards and won the Webware 100 three times in a row.</p>
        <p>On 5 March 2009 Buytaert announced a code freeze for Drupal 7 for 1 September 2009. Drupal 7 was released on 5 January 2011, with release parties in several countries. After that, maintenance on Drupal 5 stopped, with only Drupal 7 and Drupal 6 maintained. Drupal 7 series maintenance updates are released regularly.</p>
        <br />
        <p><strong>Official Drupal website:</strong> <?php echo $this->stencil->addExternalLink('Drupal.org', 'http://drupal.org/'); ?></p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Version Number</th><th>Release Date</th></tr>
                <tr><td>1.0</td><td>15 Jan 2001</td></tr>
                <tr><td>2.0</td><td>15 Mar 2001</td></tr>
                <tr><td>3.0</td><td>15 Sep 2001</td></tr>
                <tr><td>4.0</td><td>16 Jun 2002</td></tr>
                <tr><td>4.5</td><td>16 Oct 2004</td></tr>
                <tr><td>4.6</td><td>16 Apr 2005</td></tr>
                <tr><td>4.7</td><td>16 May 2006</td></tr>
                <tr><td>5.0</td><td>15 Jan 2007</td></tr>
                <tr><td>6.0</td><td>13 Feb 2008</td></tr>
                <tr><td>7.0</td><td>5 Jan 2011</td></tr>
                <tr><td>7.34</td><td>19 Nov 2014</td></tr>
                <tr><td>8.0 beta 2</td><td>15 Oct 2014</td></tr>
                <tr><td>8.0 beta 3</td><td>12 Nov 2014</td></tr>
                <tr><td>8.0</td><td>Being Developed</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>