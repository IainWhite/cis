<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Camputers Lynx'); ?>
        <p>The <strong>Lynx</strong> was an 8-bit British home computer that was first released in early 1983 as a 48K model. Several models were available with 48K, 96K or 128K RAM. It was possible to reach 192K with RAM expansions on board. John Shireff designed the hardware and Davis Jansons the firmware.</p>
        <p>The machine was based around a Z80A CPU clocked at 4 MHz, (6 MHz for the 128/192K models) and featured a Motorola 6845 as video controller. It was possible to run <?php echo $this->stencil->addLink('CP/M', 'OS'); ?> with the optional 5.25" floppy disk-drive on the 96K and 128K models.</p>
        <p>The machine was quite advanced for its time. A 48K machine cost 225GBP, a 96K machine 299GBP and a 128K machine 345GBP. When compared to its competitors, such as the <?php echo $this->stencil->addLink('Sinclair ZX Spectrum', 'ITH'); ?> and the Oric 1, it was also fairly highly priced. Camputers rebranded and relaunched each machine on several occasions, with the 48K machine renamed the Leisure, and the 128K machine renamed as the <em>Laureate</em>.</p>
        <p>The machine had very little software available, and survived only until Camputers ceased trading in June 1984. It is believed that approximately 30,000 Camputers Lynx units were sold worldwide.</p>
        <p>Anston Technology took over in November 1984 and a re-launch was planned but never happened. In June 1986, Anston sold everything - hardware, design rights and thousands of cassettes - to the National Lynx User Group. The group planned to produce a Super-Lynx but was too busy supplying spares and technical information to owners of existing models, and the project never came into being.</p>
        <p>Unique features of this computer (compared to other home computers at the time) includes:</p>
        <ul>
            <li>A quite large BASIC, including graphics commands, in line CODE sentence for inclusion of machine code in hex. All numbers were floating point BCD numbers (even line numbers).</li>
            <li>A monitor program allowed hex dumps, copy, compare etc.</li>
            <li>The computer always ran in "high" resolution graphics mode (256x252 pixels in eight colours) using 6 times 10 pixels characters. Only a few bytes of graphic memory could be manipulated during the horizontal sync period, and thus graphics were extremely slow compared to most other computers.</li>
            <li>Up to 192 kB of RAM and 20 kB of ROM (16 kB on the smallest model) on a 16 bit address bus was implemented using special hardware. As a consequence, certain RAM areas shadowed by ROM could only be used for data storage and the video memory had a green and alternative green bank that could be switched by a hardware register.</li>
            <li>For sound it had a simple (4 bit) DAC. A comparator was included to serve as an ADC (primarily used for reading from tape drives).</li>
        </ul>
        <p>Compared to, for example, the <?php echo $this->stencil->addLink('Commodore 64', 'ITH'); ?>, the <?php echo $this->stencil->addLink('BASIC', 'L'); ?> was more extensive and faster and resolution of graphics was better; but computer games on the other hand suffered from the special implementation and lack of hardware for sound and sprites. Thus, it was better for exploring programming or working with maths.</p>
    </div>
</div>