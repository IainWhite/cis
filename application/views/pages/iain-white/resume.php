<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Resume for Iain White'); ?>
        <?php $this->stencil->setDescription('On-line resume (curriculum vitae) for Iain White a Brisbane based Project Manager / Scrum master.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, Project Manager, Resume, CV, Skills')); ?>
        <p class="text-center"><strong>R&eacute;sum&eacute; / Curriculum Vitae (CV) for Iain White, Web Development Team Lead and Certified Professional Scrum Master</strong></p>

        <p class="text-center"><?php echo $this->stencil->addPDFLink('iain-white-cv', 'Download Iain White\'s CV in PDF.', 'btn btn-info btn-large rounded-2x'); ?></p>

        <h2>Skills</h2>
        <p>I have worked as a Software Developer for <?php echo $this->stencil->elapsedYears('01/09/1987'); ?>, with <?php echo $this->stencil->elapsedYears('01/01/1999'); ?> of developing Websites.</p>
        <p>I have experience across the entire project life cycle. I have worked as a Manager, Team Leader, Lead Developer and Software Engineer as well as a Programmer.</p>
        <p>I have excellent development skills, including HTML, JavaScript, CSS, PHP, ASP, XML, AJAX, jQuery, MySQL, PostgreSQL and MS SQLServer.</p>
        <p>I have had experience of Drupal, WordPress, Java, Scala, JSP, Perl, ColdFusion, TDD (Test Driven Development), code repositories, Object Oriented Programming, Technical design and documentation and SEO (Search Engine Optimisation).</p>
        <p>I have worked in Agile teams, Lean development and I am experienced in building Scrum Teams.</p>
        <P>I am a certified Professional Scrum Master and have worked in the role for over a year.</p>
        <p>I have good communication and interpersonal skills. I can work independently and / or in a team. I have proven leadership skills and have the ability to prioritise and schedule my own and others work. I am self motivated and reliable with a drive to deliver the best quality solution within allocated timelines.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="tab-v2">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#work-history" data-toggle="tab">Work History</a></li>
                <li><a href="#qualifications-training" data-toggle="tab">Qualifications &amp; Training</a></li>
                <li><a href="#personal-details" data-toggle="tab">Personal Details</a></li>
                <li><a href="#interests-activities" data-toggle="tab">Interests &amp; Activities</a></li>
                <li><a href="#contact-details" data-toggle="tab">Contact Details</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="work-history">
                    <h2>Work History</h2>
                    <?php
                    $this->stencil->sub('iain-white/work-history/xvt-solutions');
                    $this->stencil->sub('iain-white/work-history/creative-intersection');
                    $this->stencil->sub('iain-white/work-history/emu-design');
                    $this->stencil->sub('iain-white/work-history/onthehouse');
                    $this->stencil->sub('iain-white/work-history/freenet');
                    $this->stencil->sub('iain-white/work-history/big-bridge');
                    $this->stencil->sub('iain-white/work-history/aot');
                    $this->stencil->sub('iain-white/work-history/jpc');
                    $this->stencil->sub('iain-white/work-history/freelancing');
                    $this->stencil->sub('iain-white/work-history/tigerredi');
                    $this->stencil->sub('iain-white/work-history/ans');
                    $this->stencil->sub('iain-white/work-history/reuters');
                    $this->stencil->sub('iain-white/work-history/sms');
                    $this->stencil->sub('iain-white/work-history/eds');
                    $this->stencil->sub('iain-white/work-history/radford');
                    $this->stencil->sub('iain-white/work-history/mail-marketing');
                    $this->stencil->sub('iain-white/work-history/clares');
                    $this->stencil->sub('iain-white/work-history/british-aerospace');
                    $this->stencil->sub('iain-white/work-history/ferranti');
                    ?>
                </div>
                <div class="tab-pane fade in" id="qualifications-training">
                    <?php $this->stencil->sub('/iain-white/qualifications-summary'); ?>
                    <p>I have completed <strong><?php echo $this->stencil->getQualificationscount();?></strong> training courses in management and software development skills. See <a href="/iain-white/qualifications">training courses</a> details.</p>

                </div>
                <div class="tab-pane fade in" id="personal-details">
                    <h2>Personal Details</h2>
                    <ul>
                        <li>Married with no children.</li>
                        <li>Blue Card holder.</li>
                        <li>Australian Citizen (born Perth in Scotland).</li>
                        <li>Non-smoker.</li>
                        <li>Open Queensland class C licence driving licence.</li>
                        <li>Native English speaker with some spoken and written Dutch.</li>
                    </ul>
                    <p><a href="http://au.linkedin.com/in/iwhite"><img src="http://www.linkedin.com/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" alt="LinkedIn button" title="View Iain White's profile on LinkedIn" /></a></p>
                </div>
                <div class="tab-pane fade in" id="interests-activities">
                    <h2>Interests &amp; Activities</h2>
                    <p>I enjoy drawing and painting in water colours.</p>
                    <p>I was a Fire Warden for 3 years whilst at British Aerospace and for 2 years while at the AOT Group. </p>
                    <p>I was heavily in to Star Trek and still have a large collection of technical manuals and Klingon dictionaries.</p>
                    <p>I am a gammer, XBox, Wii, PSP and retro games.</p>
                    <p>I am an avid reader. Mostly classics, but my bookshelf ranges from Homer to Pritchett.</p>
                    <h3>Public Speaking</h3>
                    <p>Between 2001 and 2006 I was an active member of North Avon Speakers Club, part of Toastmasters International (www.toastmasters.org), and served on the executive committee as <strong>VP Public Relations</strong>.
                        I completed the Communication and Leadership Program and earned my CTM (Competent Toastmaster).
                        I also participated in many competitions and received several speaking certificates.
                    </p>
                    <h3>Volunteer Experience</h3>
                    <p>I volunteer my time to help youths and young adults in my local community.</p>
                    <p>I serve as a youth Chaplin associated with <?php echo $this->stencil->addExternalLink('Red Frogs', 'http://au.redfrogs.com/'); ?> Australia.</p>
                    <p>I am also a Young Adults Small Group Leader.</p>
                </div>
                <div class="tab-pane fade in" id="contact-details">
                    <div class="row">
                        <h2>Contact Details</h2>
                        <?php echo $this->stencil->addImage('QR Code', 'png', 'left'); ?>
                        <div id="hcard-Iain-White" class="vcard">
                            <span class="fn">Iain White</span><br>
                            <span class="iw-email"><a class="email" href="mailto:donotsendtome.com">dumy@donotsendtome.com</a></span>
                            <div class="adr">
                                <span class="locality">Springfield</span>,
                                <span class="region">QLD</span>,
                                <span class="postal-code">4300</span>
                                <span class="country-name">Australia</span>
                            </div>
                            <div class="tel iw-mobile"><a href="tel:0412345678">04 12 345 678</a></div>
                        </div>
                        <a href="/assets/images/iain-white.vcf" title="Iain White vCard"><img src="/assets/images/vcard.png" alt ="vCard" title="Iain White vCard"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>