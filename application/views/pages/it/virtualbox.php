<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('VirtualBox'); ?>
        <p><strong>Oracle VM VirtualBox</strong> (formerly <strong>Sun VirtualBox</strong>, <strong>Sun xVM VirtualBox</strong> and <strong>innotek VirtualBox</strong>), a virtualization software package for <?php echo $this->stencil->addLink('x86', 'CPU'); ?> and <?php echo $this->stencil->addLink('AMD64', 'CPU'); ?> / Intel64 based computers from <?php echo $this->stencil->addLink('Oracle Corporation', 'C'); ?>, forms part of Oracle's family of virtualization products. <strong>Innotek GmbH</strong> first developed the product; <?php echo $this->stencil->addLink('Sun Microsystems', 'C'); ?> purchased it in 2008; Oracle has continued development since 2010.</p>
        <p>The VirtualBox package installs on an existing host operating system as an application; this host application allows additional guest operating systems, each known as a Guest <?php echo $this->stencil->addLink('O/S', 'IT'); ?>, to load and run, each with its own virtual environment.</p>
        <p>Supported host operating systems include <?php echo $this->stencil->addLink('Linux', 'OS'); ?>, <?php echo $this->stencil->addLink('Mac OS X', 'OS'); ?>, <?php echo $this->stencil->addLink('Windows Xp', 'WIN'); ?>, <?php echo $this->stencil->addLink('Windows Vista', 'WIN'); ?>, <?php echo $this->stencil->addLink('Windows 7', 'WIN'); ?>, <?php echo $this->stencil->addLink('Windows 8', 'WIN'); ?>, <?php echo $this->stencil->addLink('Solaris', 'OS'); ?>, and OpenSolaris; there are also ports to <?php echo $this->stencil->addLink('FreeBSD', 'OS'); ?> and Genode.</p>
        <p>Supported guest operating systems include versions and derivations of Windows, Linux, BSD, OS/2, Solaris, Haiku and others. Since release 3.2.0, VirtualBox also allows limited virtualization of Mac OS X guests on <?php echo $this->stencil->addLink('Apple', 'C'); ?> hardware, though OSX86 can also be installed using VirtualBox.</p>
        <p>Since version 4.3 (released in October 2013), Microsoft Windows guests on supported hardware can take advantage of the recently implemented WDDM driver included in the guest additions; this allows Windows Aero to be enabled along with Direct3D support.</p>
        <p>Guest Additions should be installed in order to achieve the best possible experience. The Guest Additions can be installed inside a virtual machine after the installation of the guest operating system. They consist of device drivers and system applications that optimize the guest operating system for better performance and usability.</p>
        <p>VirtualBox website: <?php echo $this->stencil->addExternalLink('www.virtualbox.org', 'https://www.virtualbox.org/'); ?></p>
    </div>
</div>