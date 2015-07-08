<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('AMD x86 Microarchitecture'); ?>
        <ul>
            <li><?php echo $this->stencil->addLink('AMD K5', 'CPU'); ?> - AMD's first original microarchitecture. The K5 was based on the AMD Am29000 micro architecture with the addition of an x86 decoder. Although the design was similar in idea to a <?php echo $this->stencil->addLink('Pentium Pro', 'CPU'); ?>, the actual performance was more like that of a <?php echo $this->stencil->addLink('Pentium', 'CPU'); ?>.</li>
            <li><?php echo $this->stencil->addLink('AMD K6', 'CPU'); ?> - The K6 was not based on the K5 and was instead based on the Nx686 processor that was being designed by NexGen when that company was bought by AMD. The K6 was generally pin-compatible with the <?php echo $this->stencil->addLink('Intel Pentium', 'CPU'); ?> (unlike NexGen's existing processors).
                <ul>
                    <li>AMD K6-2 - An improved K6 with the addition of the 3DNow! SIMD instructions.</li>
                    <li>AMD K6-III - A further improved K6 with three levels of cache - 64KB L1, 256KB full-speed on-die L2, and a variable (up to 2MB) L3.</li>
                </ul>
            </li>
            <li><?php echo $this->stencil->addLink('AMD K7', 'CPU'); ?> - Microarchitecture of the [AMD Athlon classic] and [Athlon XP] microprocessors. Was a very advanced design for its day.</li>
            <li><?php echo $this->stencil->addLink('AMD K8', 'CPU'); ?> - based on the K7 but was extended to 64 bits, added an integrated memory controller, HyperTransport communication fabric, L2 cache sizes up to 1MB (1128KB total cache), and SSE2. Later K8 added SSE3. The K8 was the first mainstream Windows-compatible 64-bit microprocessor and was released 22 April 2003. K8 replaced the traditional front side bus with a HyperTransport communication fabric. Also known as AMD Family 15. SledgeHammer was the first design which implemented it.</li>
            <li><?php echo $this->stencil->addLink('AMD K10', 'CPU'); ?> - based on the K8 microarchitecture. Shared Level 3 Cache, 128-bit floating point units, AMD-V Nested Paging virtualisation, and HyperTransport 3.0 are introduced. Barcelona was the first design which implemented it.</li>
            <li><?php echo $this->stencil->addLink('AMD Fusion', 'CPU'); ?> - Include CPU cores, Graphics processing unit and Northbridge in the same chip. Llano was the first design which implemented it.</li>
            <li><?php echo $this->stencil->addLink('AMD Bobcat', 'CPU'); ?> - a new distinct line, which is aimed in the 1W to 10W power microprocessor category. Ontario and Zacate were the first designs which implemented it.
                <ul>
                    <li>Jaguar - Successor to Bobcat. Kabini and Temash.</li>
                    <li>Puma - Successor to Jaguar. Beema and Mullins.</li>
                </ul>
            </li>
            <li><?php echo $this->stencil->addLink('AMD Bulldozer', 'CPU'); ?> - the successor of K10. Bulldozer is designed for processors in the 10W to 220W category, implementing XOP, FMA4 and CVT16 instruction sets. Orochi was the first design which implemented it.
                <ul>
                    <li>Piledriver</li>
                    <li>Steamroller</li>
                    <li>Excavator</li>
                </ul>
            </li>
            <li><?php echo $this->stencil->addLink('AMD Zen', 'CPU'); ?> - the successor of Bulldozer.</li>
        </ul>
    </div>
</div>