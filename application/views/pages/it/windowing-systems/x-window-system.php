<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('X Window System (X11)'); ?>
        <p>The <strong>X Window System</strong> (<strong>X11</strong>, <strong>X</strong>, and sometimes informally <strong>X-Windows</strong>) is a <?php echo $this->stencil->addLink('windowing system', 'IT'); ?> for bitmap displays, common on <?php echo $this->stencil->addLink('Unix-like', 'OS'); ?> computer operating systems.</p>
        <p>X provides the basic framework for a <?php echo $this->stencil->addLink('GUI', 'IT'); ?> environment: drawing and moving windows on the display device and interacting with a mouse and keyboard. X does not mandate the user interface - this is handled by individual programs. As such, the visual styling of X-based environments varies greatly; different programs may present radically different interfaces.</p>
        <p>X originated at the <strong>Massachusetts Institute of Technology (MIT)</strong> in 1984. The protocol version has been X11 since September 1987. The <strong>X.Org Foundation</strong> leads the X project, with the current reference implementation, X.Org Server, available as free and open source software under the MIT License and similar permissive licenses.</p>
        <p>X is an architecture-independent system for remote graphical user interfaces and input device capabilities. Each person using a networked terminal has the ability to interact with the display with any type of user input device.</p>
        <p>In its standard distribution it is a complete, albeit simple, display and interface solution which delivers a standard toolkit and protocol stack for building graphical user interfaces on most Unix-like operating systems and [OpenVMS], and has been ported to many other contemporary general purpose operating systems.</p>
        <p>X provides the basic framework, or primitives, for building such GUI environments: drawing and moving windows on the display and interacting with a mouse, keyboard or touchscreen. X does not mandate the user interface; individual client programs handle this. Programs may use X's graphical abilities with no user interface. As such, the visual styling of X-based environments varies greatly; different programs may present radically different interfaces.</p>
        <p>Unlike most earlier display protocols, X was specifically designed to be used over network connections rather than on an integral or attached display device. X features network transparency: the machine where an application program (the client application) runs can differ from the user's local machine (the display server). X's network protocol is based on X command primitives. This approach allows both 2D and 3D operations to be fully accelerated on the remote X server.</p>
        <p>X provides no native support for audio; several projects exist to fill this niche, some also providing transparent network support.</p>

        <h2>Principles of X</h2>
        <p>In 1984, <strong>Bob Scheifler</strong> and <strong>Jim Gettys</strong> set out the early principles of X:</p>
        <ul>
            <li>Do not add new functionality unless an implementor cannot complete a real application without it.</li>
            <li>It is as important to decide what a system is not as to decide what it is. Do not serve all the world's needs; rather, make the system extensible so that additional needs can be met in an upwardly compatible fashion.</li>
            <li>The only thing worse than generalizing from one example is generalizing from no examples at all.</li>
            <li>If a problem is not completely understood, it is probably best to provide no solution at all.</li>
            <li>If you can get 90 percent of the desired effect for 10 percent of the work, use the simpler solution.</li>
            <li>Isolate complexity as much as possible.</li>
            <li>Provide mechanism rather than policy. In particular, place user interface policy in the clients' hands.</li>
        </ul>
        <p>The first principle was modified during the design of X11 to: "Do not add new functionality unless you know of some real application that will require it".</p>
        <p>X has largely kept to these principles. The sample implementation is developed with a view to extension and improvement of the implementation, while remaining compatible with the original 1987 protocol.</p>
    </div>
</div>