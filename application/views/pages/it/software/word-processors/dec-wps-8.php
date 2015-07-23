<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('DEC WPS-8'); ?>
        <p><strong>WPS-8</strong> was the name of a <?php echo $this->stencil->addLink('Word Processing System', 'ITS'); ?> sold by <?php echo $this->stencil->addLink('Digital Equipment Corporation', 'C'); ?> for use with their PDP-8 processors (including the VT78, VT278 <?php echo $this->stencil->addLink('DECmate', 'VT'); ?>, and PC238 DECmate II and PC24P DECmate III microcomputer systems).</p>
        <p>WPS-8 supported a variety of 24 row by 80 or 132 column terminals including the <?php echo $this->stencil->addLink('VT52', 'VT'); ?> family as well as the <?php echo $this->stencil->addLink('VT100', 'VT'); ?> family and all subsequent <?php echo $this->stencil->addLink('ANSI compatible', 'IT'); ?> terminals. A series of hierarchical menus allowed the user to command the system; the particular style of these menus became very widely used by Digital, particularly within their "<?php echo $this->stencil->addLink('ALL-IN-1', 'ITS'); ?>" office system. Once a document was opened for editing, near <?php echo $this->stencil->addLink('WYSIWYG', 'IT'); ?> editing was provided using a ruler to indicate the text alignment and tab stops for any given portion of the text. A typical editing session might have looked like this:</p>
        <pre>
          Text conformed to the
          preceding ruler (now offscreen).
        ----L----T-----------------------------T---------------------------------------------R----
            Text conformed to the ruler shown just above
            L -> Left margin
            R -> Ragged-right margin
            T -> Left-aligned tab
        ---------L----------------------------->---------------------.-----------------------J----
                 > -> Right-aligned tab
                 . -> Decimal-aligned tab
                 J -> Justified right margin (not justified on screen, only on printout)

        Aligned with the right tab
        Decimal-point aligned                          $5.99
                                                     1279.99
        </pre>

        <p>Using these various rulers, complex formatting could be achieved, even using a simple input device like a 24x80 character terminal. On ANSI terminals, character attributes such as bold and underline were shown on the screen. On the VT52 terminals (which could not display attributes), the operator could perform the same functions but only the printout would reveal the formatting.</p>
        <p>As text was typed-in, the system automatically word-wrapped the text so that it conformed to the ruler currently in effect for that section of the document. Rulers could be added or modified and the text from that ruler forward to the next would automatically be adjusted to conform to the new ruler. Hyphenation could be semi-automatically performed (including "hidden" hyphens that would only be revealed if a line break exposed them).</p>
        <p>Specialised editing functions were provided using the terminal keypad. A few functions could be commanded simply by pressing a keypad key, but a far wider range of functions could be commanded by prefixing them with the "<?php echo $this->stencil->addLink('Gold Key', 'IT'); ?>" (the PF1 key on the keypad, coloured gold on systems equipped with the WPS-8 custom keycaps). This style of "gold key" editing also became endemic at Digital, later showing up in mainstream general purpose text editors such as KED and EDT as well as the before mentioned "ALL-IN-1" office system. The editing facilities included making a selection and then using cut and paste (much like today's word processors, but using keys marked for cut and paste, rather than a mouse).</p>
        <p>Printing was to any of several different letter quality daisy wheel printers including a DEC variant of the Diablo 630.</p>
        <p>WPS-8 normally ran from a single floppy diskette and user data could be stored on the system diskette or additional data only diskettes. Up to four diskette drives were supported in a single system.</p>
        <p>The system also supported the creation of data tables, the sorting of these data tables, arithmetic calculations using these data, and a mail merge operation using these data and the arithmetic results. Through the extensive use of overlays, it managed all that on a 12-bit, 1.2-μs processor with 16 KWords of memory and 256KB of diskette storage. The limited resources of the system did not permit a spell-checker, though, primarily because there was no place with adequate storage to contain the dictionary file.</p>
    </div>
</div>