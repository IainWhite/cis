<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SHA-0 Secure Hash Algorithm'); ?>
        <p>At CRYPTO 98, two French researchers, Florent Chabaud and Antoine Joux, presented an attack on SHA-0 (Chabaud and Joux, 1998): collisions can be found with complexity 261, fewer than the 280 for an ideal hash function of the same size.</p>
        <p>In 2004, Biham and Chen found near-collisions for SHA-0 two messages that hash to nearly the same value; in this case, 142 out of the 160 bits are equal. They also found full collisions of SHA-0 reduced to 62 out of its 80 rounds.</p>
        <p>Subsequently, on 12 August 2004, a collision for the full SHA-0 algorithm was announced by Joux, Carribault, Lemuet, and Jalby. This was done by using a generalisation of the Chabaud and Joux attack. Finding the collision had complexity 251 and took about 80,000 CPU hours on a supercomputer with 256 Itanium 2 processors. (Equivalent to 13 days of full-time use of the computer.)</p>
        <p>On 17 August 2004, at the Rump Session of CRYPTO 2004, preliminary results were announced by Wang, Feng, Lai, and Yu, about an attack on <?php echo $this->stencil->addLink('MD5', 'IT'); ?>, SHA-0 and other hash functions. The complexity of their attack on SHA-0 is 240, significantly better than the attack by Joux et al.</p>
        <p>In February 2005, an attack by Xiaoyun Wang, Yiqun Lisa Yin, and Hongbo Yu was announced which could find collisions in SHA-0 in 239 operations.</p>
        <p>Another attack in 2008 applying the boomerang attack brought the complexity of finding collisions down to 233.6, which is estimated to take 1 hour on an average PC.</p>
        <p>In light of the results for SHA-0, some experts suggested that plans for the use of <?php echo $this->stencil->addLink('SHA-1', 'IT'); ?> in new cryptosystems should be reconsidered. After the CRYPTO 2004 results were published, NIST announced that they planned to phase out the use of SHA-1 by 2010 in favor of the <?php echo $this->stencil->addLink('SHA-2', 'IT'); ?> variants.</p>
    </div>
</div>