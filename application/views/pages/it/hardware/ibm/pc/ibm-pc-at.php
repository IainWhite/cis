<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IBM PC AT'); ?>
        <p>The <strong>IBM Personal Computer AT</strong>, more commonly known as the <strong>IBM AT</strong> and also sometimes called the <strong>PC AT</strong> or <strong>PC/AT</strong>, was <?php echo $this->stencil->addLink('IBM', 'C'); ?>'s second generation PC, designed around the 6MHz <?php echo $this->stencil->addLink('Intel 80286', 'CPU'); ?> microprocessor and released in 1984 as System Unit 5170.</p>
        <p>IBM later released an 8MHz version of the AT.</p>
        <p>The name <strong>AT</strong> stood for "<strong>A</strong>dvanced <strong>T</strong>echnology", and was chosen because the AT offered various technologies that were then new in personal computers; one such advancement was that the 80286 processor supported protected mode.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>AT Features</h2>
            <ul>
                <li>AT bus: The AT motherboard had a 16-bit data bus and 24-bit address bus (16MB) that was backward compatible with PC style expansion cards (which were 8-bit data, 20-bit address).</li>
                <li>Fifteen IRQs and seven DMA channels, expanded from eight IRQs and four DMA channels for the PC (and <?php echo $this->stencil->addLink('XT', 'PC'); ?>). The doubling of the IRQs was achieved by adding another 8259A. IRQs 8-15 (from the second 8259A) are cascaded through IRQ 2 of the first 8259A, which leaves 15 available instead of 16. Similarly, the number of DMA channels was increased by adding another 8237A, also in master-slave configuration. DMA channel 4 is reserved for cascading 0-3 leaving seven channels active. Some IRQ and some DMA channels are used on the motherboard and not exposed on the expansion bus.</li>
                <li>16M maximum memory (because of the 24-bit address bus of the 286), compared to the PC's 640K maximum.</li>
                <li>Battery backed real-time clock (RTC) on motherboard with 50 bytes CMOS memory available for power-off storage of BIOS parameters. (The basic PC had required either manual setting of its software clock using Time and Date commands, or the addition of an accessory expansion card with real-time clock, to avoid the default 01-01-80 file date.) Additionally the AT RTC had a 1024-Hz timer (on IRQ 8), which was a much finer resolution compared to the 18-Hz RTC used by IBM PC XT (IRQ 0). The AT timer was accessible via INT 70h. The RTC was implemented using a Motorola MC146818 integrated circuit.</li>
                <li>A disk-based BIOS set-up program took the place of the DIP switches on PCs and PC XTs. Most AT clones would have the set-up program in ROM rather than on a disk.</li>
                <li>84-key AT keyboard layout: the 84th key being <code>&lt;SysRq&gt;</code> i.e. System Request; numerical keypad now clearly separated from main key group; also added indicator LEDs for Caps lock/Scroll lock/Num lock. The AT keyboard uses the same 5-pin DIN connector as the PC keyboard, but it uses a different, bidirectional interface (the PC and PC XT keyboard interface is unidirectional) and generates different keyboard scan codes. The bidirectional interface allows the computer to set the LED indicators on the keyboard, reset the keyboard, set the typematic rate, etc. Later ATs had 101-key keyboards which featured integrated numeric keypad with Num Lock key.</li>
                <li>1.2M 135mm (5-1/4 inch) floppy disk drive (15 sectors of 512 bytes, 80 tracks, two sides) stored over three times as much data as the 360K PC floppy disk (nine sectors of 512 bytes, 40 tracks, two sides). However, they had compatibility problems with 360k disks. 90mm (3.5") floppy drives became available in later ATs.</li>
                <li>A 20M hard disk drive, although the early drives manufactured by Computer Memories were very unreliable. This was attributed partly to failure to automatically retract the read/write heads when the computer was powered off, and partly to a bug in the {'DOS'|link_urls:'i'} 3.0 FAT algorithm.</li>
                <li>Early ATs (1984 - 1986) could be equipped with <?php echo $this->stencil->addLink('CGA', 'ITH'); ?>, <?php echo $this->stencil->addLink('MDA', 'ITH'); ?>, <?php echo $this->stencil->addLink('EGA', 'ITH'); ?>, or <?php echo $this->stencil->addLink('PGC', 'ITH'); ?> video cards.</li>
                <li>The 8250 UART from the XT was upgraded to the 16450, although this chip still had only a one byte buffer, so high-speed serial communication was just as problematic as with the XT.</li>
                <li><?php echo $this->stencil->addLink('PC DOS', 'DOS'); ?> 3.0 was released to support the new AT features, including preliminary kernel support for networking (which was fully supported in a later version 3.x release.)</li>
                <li>The AT was equipped with a physical lock that could be used to prevent access to the computer by disabling the keyboard.</li>
                <li>Just like its <?php echo $this->stencil->addLink('IBM PC', 'PC'); ?> predecessor, the PC AT supported an optional math co-processor chip, the Intel 80287, for faster execution of floating point operations.</li>
            </ul>
        </div>
    </div>
<?php endif; ?>