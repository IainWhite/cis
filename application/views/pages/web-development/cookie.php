<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('HTTP Cookie'); ?>
        <p>A <strong>cookie<strong>, also known as an <strong>HTTP cookie</strong>, <strong>web cookie</strong>, or <strong>browser cookie</strong>, is a small piece of data sent from a website and stored in a user's web browser while the user is browsing that website.</p>
        <p>Every time the user loads the website, the browser sends the cookie back to the server to notify the website of the user's previous activity.</p>
        <p>Cookies were designed to be a reliable mechanism for websites to remember stateful information (such as items in a shopping cart) or to record the user's browsing activity (including clicking particular buttons, logging in, or recording which pages were visited by the user as far back as months or years ago).</p>
        <p>Although cookies cannot carry viruses, and cannot install malware on the host computer, tracking cookies and especially third-party tracking cookies are commonly used as ways to compile long-term records of individuals' browsing histories a potential privacy concern that prompted European and U.S. law makers to take action in 2011.</p>
        <p>Cookies can also store passwords and form content a user has previously entered, such as a credit card number or an address.</p>
        <p>When a user accesses a website with a cookie function for the first time, a cookie is sent from server to the browser and stored with the browser in the local computer.</p>
        <p>Later when that user goes back to the same website, the website will recognize the user because of the stored cookie with the user's information.</p>
        <p>Other kinds of cookies perform essential functions in the modern web.</p>
        <p>Perhaps most importantly, authentication cookies are the most common method used by web servers to know whether the user is logged in or not, and which account they are logged in with.</p>
        <p>Without such a mechanism, the site would not know whether to send a page containing sensitive information, or require the user to authenticate themselves by logging in.</p>
        <p>The security of an authentication cookie generally depends on the security of the issuing website and the user's web browser, and on whether the cookie data is encrypted.</p>
        <p>Security vulnerabilities may allow a cookie's data to be read by a hacker, used to gain access to user data, or used to gain access (with the user's credentials) to the website to which the cookie belongs (e.g. <?php echo $this->stencil->addLink('cross site scripting', 'WD'); ?> and <?php echo $this->stencil->addLink('cross site request forgery', 'WD'); ?>).</p>
    </div>
</div>