<h3>SB PAGE</h3>

<p>Bla Bla Bla</p>

<?php
$this->stencil->title('SB Page');
$this->stencil->meta(array('description' => 'This is my description!', 'keywords' => 'cats, animals, dogs'));
$this->stencil->slice('ss1');
$this->stencil->sub('project-management/agile/scrum/sa', NULL, TRUE);
echo add_link('Yummy');
echo $this->stencil->dumpStencil();

echo 'Templates v' . $this->stencil->getVersion() . '<br>';
echo 'CodeIgniter v' .  $this->stencil->getVersion('CI') . '<br>';
echo 'PHP v' .  $this->stencil->getVersion('PHP') . '<br>';
echo 'Zend v' .  $this->stencil->getVersion('Zend') . '<br>';
echo 'PostgreSQL v' .  $this->stencil->getVersion('PostgreSQL') . '<br>';
echo 'MySQL v' .  $this->stencil->getVersion('MySQL') . '<br>';
?>

<hr>
[END PAGE]