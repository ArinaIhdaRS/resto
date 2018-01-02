
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
					<?php foreach ($drink as $menu) : ?>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/gurame asam manis.png" style="width:82%">
							</a>
						</p>
						<p>
							<a data-toggle="modal" data-target="#myModal" onclick="detail()">
								<?= $menu->nama ?>
							</a><br><small id="containerrr">IDR <?= $menu->harga ?></small>
						</p>
						<p><a href="#" class="btn btn-primary btn-outline">Pesan</a></p>
					</div>
					<?php endforeach; ?>
				
				</div>
			</div>
			<!--pesan >-->


			
		</div>
	</div>


</body>
</html>