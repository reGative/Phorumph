<h2>Categories:</h2>
<table cellspacing="1" border="1" cellpadding="5" width="50%">
	<tr>
		<th>ID</th>
		<th>Category name and description</th>
		<th>Topics Count</th>
	</tr>
	<?php foreach($categories as $category): ?>
        <?php if (Auth::instance()->logged_in()): ?>
            <?php if ($role_id >= $category->role_id): ?>
        <tr>
            <td>
                <?php echo $category->id; ?>
            </td>
            <td>
                <?php echo $category->name; ?>
            </td>
            <td>
            </td>
        </tr>
<?php endif; ?>
        <?php endif; ?>
        <?php if (!Auth::instance()->logged_in()): ?>
        <?php if ($category->role_id == 1): ?>
        <tr>
            <td>
                <?php echo $category->id; ?>
            </td>
            <td>
                <?php echo $category->name; ?>
            </td>
            <td>
            </td>
        </tr>
<?php endif; ?>
        <?php endif; ?>
	<?php endforeach; ?>
</table>
