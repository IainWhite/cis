<div class="row">
    <div class="col-lg-12 col-md-12">

<p>Bla Bla Bla</p>

<?php
//$this->stencil->title('SB Page');
echo $this->stencil->setHeadline('SB Page') . '<br />';
echo $this->stencil->meta(array('keywords' => 'cats, animals, dogs')) . '<br />';

$this->stencil->slice('ss1');
$this->stencil->sub('project-management/agile/scrum/sa', NULL, TRUE);

?>

<hr>
[END PAGE]
</div>
</div>