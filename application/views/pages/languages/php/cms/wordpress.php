<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('WordPress'); ?>
        <p><strong>WordPress</strong> is a free and open source blogging tool and a content management system (<?php echo $this->stencil->addLink('CMS', 'SD'); ?>) based on <?php echo $this->stencil->addLink('PHP', 'L'); ?> and <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>.</p>
        <p>Features include a plugin architecture and a template system. WordPress was used by more than 23.2% of the top 10 million websites as of August 2013. WordPress is the most popular blogging system in use on the Web, at more than 60 million websites.</p>
        <p>It was first released on 27 May 2003, by its founders, <strong>Matt Mullenweg</strong> and <strong>Mike Little</strong>, as a fork of <strong>b2/cafelog</strong>.</p>
        <p>b2/cafelog, more commonly known as simply b2 or cafelog, was the precursor to WordPress. b2/cafelog was estimated to have been installed on approximately 2,000 blogs as of May 2003. It was written in PHP for use with MySQL by <strong>Michel Valdrighi</strong>, who is now a contributing developer to WordPress. Although WordPress is the official successor, another project, b2evolution, is also in active development.</p>
        <p>WordPress first appeared in 2003 as a joint effort between Matt Mullenweg and Mike Little to create a fork of b2. Christine Selleck Tremoulet, a friend of Mullenweg, suggested the name WordPress.</p>
        <br />
        <p><strong>Official WordPress website:</strong> <?php echo $this->stencil->addExternalLink('WordPress.org', 'http://wordpress.org/'); ?></p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>WordPress Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Version</th><th>Code name</th><th>Release date</th><th>Notes</th></tr>
                <tr><td>0.7</td><td>none</td><td>27 May 2003</td><td>Used the same file structure as its predecessor, b2/cafelog, and continued the numbering from its last release, 0.6. Only 0.71-gold is available for download in the official WordPress Release Archive page.</td></tr>
                <tr><td>1.0</td><td>Davis</td><td>3 January 2004</td><td>Added search engine friendly permalinks, multiple categories, dead simple installation and upgrade, comment moderation, XFN support, Atom support.</td></tr>
                <tr><td>1.2</td><td>Mingus</td><td>22 May 2004</td><td>Added support of Plugins; which same identification headers are used unchanged in WordPress releases as of 2011.</td></tr>
                <tr><td>1.5</td><td>Strayhorn</td><td>17 February 2005</td><td>Added a range of vital features, such as ability to manage static pages and a template / theme system. It was also equipped with a new default template (code named Kubrick) designed by Michael Heilemann.</td></tr>
                <tr><td>2.0</td><td>Duke</td><td>31 December 2005</td><td>Added rich editing, better administration tools, image uploading, faster posting, improved import system, fully overhauled the back end, and various improvements to Plugin developers.</td></tr>
                <tr><td>2.1</td><td>Ella</td><td>22 January 2007</td><td>Corrected security issues, redesigned interface, enhanced editing tools (including integrated spell check and auto save), and improved content management options.</td></tr>
                <tr><td>2.2</td><td>Getz</td><td>16 May 2007</td><td>Added widget support for templates, updated Atom feed support, and speed optimizations.</td></tr>
                <tr><td>2.3</td><td>Dexter</td><td>24 September 2007</td><td>Added native tagging support, new taxonomy system for categories, and easy notification of updates, fully supports Atom 1.0, with the publishing protocol, and some much needed security fixes.</td></tr>
                <tr><td>2.5</td><td>Brecker</td><td>29 March 2008</td><td>Version 2.4 was skipped, so version 2.5 added two releases worth of new code. The administration interface was fully redesigned, and the WordPress website to match the new style.</td></tr>
                <tr><td>2.6</td><td>Tyner</td><td>15 July 2008</td><td>Added new features that made WordPress a more powerful CMS: it can now track changes to every post and page and allow easy posting from anywhere on the web.</td></tr>
                <tr><td>2.7</td><td>Coltrane</td><td>11 December 2008</td><td>Administration interface redesigned fully, added automatic upgrades and installing Plugins, from within the administration interface.</td></tr>
                <tr><td>2.8</td><td>Baker</td><td>10 June 2009</td><td>Added improvements in speed, automatic installing of Themes from within administration interface, introduces the CodePress editor for syntax highlighting and a redesigned widget interface.</td></tr>
                <tr><td>2.9</td><td>Carmen</td><td>19 December 2009</td><td>Added global undo, built-in image editor, batch Plugin updating, and many less visible tweaks.</td></tr>
                <tr><td>3.0</td><td>Thelonious</td><td>17 June 2010</td><td>Added a new Theme application programming interfaces (API); the merge of WordPress and WordPress MU, creating the new multi-site functionality, a new default Theme called "Twenty Ten" and a refreshed, lighter admin UI.</td></tr>
                <tr><td>3.1</td><td>Reinhardt</td><td>23 February 2011</td><td>Added the Admin Bar, which is displayed on all blog pages when an admin is logged in, and Post Format, best explained as a Tumblr like micro-blogging feature. It provides easy access to many critical functions, such as comments and updates. Includes internal linking abilities, a newly streamlined writing interface, and many other changes.</td></tr>
                <tr><td>3.2</td><td>Gershwin</td><td>4 July 2011</td><td>Focused on making WordPress faster and lighter. Released only four months after version 3.1, reflecting the growing speed of development in the WordPress community.</td></tr>
                <tr><td>3.3</td><td>Sonny</td><td>12 December 2011</td><td>Focused on making WordPress friendlier for beginners and tablet computer users.</td></tr>
                <tr><td>3.4</td><td>Green</td><td>13 June 2012</td><td>Focused on improvements to Theme customization, Twitter integration and several minor changes.</td></tr>
                <tr><td>3.5</td><td>Elvin</td><td>11 December 2012</td><td>Support for the Retina Display, color picker, new Theme: Twenty Twelve, improved image workflow.</td></tr>
                <tr><td>3.6</td><td>Oscar</td><td>1 August 2013</td><td>New Theme: Twenty Thirteen ; Admin Enhancements - Post Formats UI Update, Menus UI improvements, Revisions Update, Autosave and Post Locking</td></tr>
                <tr><td>v3.7</td><td>Basie</td><td>24 October 2013</td><td>Automatically apply maintenance and security updates in the background; Stronger password recommendations; Support for automatically installing the right language files and keeping them up to date</td></tr>
                <tr><td>3.8</td><td>Parker</td><td>12 December 2013</td><td>Improved admin interface; Responsive design for mobile devices; New typography using Open Sans; Admin colour schemes; Redesigned Theme management interface; Simplified main dashboard; Twenty Fourteen magazine style default Theme; Second release using "Plugin-first development process"</td></tr>
                <tr><td>3.9</td><td>Smith</td><td>16 April 2014 </td><td>"New features like live widget previews and the new Theme installer are now more ready for prime time, so check 'em out. UI refinements when editing images and when working with media in the editor. We've also brought back some of the advanced display settings for images."</td></tr>
                <tr><td>4.0</td><td>Benny</td><td>4 September 2014</td><td>Improved media management, embeds, writing interface, and plugin discovery.</td></tr>
                <tr><td>4.1</td><td>Dinah</td><td>18 December 2014</td><td>"We've made a lot of refinements over the last few weeks. RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.1 on Tuesday, 16 December, but we need your help to get there. If you haven’t tested 4.1 yet, now is the time! (Please though, not on your live site unless you’re adventurous."</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>