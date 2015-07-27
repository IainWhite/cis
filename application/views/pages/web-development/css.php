<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CSS - Cascading Style Sheets'); ?>
        <p><strong>Cascading Style Sheets</strong> (<strong>CSS</strong>) is a style sheet language used for describing the look and formatting of a document written in a mark-up language.</p>
        <p>While most often used to style web pages and interfaces written in <?php echo $this->stencil->addLink('HTML', 'WD'); ?> and <?php echo $this->stencil->addLink('XHTML', 'WD'); ?>, the language can be applied to any kind of XML document, including plain <?php echo $this->stencil->addLink('XML', 'WD'); ?>, <?php echo $this->stencil->addLink('SVG', 'WD'); ?> and <?php echo $this->stencil->addLink('XUL', 'WD'); ?>.</p>
        <p>CSS is a cornerstone specification of the web and almost all web pages use CSS style sheets to describe their presentation.</p>
        <p>CSS is designed primarily to enable the separation of document content from document presentation, including elements such as the layout, colours, and fonts.</p>
        <p>This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, enable multiple pages to share formatting, and reduce complexity and repetition in the structural content (such as by allowing for tableless web design).</p>
        <p>CSS can also allow the same mark-up page to be presented in different styles for different rendering methods, such as on-screen, in print, by voice (when read out by a speech based browser or screen reader) and on Braille based, tactile devices.</p>
        <p>It can also be used to allow the web page to display differently depending on the screen size or device on which it is being viewed.</p>
        <p>While the author of a document typically links that document to a CSS file, readers can use a different style sheet, perhaps one on their own computer, to override the one the author has specified.</p>
        <p>However if the author or the reader did not link the document to a specific style sheet the default style of the browser will be applied.</p>
        <p>CSS specifies a priority scheme to determine which style rules apply if more than one rule matches against a particular element.</p>
        <p>In this so-called cascade, priorities or weights are calculated and assigned to rules, so that the results are predictable.</p>
        <p>The CSS specifications are maintained by the <strong>World Wide Web Consortium (<?php echo $this->stencil->addLink('W3C', 'C'); ?>)</strong>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>The first instance of what later came to be CSS, was in <?php echo $this->stencil->addLink('Tim Berners-Lee', 'P'); ?>'s <?php echo $this->stencil->addLink('NeXT', 'ITH'); ?> browser/editor. The browser was developed in such a way that the style of document could be separated and defined in a simple style sheet.</p>
            <p>Style sheets have existed in one form or another since the beginnings of <strong>Standard Generalized Markup Language (<?php echo $this->stencil->addLink('SGML', 'WD'); ?>)</strong> in the 1980s.</p>
            <p>Cascading Style Sheets were developed as a means for creating a consistent approach to providing style information for web documents.</p>
            <p>As HTML grew, it came to encompass a wider variety of stylistic capabilities to meet the demands of web developers.</p>
            <p>This evolution gave the designer more control over site appearance, at the cost of more complex HTML.</p>
            <p>Variations in web browser implementations, such as <?php echo $this->stencil->addLink('ViolaWWW', 'WB'); ?> and <?php echo $this->stencil->addLink('WoeldWideWeb', 'WB'); ?>, made consistent site appearance difficult, and users had less control over how web content was displayed.</p>
            <p><?php echo $this->stencil->addLink('Robert Calliau', 'P'); ?> wanted to separate the structure from the presentation.</p>
            <p>The ideal way would be to give the user different options and transferring three different kinds of style sheets: one for printing, one for the presentation on the screen and one for the editor feature.</p>
            <p>To improve web presentation capabilities, nine different style sheet languages were proposed to the <strong>World Wide Web Consortium's (W3C)</strong> <strong>www-style mailing list</strong>.</p>
            <p>Of the nine proposals, two were chosen as the foundation for what became CSS: Cascading HTML Style Sheets; and Stream-based Style Sheet Proposal (SSP).</p>
            <p><strong>CHSS</strong>, a language that has some resemblance to today's CSS, was proposed by <strong>Håkon Wium Lie</strong> on 10 October 1994; detailing the need for a style sheet scheme for HTML documents.</p>
            <p><strong>Bert Bos</strong> was working on a browser called <strong>Argo</strong>, which used its own style sheet language called <strong>SSP</strong>.</p>
            <p>Lie and Yves Lafon joined Dave Raggett to expand the <strong>Arena</strong> browser for supporting CSS as a testbed application for the W3C.</p>
            <p>Lie and Bos worked together to develop the CSS standard (the 'H' was removed from the name because these style sheets could also be applied to other mark-up languages besides HTML).</p>
            <p>Unlike existing style languages like <strong>DSSSL</strong> and <strong>FOSI</strong>, CSS allowed a document's style to be influenced by multiple style sheets.</p>
            <p>One style sheet could inherit or "cascade" from another, permitting a mixture of stylistic preferences controlled equally by the site designer and user.</p>
            <p>Lie's proposal was presented at the "<em>Mosaic and the Web</em>" conference (later called WWW2) in Chicago, Illinois in 1994, and again with Bert Bos in 1995.</p>
            <p>Around this time the W3C was already being established, and took an interest in the development of CSS.</p>
            <p>It organized a workshop toward that end chaired by <strong>Steven Pemberton</strong>.</p>
            <p>This resulted in W3C adding work on CSS to the deliverables of the HTML editorial review board (ERB).</p>
            <p>Lie and Bos were the primary technical staff on this aspect of the project, with additional members, including Thomas Reardon of Microsoft, participating as well.</p>
            <p>In August 1996 Netscape Communication Corporation presented an alternative style sheet language called <strong>JavaScript Style Sheets (<?php echo $this->stencil->addLink('JSSS', 'WD'); ?>)</strong>. The spec was never finished and is deprecated.</p>
            <p>By the end of 1996, CSS was ready to become official, and the CSS level 1 Recommendation was published in December.</p>
            <p>Development of HTML, CSS, and the DOM had all been taking place in one group, the HTML Editorial Review Board (ERB).</p>
            <p>Early in 1997, the ERB was split into three working groups: HTML Working group, chaired by Dan Connolly of W3C; DOM Working group, chaired by Lauren Wood of SoftQuad; and CSS Working group, chaired by Chris Lilley of W3C.</p>
            <p>The CSS Working Group began tackling issues that had not been addressed with CSS level 1, resulting in the creation of CSS level 2 on 4 November 1997.</p>
            <p>It was published as a W3C Recommendation on 12 May 1998. CSS level 3, which was started in 1998, is still under development as of 2014.</p>
            <p>In 2005 the CSS Working Groups decided to enforce the requirements for standards more strictly.</p>
            <p>This meant that already published standards like CSS 2.1, CSS 3 Selectors and CSS 3 Text were pulled back from Candidate Recommendation to Working Draft level.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>CSS Tricks</h2>
            <?php echo $this->stencil->addRSS('http://feeds.feedburner.com/CssTricks'); ?>
        </div>
    </div>
<?php endif; ?>