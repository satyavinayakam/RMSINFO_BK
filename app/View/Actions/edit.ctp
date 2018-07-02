<h1 class="page-heading"><?php echo __('Edit Action'); ?></h1>
<div class="row">
    <div class="col-lg-12">
          <div class="the-box">
                <div class=" form">
    <?php 
		 echo $this->Form->create('Action',array(
                                                                      'inputDefaults'=>array('label' => false,'div' => false),
                                                                      'class'=>'form-horizontal',
                                                                      'role' =>'form'
                                                                     )
                                                ); 
        ?>
	<?php
		echo $this->Form->input('id');
	?>

		<div class="form-group ">
                            <label for="module_id" class="control-label col-lg-2"><?php echo __("Module");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("module_id",array(
                                                                                "class" => "form-control",
                                                                                "id" => "module_id",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"module_id","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>
                <div class="form-group ">
                            <label for="frontend_module_id" class="control-label col-lg-2"><?php echo __("Frontend Module");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("frontend_module_id",array(
                                                                                "class" => "form-control",
                                                                                "id" => "frontend_module_id",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"frontend_module_id","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>    
		<div class="form-group ">
                            <label for="name" class="control-label col-lg-2"><?php echo __("Name");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("name",array(
                                                                                "type"  => "text",
                                                                                "placeholder" => __("Name"),
                                                                                "class" => "form-control",
                                                                                "id" => "name",
                                                                                'readOnly' => true,
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>
		<div class="form-group ">
                            <label for="display_name" class="control-label col-lg-2"><?php echo __("Display Name");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("display_name",array(
                                                                                "type"  => "text",
                                                                                "placeholder" => __("Display Name"),
                                                                                "class" => "form-control",
                                                                                "id" => "display_name",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"display_name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>
		<div class="form-group ">
                        <label for="status" class="control-label col-lg-2"><?php echo __("Status");?></label>
                        <div class="col-lg-8">
                        <?php
                               echo $this->Form->select("status",array(1 => "Active",2 => "In-Active"),
                                                                     array(
                                                                            "empty" => false,
                                                                            "default" => 1,
                                                                            "class" => "form-control",
                                                                            "id" => "status",
                                                                            "error" => array("attributes" => array("wrap" => "label","for"=>"status","class"=> "error"))
                                                                           )
                                                      );
                         ?>
                         </div>
                        </div><div class='form-group'>
                       <div class='col-lg-offset-2 col-lg-10'>
                       <?php
                            echo $this->Js->submit('Save', array('class'   => 'btn btn-info',
                                                                  'type'    => 'json',
                                                                  'success' => "
                                                                              if(data == 1){
                                                                              $('#contentWrapper').fadeOut(1600, 'linear');
                                                                                loaddata('{$this->webroot}/{$this->name}/index/','contentWrapper');
                                                                              }",
                                                                              'update' => '#contentWrapper',
                                                                              'div'    => false                    
                                                                )
                                                    );
                            echo '&nbsp;';                                              
                            echo $this->Js->link(__('Cancel'),
                                                   "/{$this->name}/index/",
                                                    array(
                                                            'before'  => $this->Js->get('#loader')->effect('fadeIn', array('buffer' => false)),
                                                            'success' => $this->Js->get('#loading')->effect('fadeOut', array('buffer' => false)),
                                                            'update'  => '#contentWrapper',
                                                            'async'   => false,
                                                            'escape'  => false,
                                                            'class'   => 'btn btn-default',
                                                         )
                                                );                                              
                        ?>
                        </div>
                    </div>           </div>

    </div>
</div>
<?php echo $this->Js->writeBuffer();?>   
