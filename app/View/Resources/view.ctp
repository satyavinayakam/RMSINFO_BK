<div class="actionLists view">
<h2><?php echo __('Action List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionList['Action']['name'], array('controller' => 'actions', 'action' => 'view', $actionList['Action']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Added By'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['added_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Added Date'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['added_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($actionList['ActionList']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action List'), array('action' => 'edit', $actionList['ActionList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action List'), array('action' => 'delete', $actionList['ActionList']['id']), array(), __('Are you sure you want to delete # %s?', $actionList['ActionList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action List'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
