<?php




// view
// echo $this->table->generate($results); 
// echo $this->pagination->create_links();
?>
<div class="row">
    <div class="col-md-3">
      <?php //echo $this->element('main_menu');?> </div>
    <div class="col-md-8 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "List";//echo __('Roles'); ?>  </h3>
            </div>
            <div class="panel-body">




<div class="roles index">
    <div class="form-group">
        <div class="col-sm-10">
        <?php echo anchor(base_url().'index.php/{controller_name_l}/add/','Add','class="btn btn-default"');?>
        </div>
    </div>

<?php
if(!$results){
    echo '<h1>No Data</h1>';
    
}else{
    $header = array_keys($results[0]);
    for($i=0;$i<count($results);$i++){
                $id = array_values($results[$i]);
                $results[$i]['Edit']     = anchor(base_url().'index.php/{controller_name_l}/edit/'.$id[0],'Edit');
                $results[$i]['Delete']   = anchor(base_url().'index.php/{controller_name_l}/delete/'.$id[0],'Delete',array('onClick'=>'return deletechecked(\' '.base_url().'index.php/{controller_name_l}/delete/'.$id[0].' \')'));                                          
                array_shift($results[$i]);                        
            }
            
    $clean_header = clean_header($header);
    array_shift($clean_header);
    $this->table->set_heading($clean_header);   
    echo $this->table->generate($results,array('class' => 'table' ));
}
?>
    
    <div class="paging">
    <?php
        if($results){
             
            echo $this->pagination->create_links();
        }
    ?>
    </div>
</div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function deletechecked(link)
{
    var answer = confirm('Delete item?')
    if (answer){
        window.location = link;
    }
    
    return false;  
}

</script>