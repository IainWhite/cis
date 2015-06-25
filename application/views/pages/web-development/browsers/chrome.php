<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Google Chrome Web Browser'); ?>
        <p><strong>Google Chrome</strong> is a freeware <?php echo $this->stencil->addLink('Web browser', 'WD'); ?> developed by <?php echo $this->stencil->addLink('Google', 'C'); ?>.</p>
        <p>It used the <?php echo $this->stencil->addLink('Webkit', 'web-development/layout-engines'); ?> layout engine until version 27 and, with the exception of its <?php echo $this->stencil->addLink('iOS', 'OS'); ?> releases, from version 28 and beyond uses the WebKit fork Blink.</p>
        <p>It was first released as a beta version for <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?> on 2 September 2008, and as a stable public release on 11 December 2008.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Major version</th><th>Release date</th><th>Layout engine</th><th>Engine version</th><th>Significant changes</th></tr>
                <tr>
                    <td>0.2.149</td>
                    <td>2008-09-02</td>
                    <td rowspan="2">WebKit 522</td>
                    <td rowspan="4">0.3</td>
                    <td>
                        <ul>
                            <li>First release.</li>
                        </ul>
                    </td>
                </tr>
        <tr>
            <td>0.3.154</td>
            <td>2008-10-29</td>
            <td>
                <ul>
                    <li>Improved plug-in performance and reliability.</li>
                    <li>Spell checking for input fields.</li>
                    <li>Improved web proxy performance and reliability.</li>
                    <li>Tab and window management updates.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>0.4.154</td>
            <td>2008-11-24</td>
            <td>WebKit 525</td>
            <td>
                <ul>
                    <li>Bookmark manager with import and export support.</li>
                    <li>Privacy section added to the application options.</li>
                    <li>New blocked pop-up notification.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>1.0.154</td>
            <td>2008-12-11</td>
            <td>WebKit 528</td>
            <td>
                <ul>
                    <li>First stable release.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2.0.172</td>
            <td>2009-05-24</td>
            <td>WebKit 530</td>
            <td>0.4</td>
            <td>
                <ul>
                    <li>35% faster JavaScript on the SunSpider benchmark.</li>
                    <li>Mouse wheel support.</li>
                    <li>Full-screen mode.</li>
                    <li>Full-page zoom.</li>
                    <li>Form auto-fill.</li>
                    <li>Sort bookmarks by title.</li>
                    <li>Tab docking to browser and desktop edges.</li>
                    <li>Basic Greasemonkey support.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>3.0.195</td>
            <td>2009-10-12</td>
            <td>WebKit 532</td>
            <td>1.2</td>
            <td>
                <ul>
                    <li>New "new tab" page for improved customization.</li>
                    <li>25% faster JavaScript.</li>
                    <li>HTML5 video and audio tag support.</li>
                    <li>Lightweight theming.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>4.0.249</td>
            <td>2010-01-25</td>
            <td rowspan="2">WebKit 532.5</td>
            <td rowspan="2">1.3</td>
            <td>
                <ul>
                    <li>Extensions.</li>
                    <li>Bookmark synchronization.</li>
                    <li>Enhanced developer tools.</li>
                    <li>Improved HTML5 support.</li>
                    <li>Performance improvements.</li>
                    <li>Full ACID3 pass.</li>
                    <li>HTTP byte range support.</li>
                    <li>Experimental new anti-reflected-XSS feature called "XSS Auditor".</sup></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>4.1.249</td>
            <td>2010-03-17</td>
            <td>
                <ul>
                    <li>Translate infobar.</li>
                    <li>New privacy features.</li>
                    <li>Disabled XSS Auditor.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>5.0.375</td>
            <td>2010-05-21</td>
            <td>WebKit 533</td>
            <td>2.1</td>
            <td>
                <ul>
                    <li>Browser preference synchronizing.</li>
                    <li>Increased HTML5 support Geolocation API, App Cache, web sockets, and file drag-and-drop.</li>
                    <li>Revamped bookmark manager.</li>
                    <li>Adobe Flash Player integrated.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>6.0.472</td>
            <td>2010-09-02</td>
            <td>WebKit 534.3</td>
            <td>2.2</td>
            <td>
                <ul>
                    <li>Updated and more streamlined UI with simplified Omnibox.</li>
                    <li>New tab page.</li>
                    <li>Merged menu buttons.</li>
                    <li>Form auto-fill.</li>
                    <li>Expanded synchronization support to include extensions and auto-fill data.</li>
                    <li>Support for WebM videos.</li>
                    <li>Built-in PDF support (disabled by default).</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>7.0.517</td>
            <td>2010-10-21</td>
            <td>WebKit 534.7</td>
            <td>2.3.11.22</td>
            <td>
                <ul>
                    <li>Implemented HTML5 parsing algorithm.</li>
                    <li>File API.</li>
                    <li>Directory upload via input tag.</li>
                    <li>OS X version gained AppleScript support for UI automation.</li>
                    <li>Late binding enabled for SSL sockets: high priority SSL requests are now always sent to the server first.</li>
                    <li>New options for managing cookies.</li>
                    <li>Updated New Tab page to enable featuring of web applications.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>8.0.552</td>
            <td>2010-12-02</td>
            <td>WebKit 534.10</td>
            <td>2.4.9.19</td>
            <td>
                <ul>
                    <li>Chrome Web Store.</li>
                    <li>Built-in PDF viewer that works inside Chrome's sandbox for increased security.</li>
                    <li>Expanded synchronization support to include web applications.</li>
                    <li>Improved plug-in handling.</li>
                    <li>This release added "about:flags" to showcase experimental features such as Chrome Instant, side tabs on Windows, tabbed settings, GPU-accelerated compositing, WebGL support for the <i>canvas</i> element, and a "tab overview" mode for OS X.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>9.0.597</td>
            <td>2011-02-03</td>
            <td>WebKit 534.13</td>
            <td>2.5.9.6</td>
            <td>
                <ul>
                    <li>WebGL enabled by default.</li>
                    <li>Adobe Flash sandboxing on Windows and Chrome Instant option.</li>
                    <li>WebP support.</li>
                    <li>New flags: print preview, GPU-accelerated compositing, GPU-accelerated Canvas 2D, Google Native Client, CRX-less Web Apps, Web page prerendering, experimental Extension APIs, disable hyperlink auditing.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>10.0.648</td>
            <td>2011-03-08</td>
            <td>WebKit 534.16</td>
            <td>3.0.12.30</td>
            <td>
                <ul>
                    <li>Google Cloud Print sign-in interface enabled by default.</li>
                    <li>Partially implemented sandboxing of the GPU process.</li>
                    <li>Faster JavaScript performance due to incorporation of Crankshaft, an improved compiler for V8.</li>
                    <li>Settings pages that open in a tab, rather than a dialogue box.</li>
                    <li>Malware reporting and disabling outdated plug-ins.</li>
                    <li>Password sync.</li>
                    <li>GPU accelerated video.</li>
                    <li>Background WebApps.</li>
                    <li>webNavigation extension API.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>11.0.696</td>
            <td>2011-04-27</td>
            <td>WebKit 534.24</td>
            <td>3.1.8.16</td>
            <td>
                <ul>
                    <li>HTML5 Speech Input API.</li>
                    <li>Updated icon.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>12.0.742</td>
            <td>2011-06-07</td>
            <td>WebKit 534.30</td>
            <td>3.2.10.21</td>
            <td>
                <ul>
                    <li>Hardware accelerated 3D CSS.</li>
                    <li>New Safe Browsing protection against downloading malicious files.</li>
                    <li>Ability to delete Flash cookies from inside Chrome.</li>
                    <li>Launch Apps by name from the Omnibox.</li>
                    <li>Integrated Sync into new settings pages.</li>
                    <li>Improved screen reader support.</li>
                    <li>New warning when hitting Command-Q on Mac.</li>
                    <li>New flags: P2P API.</li>
                    <li>Existing tab on foreground on open.</li>
                    <li>Experimental new tab page.</li>
                    <li>Add grouping to tab context menu.</li>
                    <li>Run PPAPI Flash in the renderer process.</li>
                    <li>Multiple Profiles.</li>
                    <li>Removed Google Gears.</li>
                    <li>Print and Save buttons in the PDF viewer.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>13.0.782</td>
            <td>2011-08-02</td>
            <td rowspan="2">WebKit 535.1</td>
            <td>3.3.10.30</td>
            <td>
                <ul>
                    <li>Instant Pages (pre-rendering of Web pages).</li>
                    <li>Native print interface and preview (Linux and Windows only).</li>
                    <li>Experimental new tab page.</li>
                    <li>Experimental Restrict Instant To Search option.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>14.0.835</td>
            <td>2011-09-16</td>
            <td>3.4.14.21</td>
            <td>
                <ul>
                    <li>Native Client (NaCl) enabled for apps in the Chrome Web Store.</li>
                    <li>Web Audio API.</li>
                    <li>Additional Mac OS X Lion feature support.</li>
                    <li>Sync Encryption for all data.</li>
                    <li>Print preview on Mac.</li>
                    <li>Validation of HTTPS sites.</li>
                    <li>Experimental Web Request extension API.</li>
                    <li>Experimental Content Settings extension API.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>15.0.874</td>
            <td>2011-10-25</td>
            <td>WebKit 535.2</td>
            <td>3.5.10.24</td>
            <td>
                <ul>
                    <li>Faster print preview.></li>
                    <li>Redesigned new tab page on by default.</li>
                    <li>JavaScript fullscreen API enabled by default.</li>
                    <li>Inline installation of Chrome Web Store items by verified sites.</li>
                    <li>Omnibox History synchronization.</li>
                    <li>Switched to FFmpeg native VP8 decoder.</li>
                    <li>Extensions integrated into settings pages.</li>
                    <li>GPU Accelerated Canvas 2D disabled.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>16.0.912</td>
            <td>2011-12-13</td>
            <td>WebKit 535.7</td>
            <td>3.6.6.19</td>
            <td>
                <ul>
                    <li>Multiple profiles on by default.</li>
                    <li>Optional permissions in Chrome extensions, so the user can opt-in or opt-out of the optional permissions at installation time.</li>
                    <li>Experimental support for side tabs was removed.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>17.0.963</td>
            <td>2012-02-08</td>
            <td>WebKit 535.11</td>
            <td>3.7.12.29</td>
            <td>
                <ul>
                    <li>Updated Omnibox prerendering of pages.</li>
                    <li>Download scanning protection.</li>
                    <li>New extensions APIs.</li>
                    <li>Improved History tab.</li>
                    <li>Removal of "+" symbol from the "new tab" button.</li>
                    <li>Limited support for changing user agent strings.</li>
                    <li>Adjustable margins in print preview.</li>
                    <li>Search engine synchronization.</li>
                    <li>Disabled GAIA profile info.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>18.0.1025</td>
            <td>2012-03-28<br />
                2012-06-27 (Android ARM)<br />
                2012-09-26 (18.0.1026, Android x86)</td>
            <td>WebKit 535.19</td>
            <td>3.8.9.19</td>
            <td>
                <ul>
                    <li>Hardware-accelerated Canvas2D graphics.</li>
                    <li>WebGL without the need of 3D graphics hardware through the software rasterizer SwiftShader.</li>
                    <li>Brighter "new tab" button.></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>19.0.1084</td>
            <td>2012-05-15<br />
                2012-06-28 (iOS)</td>
            <td>WebKit 536.5</td>
            <td>3.9.24.7</td>
            <td>
                <ul>
                    <li>Access tabs between devices.</li>
                    <li>Reorganized and searchable settings interface.</li>
                    <li>Better spell check by using the Google search engine spell checker.</li>
                    <li>Web Store link to the bottom of New Tab page.</li>
                    <li>Experimental JavaScript Harmony (ECMAScript 6) support.</li>
                    <li>Experimental Web Intents API.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>20.0.1132</td>
            <td>2012-06-26</td>
            <td>WebKit 536.10</td>
            <td>3.10.6.0</td>
            <td>
                <ul>
                    <li>Experimental touch friendly UI adjustments. Context menus have extra vertical padding between items.</li>
                    <li>New tab button is bigger and wider</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>21.0.1180</td>
            <td>2012-07-31<br />
                2012-08-22 (iOS)</td>
            <td>WebKit 537.1</td>
            <td>3.11.10.6</td>
            <td>
                <ul>
                    <li>Media Stream API (getUserMedia) enabled by default. (E.g. webcam access via JavaScript.)</li>
                    <li>Gamepad API prototype available by default.</li>
                    <li>Support for (pointer) and (hover) CSS media queries so sites can optimize their UI for touch when touch-screen support is available.</li>
                    <li>HTML5 audio/video and WebAudio now support 24-bit PCM wave files.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>22.0.1229</td>
            <td>2012-09-25</td>
            <td>WebKit 537.4</td>
            <td>3.12.19.4</td>
            <td>
                <ul>
                    <li>New-style packaged apps are enabled by default.</li>
                    <li>New menu icon, replacing the wrench icon.</li>
                    <li>Support for TLS 1.1.</li>
                    <li>Support for colour management ICC v2 profiles by default.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>23.0.1271</td>
            <td>2012-11-06<br />
                2012-11-28 (iOS)</td>
            <td>WebKit 537.11</td>
            <td>3.13.7.1</td>
            <td>
                <ul>
                    <li>Do Not Track preference</li>
                    <li>Hardware video acceleration with 25% more efficient power consumption in some scenarios</li>
                    <li>Manager for site permission control</li>
                    <li>New icon for Chrome Web Store when opening new tab</li>
                    <li>PPAPI Flash Player (or Pepper-based Flash Player) replaced the NPAPI Flash Player on Mac also.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>24.0.1312</td>
            <td>2013-01-10</td>
            <td>WebKit 537.17</td>
            <td>3.14.5.0</td>
            <td>
                <ul>
                    <li>Support for MathML.</li>
                    <li>The HTML5 datalist element now supports suggesting a date and time.</li>
                    <li>Experimental support for CSS custom filters</a>.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>25.0.1364</td>
            <td>2013-02-21<br />
                2013-02-27 (Android)<br />
                2013-03-04 (iOS)</td>
            <td>WebKit 537.22</td>
            <td>3.15.11.5</td>
            <td>
                <ul>
                    <li>Support for Opus audio</li>
                    <li>Support for VP9 video</li>
                    <li>Silent installs of external extensions are now disabled by default.</li>
                    <li>Web Speech API</li>
                    <li>Encrypted omnibox search (https)</li>
                    <li>Native Client on ARM<</li>
                    <li>Disabled MathML support for the time being.</li>
                </ul>
                <p>Android version (update from 16):</p>
                <ul>
                    <li>Newer V8 JavaScript engine</li>
                    <li>Audio now continues to play while Chrome is in the background</li>
                    <li>Support for pausing audio in Chrome when phone is in use</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>26.0.1410</td>
            <td>2013-03-26<br />
                2013-04-03 (Android)<br />
                2013-04-09 (iOS)</td>
            <td>WebKit 537.31</td>
            <td>3.16.14.9</td>
            <td>
                <ul>
                    <li>Improved spell checker (grammar and homonym checking)</li>
                    <li>Desktop shortcuts for multiple users (profiles) on Windows</li>
                    <li>Asynchronous DNS resolver on Mac and Linux</li>
                </ul>
                <p>Android version:</p>
                <ul>
                    <li>Autofill and password sync</li>
                    <li>Performance and stability improvements</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>27.0.1453</td>
            <td>2013-05-21<br />
                2013-05-22 (Android)<br />
                2013-06-03 (iOS)</td>
            <td>WebKit 537.36</td>
            <td>3.17.6.14</td>
            <td>
                <ul>
                    <li>Resource handling optimized for faster page loads.</li>
                    <li>Improved Omnibox predictions and spelling correction.</li>
                    <li>syncFileSystem API for Google Drive data synchronization.</li>
                    <li>Stop packaging Manifest version 1.0 extensions.</li>
                </ul>
                <p>Android version:</p>
                <ul>
                    <li>Fullscreen on phones (scrolling down the page makes the toolbar disappear).</li>
                    <li>Simpler searching (the query stays visible in the omnibox, making it easier to edit)</li>
                    <li>Client-side certificate support</li>
                    <li>Tab history on tablets</li>
                    <li>"A ton of stability and performance fixes"</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>28.0.1500.95</td>
            <td>2013-06-17 (Linux)<br />
                2013-07-09 (OS X and Windows)<br />
                2013-07-10 (Android)<br />
                2013-07-17 (iOS)</td>
            <td>Blink 537.36<br />
                WebKit 537.36 (on iOS)</td>
            <td>3.18.5.8 (Linux, initial release); 3.18.5.14 (Linux, OS X and Windows)</td>
            <td>
                <ul>
                    <li>Replaced layout engine with Blink, a fork of WebKit on all platforms besides iOS.</li>
                    <li>Faster page loads with the new Blink threaded HTML parser.</li>
                    <li>Rich Notifications and Notification Center (HTML-based notifications deprecated).</li>
                    <li>Major improvements to the benchmark performances.</li>
                    <li>Support for the CSS&#160;:unresolved pseudoclass for Custom Elements.</li>
                    <li>Support for the CSS @supports conditional blocks to test for property:value pairs.</li>
                </ul>
                <p>Android version:</p>
                <ul>
                    <li>Fullscreen API support (fullscreen browsing on tablets).</li>
                    <li>Experimental WebGL, Web Audio, WebRTC support behind flags.</li>
                    <li>Built-in translation</li>
                </ul>
                <p>iOS version:</p>
                <ul>
                    <li>Improved interoperability with many other Google Apps</li>
                    <li>Voice Search enhancements</li>
                    <li>Fullscreen for iPad</li>
                    <li>Data usage savings (rolling out over time)</li>
                    <li>Access to browser history</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>29.0.1547</td>
            <td>2013-08-20 (Linux, OS X and Windows)<br />
                2013-08-21 (Android)<br />
                2013-09-12 (iOS)</td>
            <td>Blink 537.36</td>
            <td>3.19.18.19</td>
            <td>
                <ul>
                    <li>Support for VP9 final</li>
                    <li>Support for TLS 1.2</li>
                    <li>Preliminary QUIC</li>
                    <li>Improved Omnibox suggestions based on the recency of visited sites</li>
                    <li>Ability to reset user profile back to its original state</li>
                    <li>New apps and extensions APIs</li>
                </ul>
                <p>Android version:</p>
                <ul>
                    <li>WebRTC support</li>
                    <li>WebAudio support</li>
                    <li>Improved scrolling responsiveness and visual indication when scrolling to the top or bottom of a page</li>
                    <li>Startup performance and stability improvements</li>
                    <li>New color picker user interface for web forms</li>
                    <li>Support for Google's experimental data compression service (comparable to Opera Turbo) that lets Google servers quickly read and optimize a Web page for mobile devices, then transmit it to the smartphone using Google's SPDY network technology.</li>
                    <li>Rudimentary tab groups implemented</li>
                </ul>
                <p>iOS version:</p>
                <ul>
                    <li>Get back to Search Results faster</li>
                    <li>Data cost savings enhancements (rolled out incrementally)</li>
                    <li>Voice search pronoun support</li>
                    <li>Improvements to Single Sign On with other Google Apps</li>
                    <li>Support for WebP image format</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>30.0.1599</td>
            <td>2013-09-18 (iOS)<br />
                2013-10-01 (Linux, OS X and Windows)<br />
                2013-10-02 (Android)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.20.17.13</td>
            <td>
                <ul>
                    <li>New image context menu item: "Search Google for this image".</li>
                    <li>New Chrome Apps APIs: webview.request, media gallery write support and downloads</li>
                    <li>New platform features (both in desktop and mobile): support for the WebRTC Device Enumeration API, allowing users to change their microphones and/or camera on the fly without having to restart the WebRTC call; DevTools now supports CSS source maps; Chrome will now match the behaviour of IE and not honor the Refresh header or tags when the URL to be refreshed to has a JavaScript: scheme;</li>
                </ul>
                <p>Android version:</p>
                <ul>
                    <li>New gesture: swipe horizontally across the top toolbar to quickly switch tabs.</li>
                    <li>New gesture: drag vertically down from the toolbar to enter into the tab switcher view.</li>
                    <li>New gesture: drag down from the menu to open the menu and select wanted item without having to lift finger.</li>
                    <li>WebGL is enabled by default on high-end devices</li>
                    <li>DeviceMotion (device acceleration and rotation rates) events</li>
                    <li>Media Source Extension is enabled on Android 4.1+</li>
                    <li>Two new experimental features behind a flag: Web Speech API (recognition) and the Vibration API</li>
                </ul>
                <p>iOS version:</p>
                <ul>
                    <li>New look and feature enhancements for iOS7</li>
                    <li>Improvements to Fullscreen behavior especially on iPad (iOS7 only)</li>
                    <li>New Settings UI</li>
                    <li>Maps and email links launch the Google Maps and Gmail apps (if installed) automatically. You can change your preference in Settings</li>
                    <li>Stability / security improvements and bug fixes</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>31.0.1650</td>
            <td>2013-11-12 (Linux, OS X and Windows)<br />
                2013-11-14 (Android)<br />
                2013-11-20 (iOS)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.21.18.7</td>
            <td>
                <ul>
                    <li>Payment requestAutocomplete() on Chrome for Android, Windows, Chrome OS</li>
                    <li>PNaCl on desktop versions of Chrome</li>
                    <li>New Chrome Apps APIs: With URL handlers for apps, Chrome App developers can now specify URLs to be handled by a Chrome App. For example, a document link on a website could open a document editor Chrome App. This gives users more seamless entry points into their favourite Chrome Apps.</li>
                    <li>Directory access for Apps allows Chrome Apps to access and write to user-approved folders. This feature can be used to share files between a Chrome App and a native app. For example, a Chrome App code editor could modify files managed by a native Git client.</li>
                    <li>SCTP for WebRTC Data Channel allows P2P data transfers between browsers to be either best effort, reliable, or semi reliable, opening up use cases such as gaming.</li>
                    <li>Alpha channel support for WebM video enables transparency masking (a.k.a. green screen effects) in WebM videos.</li>
                    <li>Speech recognition with the JavaScript Web Speech API is now supported on Chrome for Android.</li>
                    <li>window.devicePixelRatio now takes full-page zoom (but not pinch zoom) into account.</li>
                    <li>Support for { alpha: false } in getContext('2d') lets you create an opaque canvas. This is similar to existing WebGL functionality and can improve the rendering performance of your app.</li>
                    <li>The Media Source API has been unprefixed and is now supported on Chrome for Android. It allows JavaScript to generate media streams for playback, addressing use cases like adaptive streaming and time shifting live streams.</li>
                    <li>2D canvas now supports the "ellipse" method.</li>
                    <li>Support for several Mutation Events has been removed. Consider using MutationObserver instead.</li>
                </ul>
                <p>iOS version:</p>
                <ul>
                    <li>Fast form completion with Autofill</li>
                    <li>Long press on an image to search for related images</li>
                    <li>Stability / security improvements and bug fixes</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>32.0.1700</td>
            <td>2014-01-14 (Linux, OS X and Windows)<br />
                2014-01-15 (Android)<br />
                2014-01-27 (iOS)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.22.24.10</td>
            <td>
                <ul>
                    <li>Tab indicators for sound, webcam and casting</li>
                    <li>A different look for Win8 Metro mode</li>
                    <li>Automatically blocking malware files</li>
                    <li>A number of new apps/extension APIs</li>
                    <li>Various under-the-hood changes for stability and performance</li>
                </ul>
                <p><b>Android version</b>:</p>
                <ul>
                    <li>Add web page shortcuts right to your home screen more easily from the menu</li>
                    <li>Reduce data usage in Chrome up to 50%. Visit Settings &gt; Bandwidth management &gt; Reduce data usage to enable.</li>
                </ul>
                <p><b>iOS version</b>:</p>
                <ul>
                    <li>Translate
                        <ul>
                            <li>When you come across a page written in a language that you don’t understand, just look for the translation bar. One tap and the page is quickly translated for you.</li>
                        </ul>
                    </li>
                    <li>Reduce Data Usage
                        <ul>
                            <li>Reduce your data usage by up to 50%. Enable this feature and view your savings: Settings &gt; Bandwidth &gt; Reduce Data Usage.</li>
                        </ul>
                    </li>
                    <li>New Tab Page update to make searching faster and easier
                        <ul>
                            <li>This feature is being rolled out and will be available to all users over time, beginning on iPhone</li>
                        </ul>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>33.0.1750</td>
            <td>2014-02-18 (iOS)<br />
                2014-02-20 (Linux, OS X and Windows)<br />
                2014-02-26 (Android)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.23.17.13</td>
            <td>
                <ul>
                    <li>Custom Elements</li>
                    <li>Ogg Opus in MSE and &lt;video&gt;</li>
                    <li>Page Visibility API</li>
                    <li>VTTCue</li>
                    <li>Web Speech API (synthesis)</li>
                    <li>Font-kerning</li>
                    <li>requestAutocomplete()</li>
                    <li>Speech Synthesis></li>
                </ul>
                <p><b>Android version</b>:</p>
                <ul>
                    <li>Download progress notification for file downloads using the Chrome network stack</li>
                    <li>Updated help and feedback UI</li>
                    <li>Support for &lt;datalist&gt; tag</li>
                </ul>
                <p><b>iOS version</b>:</p>
                <ul>
                    <li>Stability and security updates</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>34.0.1847</td>
            <td>2014-04-02 (Android)<br />
                2014-04-08 (Linux, OS X and Windows)<br />
                2014-04-29 (iOS)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.24.35.22</td>
            <td>
                <ul>
                    <li>Responsive Images and Unprefixed Web Audio</li>
                    <li>Import supervised users onto new computers</li>
                    <li>A different look for Windows 8 Metro mode</li>
                    <li>A number of new apps/extension APIs</li>
                    <li>New scroll bar look</li>
                </ul>
                <p><b>Android version</b>:</p>
                <ul>
                    <li>Battery usage optimizations</li>
                </ul>
                <p><b>iOS version</b>:</p>
                <ul>
                    <li>Updated tour when you start Chrome for the first time</li>
                    <li>Support for autocomplete in the omnibox for right to left languages</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>35.0.1916</td>
            <td>2014-05-20 (Android)<br />
                2014-05-20 (Linux, OS X and Windows)<br />
                2014-05-28 (iOS)</td>
            <td>Blink 537.36<br />
                WebKit 537.51.1 (on iOS)</td>
            <td>3.25.28.16</td>
            <td>
                <ul>
                    <li>More developer control over touch input</li>
                    <li>New JavaScript features</li>
                    <li>Unprefixed Shadow DOM</li>
                    <li>A number of new apps/extension APIs</li>
                    <li>Opus updated to version v1.1</li>
                </ul>
                <p><b>Android version</b>:</p>
                <ul>
                    <li>Undo Tab Close</li>
                    <li>Fullscreen video with Subtitles and HTML5 controls</li>
                    <li>Support for some multi-window devices</li>
                </ul>
                <p><b>iOS version</b>:</p>
                <ul>
                    <li>Added right-to-left support to the omnibox for Arabic and Hebrew</li>
                    <li>See your search term in the omnibox, instead of the long search query URL</li>
                    <li>Easily refine your search queries and view more results on the search results page</li>
                    <li>Stability improvements and bug fixes</li>
                </ul>
            </td>
        </tr>
            </table>
        </div>
    </div>
<?php endif; ?>