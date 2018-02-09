<table border="2">
    <?php

   $tab = array(1,2,30);
    $monTab = array(
        'var1'=>'test',
        'var2'=> $tab,
        'var3'=> 1
    );

    foreach ($monTab as $cle=>$val){

    ?>
    <tr>
        <td><?php echo $cle ;?></td>
        <td><?php print_r($val)  ;?></td>
    </tr>
<?php } ?>
</table>

