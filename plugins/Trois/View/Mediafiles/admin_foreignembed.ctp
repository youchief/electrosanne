<div class="media form">
<?php echo $this->Form->create('Mediafile');?>
	<fieldset>
		<legend><?php echo __('Admin Add Mediafile'); ?></legend>
	<?php
		echo $this->Form->input('Mediafile.name');
		echo $this->Form->input('Mediafile.src',array('type'=>'hidden'));
		echo $this->Form->input('Mediafile.embed');
		echo $this->Form->input('Mediafile.description',array( 'label' => 'Description and #tags, or @tags','type' => 'textarea' ));
                
                                    echo $this->Form->input('Medialink.foreign_model',array('type'=>'hidden','name'=>'data[MediaLink][foreign_model]','value'=>$foreign_model));
                                    echo $this->Form->input('Medialink.foreign_field',array('type'=>'hidden','name'=>'data[MediaLink][foreign_field]','value'=>$foreign_field));
                                    echo $this->Form->input('Medialink.foreign_key',array('type'=>'hidden','name'=>'data[MediaLink][foreign_key]','value'=>$foreign_key));
	?>
	</fieldset>
	
	<div id="metadataArea">
	    <h2>Metadata</h2>
	    <?php 
			echo $this->element('datafield_edit');
		?>
	</div>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
