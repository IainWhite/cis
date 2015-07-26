<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Extended Graphics Array (XGA)'); ?>
        <p><strong>XGA</strong>, the <strong>Extended Graphics Array</strong>, is an <?php echo $this->stencil->addLink('IBM', 'C'); ?> display standard introduced in 1990. Later it became the most common appellation of the 1024x768 pixels display resolution, but the official definition is broader than that. It was not a new and improved replacement for <?php echo $this->stencil->addLink('Super VGA', 'VID'); ?>, but rather became one particular subset of the broad range of capabilities covered under the "Super VGA" umbrella.</p>
        <p>The initial version of XGA (and its predecessor, the <?php echo $this->stencil->addLink('IBM 8514', 'VID'); ?>) expanded upon IBM's older <?php echo $this->stencil->addLink('VGA', 'VID'); ?> by adding support for four new screen modes (three, for the 8514), including one new resolution.</p>
        <p>Like the 8514, XGA offered fixed function hardware acceleration to offload processing of 2D drawing tasks. Both adaptors allowed offloading of line draw, bitmap copy (bitblt), and colour-fill operations from the host CPU. XGA's acceleration was faster than 8514's, and more comprehensive, supporting more drawing primitives, the VGA-res hi-colour mode, versatile "brush" and "mask" modes, system memory addressing functions, and a single simple hardware sprite typically used to providing a low CPU load mouse pointer. It was also capable of wholly independent function, as it incorporated support for all existing VGA functions and modes - the 8514 itself was a simpler add-on adaptor that required a separate VGA to be present. It should be noted that, as they were designed for use with IBM's own range of fixed-frequency monitors, neither adaptor offered support for 800x600 <?php echo $this->stencil->addLink('SVGA', 'VID'); ?> modes.</p>
        <p><strong>XGA-2</strong> added a 24-bit DAC, but this was used only to extend the available master palette in 256-colour mode, e.g. to allow true 256-greyscale output instead of the 64 grey levels previously available; there was still no direct Truecolor mode despite the adaptor featuring enough default onboard VRAM (1MB) to support it. Other improvements included provision of the previously missing 800x600 resolution (using an SVGA or multisync monitor) in up to 65,536 colours, faster screen refresh rates in all modes (including non-interlace, flicker-free output for 1024x768), and improved accelerator performance and versatility.</p>
        <p>IBM licensed the XGA technology and architecture to certain third party hardware developers, and its characteristic modes (although not necessarily the accelerator functions, nor the <?php echo $this->stencil->addLink('MCA', 'VID'); ?> data-bus interface) were aped by many others. These accelerators typically did not suffer from the same limitations on available resolutions and refresh rate, and featured other now-standard modes like 800x600 (and 1280x1024) at various colour depths (up to 24 bpp Truecolor) and interlaced, non-interlaced and flicker-free refresh rates even before the release of the XGA-2.</p>
        <p>All standard XGA modes have a 4:3 aspect ratio with square pixels, although this does not hold for certain standard VGA and third-party extended modes (640x400, 1280x1024).</p>
        <p>XGA should not be confused with <strong>EVGA (Extended Video Graphics Array)</strong>, a contemporaneous <?php echo $this->stencil->addLink('VESA', 'C'); ?> standard that also has 1024x768 pixels. It should also not be confused with the <strong>Expanded Graphics Adapter</strong>, a peripheral for the <strong>IBM 3270 PC</strong> which can also be referred to as XGA.</p>
    </div>
</div>