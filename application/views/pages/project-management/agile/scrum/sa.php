<h3>SA PAGE</h3>

<p>Bla Bla Bla</p>

<?php
$this->stencil->title('SA Page');
$this->stencil->meta(array('description' => 'Description2', 'keywords' => 'A, B, C'));
echo $this->stencil->dumpStencil();

if (!$this->stencil->getIsSub()) {
    echo '<p>Not a Sub</p>';
}
?>

<hr>
[END PAGE]