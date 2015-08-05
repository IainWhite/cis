<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MFC - Microsoft Foundation Class Library'); ?>
        <p>The <strong>Microsoft Foundation Class Library</strong> (<strong>MFC</strong> or <strong>MSFC</strong>) is a library that wraps portions of the <?php echo $this->stencil->addLink('Windows API', 'SD'); ?> in <?php echo $this->stencil->addLink('C++', 'LC'); ?> classes, including functionality that enables them to use a default application framework.</p>
        <p>Classes are defined for many of the handle-managed Windows objects and also for predefined windows and common controls.</p>
        <p>MFC was introduced in 1992 with Microsoft's C/C++ 7.0 compiler for use with 16-bit versions of Windows as an extremely thin object-oriented C++ wrapper for the Windows API.</p>
        <p>C++ was just beginning to replace C for development of commercial application software at the time.</p>
        <p>In an MFC program, direct Windows API calls are rarely needed. Instead, programs create objects from Microsoft Foundation Class classes and call member functions belonging to those objects.</p>
        <p>Many of those functions share their names with corresponding API functions.</p>
        <p>One interesting quirk of MFC is the use of "<strong><em>Afx</em></strong>" as the prefix for many functions, macros and the standard pre-compiled header name <code>stdafx.h</code>.</p>
        <p>During early development what became MFC was called "<strong>Application Framework Extensions</strong>" and abbreviated "Afx".</p>
        <p>The name Microsoft Foundation Classes (MFC) was adopted too late in the release cycle to change these references.</p>
        <p>MFC 8.0 was released with <?php echo $this->stencil->addLink('Visual Studio', 'IDE'); ?> 2005. MFC 9.0 was released with Visual Studio 2008. MFC is not included in the free edition of Visual C++ Express but is included in the commercial versions of Visual C++ 2010 and later.</p>
        <p>The <?php echo $this->stencil->addLink('Object Windows Library', 'SD'); ?> (OWL), designed for use with <?php echo $this->stencil->addLink('Borland', 'C'); ?>'s <?php echo $this->stencil->addLink('Turbo C++', 'LC'); ?> compiler, was a competing product introduced by Borland around the same time.</p>
        <p>Eventually, Borland discontinued OWL development and licensed the distribution of the MFC headers, libraries and DLLs from Microsoft for a short time, though it never offered fully integrated support for MFC.</p>
        <p>Borland later released <strong><?php echo $this->stencil->addLink('VCL', 'SD'); ?> (Visual Component Library</strong>) to replace the OWL framework.</p>
        <p>Microsoft's emphasis on MFC has been reduced in favour of its <?php echo $this->stencil->addLink('.NET Framework', 'L'); ?>. MFC 7, 8 and 9 bridge elements of MFC with the .NET Framework to aid developers in migrating to the new framework.</p>
        <p>Though Microsoft has de-emphasized MFC, it remains a widely used framework.</p>
        <p>A lightweight alternative to MFC is the <?php echo $this->stencil->addLink('Windows Template Library', 'SD'); ?> (WTL). C++ Express version compiles WTL applications (if Active Template Library is installed), but does not include the <?php echo $this->stencil->addLink('IDE', 'ITS'); ?> support of the Standard, Professional and Team editions.</p>
    </div>
</div>
