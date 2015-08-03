<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SUSE'); ?>
        <p><strong>SUSE Linux</strong> is a computer operating system. It is built on top of the open source <?php echo $this->stencil->addLink('Linux kernel', 'OS'); ?> and is distributed with system and application software from other open source projects. SUSE Linux is of German origin and mainly developed in Europe.</p>
        <p>The first version appeared in early 1994, making SUSE one of the oldest existing commercial distributions. It is known for its <strong>YaST</strong> configuration tool.</p>
        <p><strong>openSUSE</strong> is a general purpose operating system built on top of the Linux kernel, developed by the community supported openSUSE Project and sponsored by SUSE and a number of other companies.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>SUSE Linux Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Project</th>
                    <th>Version</th>
                    <th>Date of issue</th>
                </tr>
                <th rowspan="6">S.u.S.E Linux (Slackware based)</th><td>3/94</td><td>1994-03-29</td></tr>
                <tr><td>7/94</td><td>1994-07</td></tr>
                <tr><td>11/94</td><td>1994-11</td></tr>
                <tr><td>4/95</td><td>1995-04</td></tr>
                <tr><td>8/95</td><td>1995-08</td></tr>
                <tr><td>11/95</td><td>1995-11</td></tr>
                <tr><th rowspan="7">S.u.S.E Linux (Jurix based)</th><td>4.2</td><td>1996-05</td></tr>
                <tr><td>4.3</td><td>1996-09</td></tr>
                <tr><td>4.4</td><td>1997-05</td></tr>
                <tr><td>5.0</td><td>1997-07</td></tr>
                <tr><td>5.1</td><td>1997-10</td></tr>
                <tr><td>5.2</td><td>1998-03-23</td></tr>
                <tr><td>5.3</td><td>1998-09-10</td></tr>
                <tr><th rowspan="12">SuSE Linux</th><td>6.0</td><td>1998-12-21</td></tr>
                <tr><td>6.1</td><td>1999-04-07</td></tr>
                <tr><td>6.2</td><td>1999-08-12</td></tr>
                <tr><td>6.3</td><td>1999-11-25</td></tr>
                <tr><td>6.4</td><td>2000-03-09</td></tr>
                <tr><td>7.0</td><td>2000-09-27</td></tr>
                <tr><td>7.1</td><td>2001-04-21</td></tr>
                <tr><td>7.2</td><td>2001-06-15</td></tr>
                <tr><td>7.3</td><td>2001-10-13</td></tr>
                <tr><td>8.0</td><td>2002-04-22</td></tr>
                <tr><td>8.1</td><td>2002-09-30</td></tr>
                <tr><td>8.2</td><td>2003-04-07</td></tr>
                <tr><th rowspan="6">SUSE Linux</th><td>9.0</td><td>2003-10-15</td></tr>
                <tr><td>9.1</td><td>2004-04-23</td></tr>
                <tr><td>9.2</td><td>2004-10-25</td></tr>
                <tr><td>9.3</td><td>2005-04-16</td></tr>
                <tr><td>10.0</td><td>2005-10-06</td></tr>
                <tr><td>10.1</td><td>2006-05-11</td></tr>
                <tr><th rowspan="12">openSUSE</th><td>10.2</td><td>2006-12-07</td></tr>
                <tr><td>10.3</td><td>2007-10-04</td></tr>
                <tr><td>11.0</td><td>2008-06-19</td></tr>
                <tr><td>11.1</td><td>2008-12-18</td></tr>
                <tr><td>11.2</td><td>2009-11-12</td></tr>
                <tr><td>11.3</td><td>2010-07-15</td></tr>
                <tr><td>11.4</td><td>2011-03-10</td></tr>
                <tr><td>12.1</td><td>2011-11-16</td></tr>
                <tr><td>12.2</td><td>2012-09-05</td></tr>
                <tr><td>12.3</td><td>2013-03-13</td></tr>
                <tr><td>13.1</td><td>2013-11-19</td></tr>
                <tr><td>13.2</td><td>2014-07-16</td></tr>
            </table>

            <h2>YaST</h2>
            <p><strong>YaST</strong> (<strong>Y</strong>et <strong>a</strong>nother <strong>S</strong>etup <strong>T</strong>ool) is a <?php echo $this->stencil->addLink('Linux', 'OS'); ?> operating system setup and configuration tool that is featured in the openSUSE Linux distribution, as well as SUSE's derived commercial distributions.</p>
            <p>It features tools that can configure many aspects of the system. The first SuSE distribution that included YaST was released in May 1996. YaST was rewritten in 1999 and included first in SuSE Linux 6.3 as an installer only.</p>
            <p>YaST2 was added to the desktop in SuSE Linux 6.4 and co-existed with YaST1 until YaST1's removal in SuSE Linux 8.0.</p>
        </div>
    </div>
<?php endif; ?>