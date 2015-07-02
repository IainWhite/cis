<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('GPL Compatibility'); ?>
        <p>Code licensed under several other licenses can be combined with a program under the <?php echo $this->stencil->addLink('GPL', 'LIC'); ?> without conflict, as long as the combination of restrictions on the work as a whole does not put any additional restrictions beyond what GPL allows. In addition to the regular terms of the GPL, there are additional restrictions and permissions one can apply:</p>
        <ul>
            <li>If a user wants to combine code licensed under different versions of GPL, then this is only allowed if the code with the older GPL version includes an "any later version" statement. For instance, the GPLv3 licensed GNU LibreDWG library can't be used anymore by LibreCAD and FreeCAD who have GPLv2 only dependencies.</li>
            <li>Code licensed under LGPL is permitted to be linked with any other code no matter what license that code has, though the LGPL does add additional requirements for the combined work. LGPLv3 and GPLv2-only can thus commonly not be linked, as the combined Code work would add additional LGPLv3 requirements on top of the GPLv2-only licensed software. Code licensed under LGPLv2.x without the "any later version" statement can be relicensed if the whole combined work is licensed to GPLv2 or GPLv3.</li>
        </ul>
        <p><?php echo $this->stencil->addLink('FSF', 'C'); ?> maintains a list of GPL-compatible free software licenses with many of the most common free software licenses, such as the original <?php echo $this->stencil->addLink('MIT license', 'LIC'); ?>, the <?php echo $this->stencil->addLink('BSD license', 'LIC'); ?> (in its current 3-clause form) and the Artistic License 2.0.</p>
    </div>
</div>