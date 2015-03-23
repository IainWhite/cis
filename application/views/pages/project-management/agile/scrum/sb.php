<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SB Page'); ?>
        <p>Bla Bla Bla</p>
        <?php
        echo $this->stencil->meta(array('keywords' => 'cats, animals, dogs')) . '<br />';
        $this->stencil->slice('ss1');
        $this->stencil->sub('project-management/agile/scrum/sa', NULL, TRUE);
        ?>

        <table class="table table-bordered table-hover table-striped shadow-effect-1 table-curved"">
            <tr>
                <th>Version</th>
                <th>Codename</th>
                <th>Release date</th>
            </tr>
            <tr>
                <td>4.10</td>
                <td>Warty Warthog</td>
                <td>20/10/2004</td>
            </tr>
            <tr>
                <td>3.0</td>
                <td>Eat Cheese</td>
                <td>13/03/2003</td>
            </tr>
            <tr>
                <td>2.20</td>
                <td>Big Red Car</td>
                <td>02/01/2002</td>
            </tr>
            <tr>
                <td>1.0</td>
                <td>Time of Tea</td>
                <td>21/09/2000</td>
            </tr>
        </table>
        <hr>
        <p>[END PAGE]</p>
    </div>
</div>