<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('ODBC - Open Database Connectivity'); ?>
        <p><strong>ODBC</strong> (<strong>Open Database Connectivity</strong>) is a standard programming language middleware <?php echo $this->stencil->addLink('API', 'IT'); ?> for accessing database management systems (<?php echo $this->stencil->addLink('DBMS', 'DB'); ?>).</p>
        <p>The designers of ODBC aimed to make it independent of database systems and operating systems; an application written using ODBC can be ported to other platforms, both on the client and server side, with few changes to the data access code.</p>
        <p>ODBC accomplishes DBMS independence by using an ODBC driver as a translation layer between the application and the DBMS.</p>
        <p>The application uses ODBC functions through an ODBC driver manager with which it is linked, and the driver passes the query to the DBMS.</p>
        <p>An ODBC driver can be thought of as analogous to a printer or other driver, providing a standard set of functions for the application to use, and implementing DBMS specific functionality.</p>
        <p>An application that can use ODBC is referred to as "ODBC compliant". Any ODBC compliant application can access any DBMS for which a driver is installed.</p>
        <p>Drivers exist for all major DBMSs, many other data sources like address book systems and <?php echo $this->stencil->addLink('Microsoft Excel', 'SS'); ?>, and even for text or <?php echo $this->stencil->addLink('CSV', 'IT'); ?> files.</p>
        <p>ODBC was originally developed by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> during the early 1990s, and became the basis for the <?php echo $this->stencil->addLink('Call Level Interface', 'DB'); ?> (CLI) standardized by <strong>SQL Access Group</strong> in the <?php echo $this->stencil->addLink('Unix', 'OS'); ?> and mainframe world.</p>
        <p>ODBC retained a number of features that were removed as part of the CLI effort.</p>
        <p>Full ODBC was later ported back to those platforms, and became a de facto standard considerably better known than CLI.</p>
        <p>The CLI remains similar to ODBC, and applications can be ported from one platform to the other with few changes.</p>
    </div>
</div>