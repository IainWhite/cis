<h3>SA PAGE</h3>

<p>Another Bla Bla Bla</p>

<?php
//$this->stencil->title('SA Page');
echo $this->stencil->setHeadline('SA Page');
$this->stencil->meta(array('keywords' => 'A, B, C'));
echo $this->stencil->dumpStencil();

if (!$this->stencil->getIsSub()) {
    echo '<p>Not a Sub</p>';
}
?>

<hr>
[END PAGE]