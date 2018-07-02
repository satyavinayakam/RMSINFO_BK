<div class="actions view">
<h2><?php echo __('Action'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($action['Action']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($action['Module']['name'], array('controller' => 'modules', 'action' => 'view', $action['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($action['Action']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($action['Action']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Added By'); ?></dt>
		<dd>
			<?php echo h($action['Action']['added_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Added Date'); ?></dt>
		<dd>
			<?php echo h($action['Action']['added_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($action['Action']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($action['Action']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($action['Action']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action'), array('action' => 'edit', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action'), array('action' => 'delete', $action['Action']['id']), array(), __('Are you sure you want to delete # %s?', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Lists'), array('controller' => 'action_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action List'), array('controller' => 'action_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Action Lists'); ?></h3>
	<?php if (!empty($action['ActionList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Display Name'); ?></th>
		<th><?php echo __('Added By'); ?></th>
		<th><?php echo __('Added Date'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($action['ActionList'] as $actionList): ?>
		<tr>
			<td><?php echo $actionList['id']; ?></td>
			<td><?php echo $actionList['action_id']; ?></td>
			<td><?php echo $actionList['name']; ?></td>
			<td><?php echo $actionList['display_name']; ?></td>
			<td><?php echo $actionList['added_by']; ?></td>
			<td><?php echo $actionList['added_date']; ?></td>
			<td><?php echo $actionList['modified_by']; ?></td>
			<td><?php echo $actionList['modified_date']; ?></td>
			<td><?php echo $actionList['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'action_lists', 'action' => 'view', $actionList['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'action_lists', 'action' => 'edit', $actionList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'action_lists', 'action' => 'delete', $actionList['id']), array(), __('Are you sure you want to delete # %s?', $actionList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Action List'), array('controller' => 'action_lists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
