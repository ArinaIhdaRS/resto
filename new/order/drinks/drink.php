<?php 	 
//Get all Products
$query = "SELECT * FROM menu WHERE kategori = 'Minuman'";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll();

?>

		<!-- pesan -->
			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<br>
						<h1 class="fh5co-heading-colored">Drinks</h1>
						<br>
					</div>
				</div>
				<div class="row">
					<?php foreach($products as $menu):?>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/<?php print $menu['gambar']?>" style="width:82%">
							</a>
						</p>
						<p>
							<a data-toggle="modal" data-target="#myModal" onclick="detail()">
								<?php print $menu['nama']?>
							</a><br><small id="containerrr">IDR <?php print $menu['harga']?></small>
						</p>
						<form method="post" action="index.php?action=addcart">
						<p>
							<button type="submit" class="btn btn-primary btn-outline">Add</button>
                			<input type="hidden" name="id_menu" value="<?php print $menu['id_menu']?>">
							<!--<a href="add.php?action=add&id=<?php //print $menu['id_menu']?>" class="btn btn-primary btn-outline">Add</a>-->
						</p>
						</form>
					</div>
					<?php endforeach; ?>
				
				</div>
			</div>
			<!--pesan >-->


			
		</div>
	</div>


</body>
</html>