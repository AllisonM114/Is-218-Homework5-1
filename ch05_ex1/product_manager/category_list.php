<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
    </table>

    <h2>Add Category</h2>
      <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_category" />

	<label>Name:</label>
	<input type="input" name="name" />
	<input id="add_category_button" type="submit" value="Add" />
      </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
