<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('GDI - Graphics Device Interface'); ?>
        <p>The <strong>Graphics Device Interface</strong> (<strong>GDI</strong>) is a <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?> application programming interface and core operating system component responsible for representing graphical objects and transmitting them to output devices such as monitors and printers.</p>
        <p>GDI is responsible for tasks such as drawing lines and curves, rendering fonts and handling palettes.</p>
        <p>It is not directly responsible for drawing windows, menus, etc.; that task is reserved for the user subsystem, which resides in <code>user32.dll</code> and is built atop <?php echo $this->stencil->addLink('GUI', 'IT'); ?>.</p>
        <p>GDI's most significant advantages over more direct methods of accessing the hardware are perhaps its scaling capabilities and its abstract representation of target devices.</p>
        <p>Using GDI, it is very easy to draw on multiple devices, such as a screen and a printer, and expect proper reproduction in each case.</p>
        <p>This capability is at the centre of all <strong>What You See Is What You Get</strong> applications for Microsoft Windows.</p>
    </div>
</div>
