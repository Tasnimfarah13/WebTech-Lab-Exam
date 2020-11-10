<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: Login.php");
  }
?>


<html>
	<title>Dashboard</title>
	<body>
		<?php
               $books = simplexml_load_file("books.xml");
               if (count($books->name) == 0) {
               	 echo "<h1>There are no books</h1>";
               }
               else { ?>
			            <table>
						<tr>
							<td>
								<a href="AddBook.php"> Add Book </a>
							</td>
						</tr>
						<tr>
							<td> sr no. </td>
							<td> name </td>
							<td> publisher </td>
							<td> isbn </td>
							<td> price </td>
							<td> image </td>
							<td> delete </td>
						</tr>

					</table>
               <?php }
			?> 

	</body>
</html>