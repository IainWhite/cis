<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Database / DBMS'); ?>
        <p>A <strong>database</strong> is an organized collection of data.</p>
        <p>The data are typically organized to model relevant aspects of reality in a way that supports processes requiring this information.</p>
        <p>For example, modelling the availability of rooms in hotels in a way that supports finding a hotel with vacancies.</p>

        <h2>Database Management Systems</h2>
        <p><strong>Database Management Systems</strong> (<strong>DBMS</strong>) are specially designed software applications that interact with the user, other applications, and the database itself to capture and analyze data.</p>
        <p>A general-purpose DBMS is a software system designed to allow the definition, creation, querying, update, and administration of databases.</p>
        <p>Well-known DBMSs include <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>, <?php echo $this->stencil->addLink('MariaDB', 'DB'); ?>, <?php echo $this->stencil->addLink('PostgreSQL', 'DB'); ?>, <?php echo $this->stencil->addLink('SQLite', 'DB'); ?>, <?php echo $this->stencil->addLink('Microsoft SQL Server', 'DB'); ?>, <?php echo $this->stencil->addLink('Oracle', 'DB'); ?>, <?php echo $this->stencil->addLink('dBASE', 'DB'); ?>, <?php echo $this->stencil->addLink('FoxPro', 'DB'); ?>, <?php echo $this->stencil->addLink('IBM DB2', 'DB'); ?> and <?php echo $this->stencil->addLink('FileMaker Pro', 'DB'); ?>.</p>
        <p>A database is not generally portable across different DBMSs, but different DBMSs can interoperate by using standards such as <?php echo $this->stencil->addLink('SQL', 'DB'); ?> and <?php echo $this->stencil->addLink('ODBC', 'DB'); ?> or <?php echo $this->stencil->addLink('JDBC', 'DB'); ?> to allow a single application to work with more than one database.</p>
    </div>
</div>