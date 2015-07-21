<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('the World Wide Web)'); ?>
        <p>The <strong>World Wide Web</strong> (abbreviated as <strong>WWW</strong> commonly known as the <strong>web</strong>) is a system of interlinked hypertext documents accessed via the <?php echo $this->stencil->addLink('Internet', 'ITN'); ?>.</p>
        <p>With a <?php echo $this->stencil->addLink('Web Browser', 'WD'); ?>, one can view web pages that may contain text, images, videos, and other multimedia and navigate between them via hyperlinks.</p>
        <p>On 12 March 1989, <?php echo $this->stencil->addLink('Tim Berners-Lee', 'P'); ?>, a British computer scientist and former <?php echo $this->stencil->addLink('CERN', 'C'); ?> employee, wrote a proposal for what would eventually become the World Wide Web.</p>
        <p>The 1989 proposal was meant for a more effective CERN communication system but Berners-Lee eventually realised the concept could be implemented throughout the world.</p>
        <p>Berners-Lee and Belgian computer scientist <?php echo $this->stencil->addLink('Robert Calliau', 'P'); ?> proposed in 1990 to use hypertext "<em>to link and access information of various kinds as a web of nodes in which the user can browse at will</em>", and Berners-Lee finished the first website in December of that year.</p>
        <p>The first test was completed around 20 December 1990 and Berners-Lee reported about the project on the newsgroup <code>alt.hypertext</code> on 7 August 1991.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>In the May 1970 issue of Popular Science magazine, Arthur C. Clarke predicted that satellites would someday "<em>bring the accumulated knowledge of the world to your fingertips</em>" using a console that would combine the functionality of the photocopier, telephone, television and a small computer, allowing data transfer and video conferencing around the globe.</p>
            <p>On 12 March 1989, Tim Berners-Lee wrote a proposal that referenced ENQUIRE, a database and software project he had built in 1980, and described a more elaborate information management system.</p>
            <p>With help from Robert Cailliau, he published a more formal proposal (on 12 November 1990) to build a "Hypertext project" called "<em>WorldWideWeb</em>" (one word) as a "web" of "hypertext documents" to be viewed by "browsers" using a client–server architecture.</p>
            <p>This proposal estimated that a read-only web would be developed within three months and that it would take six months to achieve "<em>the creation of new links and new material by readers, [so that] authorship becomes universal</em>" as well as "<em>the automatic notification of a reader when new material of interest to him/her has become available.</em>".</p>
            <p>While the read-only goal was met, accessible authorship of web content took longer to mature, with the <?php echo $this->stencil->addLink('wiki', 'WD'); ?> concept, <?php echo $this->stencil->addLink('blogs', 'WD'); ?>, <?php echo $this->stencil->addLink('Web 2.0', 'WD'); ?> and <?php echo $this->stencil->addLink('RSS', 'WD'); ?>.</p>
            <p>The proposal was modeled after the SGML reader Dynatext by Electronic Book Technology, a spin-off from the Institute for Research in Information and Scholarship at Brown University.</p>
            <p>The Dynatext system, licensed by CERN, was a key player in the extension of SGML ISO 8879:1986 to Hypermedia within HyTime, but it was considered too expensive and had an inappropriate licensing policy for use in the general high energy physics community, namely a fee for each document and each document alteration.</p>
            <p>A <?php echo $this->stencil->addLink('NeXT', 'ITH'); ?> Computer was used by Berners-Lee as the world's first <?php echo $this->stencil->addLink('Web Server', 'WD'); ?> and also to write the first <?php echo $this->stencil->addLink('Web browser', 'WD'); ?>, <?php echo $this->stencil->addLink('WorldWideWeb', 'WB'); ?>, in 1990.</p>
            <p>By Christmas 1990, Berners-Lee had built all the tools necessary for a working Web: the first web browser (which was a web editor as well); the first web server; and the first web pages, which described the project itself.<p>
        </div>
    </div>
<?php endif; ?>