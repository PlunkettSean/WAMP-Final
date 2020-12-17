<style>
	h1 {text-align: center;}
	p {text-align: center;}
	div {text-align: center;}
	
}
</style>

<script>
	function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}       
		}
	}
</script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<h1>Games</h1>
<div class="container">
	<a class="btn btn-success" href="/final_project/newGame" role="button">Add New Game</a>
	<p></p>
	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>Game Title</th>
				<th>Release Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$connect = new mysqli('localhost','root', '');
			if (!$connect) {
				die(mysql_error());
			}
			mysqli_select_db($connect,'gamecentral');
			$results = mysqli_query($connect,"SELECT * FROM games");
			while($row = mysqli_fetch_array($results)) {
				?>
				<tr>
					<td><?php echo $row['title']?></td>
					<td><?php echo $row['releaseDate']?></td>
				</tr>

				<?php
			}
			?>
		</tbody>
	</table>
</div>


