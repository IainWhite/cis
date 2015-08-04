<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('RGB Colour Model'); ?>
        <p>The <strong>RGB colour model</strong> is an additive colour model in which red, green, and blue light are added together in various ways to reproduce a broad array of colours.</p>
        <p>The name of the model comes from the initials of the three additive primary colours, Red, Green, and Blue.</p>
        <p>The main purpose of the RGB colour model is for the sensing, representation, and display of images in electronic systems, such as televisions and computers, though it has also been used in conventional photography.</p>
        <p>Before the electronic age, the RGB colour model already had a solid theory behind it, based in human perception of colours.</p>
        <p>RGB is a device-dependent colour model: different devices detect or reproduce a given RGB value differently, since the colour elements (such as phosphors or dyes) and their response to the individual R, G, and B levels vary from manufacturer to manufacturer, or even in the same device over time.</p>
        <p>Thus an RGB value does not define the same colour across devices without some kind of colour management.</p>
        <p>Typical RGB input devices are colour TV and video cameras, image scanners, and digital cameras.</p>
        <p>Typical RGB output devices are TV sets of various technologies (<?php echo $this->stencil->addLink('CRT', 'ITH'); ?>, <?php echo $this->stencil->addLink('LCD', 'ITH'); ?>, <?php echo $this->stencil->addLink('plasma', 'ITH'); ?>, etc.), computer and mobile phone displays, video projectors, multicolour LED displays, and large screens such as JumboTron.</p>
        <p>Colour printers, on the other hand, are not RGB devices, but subtractive colour devices (typically <?php echo $this->stencil->addLink('CMYK', 'IT'); ?> colour model).</p>

        <h2>Colour Depth</h2>
        <p>The RGB colour model is the most common way to encode colour in computing, and several different binary digital representations are in use.</p>
        <p>The main characteristic of all of them is the quantization of the possible values per component (technically a Sample (signal)) by using only integer numbers within some range, usually from 0 to some power of two minus one (2<sup>n</sup> - 1) to fit them into some bit groupings.</p>
        <p>Encodings of 1, 2, 4, 5, 8, and 16 bits per colour are commonly found; the total number of bits used for an RGB colour is typically called the colour depth.</p>

    </div>
</div>