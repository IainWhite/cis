<div class="row">
    <div class="col-lg-12 col-md-12">

<p>Bla Bla Bla</p>

<?php
//$this->stencil->title('SB Page');
echo $this->stencil->setHeadline('SB Page') . '<br />';
echo $this->stencil->meta(array('keywords' => 'cats, animals, dogs')) . '<br />';
echo $this->stencil->addLink('C++', 'L') . '<br />';
echo $this->stencil->addLink('PHP', 'L') . '<br />';
echo $this->stencil->addLink('Apache', 'web-development/web-servers', 'Apache Server') . '<br />';
echo $this->stencil->addLink('Test1', 'PM', '', TRUE) . '<br />';
echo $this->stencil->addLink('A Test With Spaces', 'B') . '<br />';
echo $this->stencil->addLink('BBC BASIC', 'L') . '<br />';
echo $this->stencil->addExternalLink('CodeIgniter', 'https://ellislab.com/codeigniter/') . '<br />';
echo $this->stencil->addWikiLink('CodeIgniter') . '<br />';
echo $this->stencil->addRFCLink('2468') . '<br />';

echo $this->stencil->elapsedYears('01/02/2000') . '<br />';
echo $this->stencil->elapsedYears('01/02/2000', TRUE) . '<br />';
echo $this->stencil->elapsedYears('01/02/2000', FALSE, TRUE) . '<br />';
echo $this->stencil->elapsedYears('01/02/2000', TRUE, TRUE) . '<br />';

$this->stencil->slice('ss1');
$this->stencil->sub('project-management/agile/scrum/sa', NULL, TRUE);
echo $this->stencil->dumpStencil();

echo 'Templates v' . $this->stencil->getVersion() . '<br>';
echo 'CodeIgniter v' .  $this->stencil->getVersion('CI') . '<br>';
echo 'PHP v' .  $this->stencil->getVersion('PHP') . '<br>';
echo 'Zend v' .  $this->stencil->getVersion('Zend') . '<br>';
echo 'PostgreSQL v' .  $this->stencil->getVersion('PostgreSQL') . '<br>';
echo 'MySQL v' .  $this->stencil->getVersion('MySQL') . '<br>';

echo $this->stencil->addCodeSnippet('php.php');

echo '<hr>';
echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre');

echo '<hr>';
echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', FALSE, NULL, TRUE);

echo '<hr>';
echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', TRUE, NULL, TRUE);


echo '<hr>';
echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', TRUE, NULL, FALSE);

?>
<hr>
[END PAGE]
</div>
</div>