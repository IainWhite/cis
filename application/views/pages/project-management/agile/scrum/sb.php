<h3>SB PAGE</h3>

<p>Bla Bla Bla</p>

<?php
$this->stencil->title('SB Page');
$this->stencil->meta(array('description' => 'This is my description!', 'keywords' => 'cats, animals, dogs'));
$this->stencil->slice('ss1');
echo '<a href="/wert">a link</a>';
echo add_link('Yummy');
?>