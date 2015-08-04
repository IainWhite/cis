<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('HSL and HSV'); ?>
        <p><strong>HSL</strong> and <strong>HSV</strong> are the two most common cylindrical coordinate representations of points in an <?php echo $this->stencil->addLink('RGB', 'IT'); ?> colour model.</p>
        <p>Developed in the 1970s for computer graphics applications, HSL and HSV are used today in colour pickers, in image editing software, and less commonly in image analysis and computer vision.</p>
        <p>The two representations rearrange the geometry of RGB in an attempt to be more intuitive and perceptually relevant than the cartesian (cube) representation, by mapping the values into a cylinder loosely inspired by a traditional colour wheel.</p>
        <p>The angle around the central vertical axis corresponds to "hue" and the distance from the axis corresponds to "saturation".</p>
        <p>These first two values give the two schemes the 'H' and 'S' in their names.</p>
        <p>The height corresponds to a third value, the system's representation of the perceived luminance in relation to the saturation.</p>
        <p>Perceived luminance is a notoriously difficult aspect of colour to represent in a digital format, and this has given rise to two systems attempting to solve this issue:</p>
        <p>HSL (L for lightness) and HSV or HSB (V for value or B for brightness). A third model, <strong>HSI</strong> (I for intensity), common in computer vision applications, attempts to balance the advantages and disadvantages of the other two systems.</p>
        <p>While typically consistent, these definitions are not standardized, and the abbreviations are colloquially interchangeable for any of these three or several other related cylindrical models.</p>
        <p>Note also that while "hue" in HSL and HSV refers to the same attribute, their definitions of "saturation" differ dramatically.</p>
        <p>Both of these representations are used widely in computer graphics, but both are also criticized for not adequately separating colour-making attributes, and for their lack of perceptual uniformity.</p>
        <p>This means that the colour displayed on one monitor for a given HSV value is unlikely to exactly match the colour seen on another monitor unless the two are precisely adjusted to absolute colour spaces.</p>
    </div>
</div>