<h2 class="page-heading text-left col-sm-6 text-center"><?php echo __('Add New Resource'); ?></h2><br>
<div class="container">
<div class="row">
    <div class="col-sm-8">

                
    <?php 
		 echo $this->Form->create('Resource',array(
                                                                      'inputDefaults'=>array('label' => false,'div' => false),
                                                                      'class'=>'form-horizontal',
                                                                      'role' =>'form'
                                                                     )
                                                ); 
        ?>

		
		<div class="form-group ">
                    <div class="row">
                       
                             <label for="name" class="control-label col-sm-2"><?php echo __("Name");?></label>
                            <div class="col-sm-8">
                               
                            <?php
                                   echo $this->Form->input("name",array(
                                                                                "type"  => "text",
                                                                                "placeholder" => __("Name"),
                                                                                "class" => "form-control",
                                                                                "id" => "name",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>
                </div>
		<div class="form-group ">
                    <div class="row">
                            <label for="display_name" class="control-label col-lg-2"><?php echo __("Age");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("age",array(
                                                                                "type"  => "text",
                                                                                "placeholder" => __("age"),
                                                                                "class" => "form-control",
                                                                                "id" => "age",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"display_name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                    </div></div>
							<div class="form-group ">
                            <div class="row">
                            <label for="display_name" class="control-label col-lg-2"><?php echo __("Staff No");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("staff_no",array(
                                                                                "type"  => "text",
                                                                                "placeholder" => __("staff no"),
                                                                                "class" => "form-control",
                                                                                "id" => "age",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"display_name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div></div>
							<div class="form-group ">
                                                            
                            <div class="row">
                            <label for="display_name" class="control-label col-lg-2"><?php echo __("Address");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->text("address",array(
                                                                                "type"  => "textarea",
                                                                                "placeholder" => __("address"),
                                                                                "class" => "form-control",
                                                                                "id" => "address",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"display_name","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div></div>
							<div class="form-group ">
                           <div class="row">
                            <label for="display_name" class="control-label col-lg-2"><?php echo __("Gender");?></label>
                            <div class="col-lg-8">
                            <?php echo $this->Form->radio('gender', array(
								'Male' => 'Male',
								'Female' => 'Female',
							), 
							array(
								'legend' => false,
								'value' => 'Male',    
							)
						);?>
                             </div>
                           </div></div>
							<div class="form-group ">
                            <div class="row">
                            <label for="action_id" class="control-label col-lg-2"><?php echo __("State");?></label>
                            <div class="col-lg-8">
                            <?php
                                   echo $this->Form->input("state_id",array(
                                                                                'type'=>'select',
																				'empty' => '--Select State--',
																				'options'=> $states,
																				"class" => "form-control",
                                                                                "id" => "state_id",
                                                                                "error" => array("attributes" => array("wrap" => "label","for"=>"action_id","class"=> "error"))
                                                                               )
                                                          );
                             ?>
                             </div>
                            </div>
                            </div>
		<div class="form-group ">
                    <div class="row">
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
                    </div>
                        </div><div class='form-group'>
                            <div class="row">
                            <div class="col-lg-2"></div>
                       <div class='col-lg-10'>
                       <?php
                            echo $this->Js->submit('Save', array('class'   => 'btn btn-success',
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
                             echo $this->Js->link(__("Delete"),
                                     "/{$this->name}/delete/{$this->request->data['Resource']['id']}",
                                     array(
                                                'before'  => $this->Js->get('#loader')->effect('fadeIn', array('buffer' => false)),
                                                'success' => $this->Js->get('#loading')->effect('fadeOut', array('buffer' => false)),
                                                'update'  => '#contentWrapper',
                                                'async'   => false,
                                                'escape'  => false,
                                                'class'   => 'btn btn-danger btn-xs edit-delete',
                                                'confirm' => 'Are you sure you wish to delete?'
                                           )
                                     );                                              
                        ?>
                        </div>
                    </div>
            </div>
    </div>
</div>
</div></div>
<?php echo $this->Js->writeBuffer();?>   
