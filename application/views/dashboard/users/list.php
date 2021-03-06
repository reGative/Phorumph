<h2>
	<a href="<?php echo URL::site('dashboard'); ?>">Dashboard</a> &mdash;
	List of Users
</h2>
<table>
	<tr>
		<th>ID</th>
		<th>Picture</th>
		<th class="title">Username</th>
		<th>e-mail</th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user->id; ?></td>
		<?php if ($user->picture): ?>
			<td><img src="<?php echo $user->picture; ?>" height="50px"/></td>
		<?php else: ?>
			<td>No User Picture</td>
		<?php endif; ?>
		<td class="title">
			<?php if (Auth::instance()->get_user()->pk() !== $user->id): ?>
				<a href="<?php echo URL::site('dashboard/users/change_username/'.$user->id) ;?>">
					<?php echo $user->username; ?>
				</a>
			<?php else: ?>
				<?php echo $user->username; ?>
			<?php endif; ?>
		</td>
		<td><?php echo $user->email; ?></td>
        <td>
<?php if (Auth::instance()->get_user()->pk() !== $user->id): ?>
<a href="<?php echo URL::site('dashboard/users/delete_user/'.$user->id.'/'.Security::token()); ?>">[x]</a></td>
<?php endif; ?>
	</tr>
	<?php endforeach; ?>
</table>
