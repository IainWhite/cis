<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IBM Information Management System (IMS)'); ?>
        <p><strong>IBM Information Management System</strong> (<strong>IMS</strong>) is a joint hierarchical database and information management system with extensive transaction processing capabilities.</p>
        <p>The IMS Database component stores data using a hierarchical model, which is quite different from <?php echo $this->stencil->addLink('IBM', 'C'); ?>'s later released relational database, <?php echo $this->stencil->addLink('IBM DB2', 'DB'); ?>.</p>
        <p>In IMS, the hierarchical model is implemented using blocks of data known as segments. Each segment can contain several pieces of data, which are called fields.</p>
        <p>For example, a customer database may have a root segment (or the segment at the top of the hierarchy) with fields such as phone, name, and age. Child segments may be added underneath another segment, for instance, one order segment under each customer segment representing each order a customer has placed with a company. Likewise, each order segment may have many children segments for each item on the order.</p>
        <p>Unlike other databases, you do not need to define all of the data in a segment to IMS.</p>
        <p>A segment may be defined with a size of 40 bytes but only define one field that is six bytes long as a key field that you can use to find the segment when performing queries. IMS will retrieve and save all 40 bytes as directed by a program but may not understand (or care) what the other bytes represent.</p>
    </div>
</div>