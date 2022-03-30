<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h1>АДМИНКА.Управление товарами</h1>
<a href="/admin/product/create" class="btn btn-default">Добавить товар</a>
<h3><a href="/admin/product">добавить товаров</a>добавить товаров</h3>
<h3>Список товаров</h3>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
	</tr>
	<?php foreach ($productsList as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="редактировать">edit</a></td>
			<td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="удалить">delete</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>