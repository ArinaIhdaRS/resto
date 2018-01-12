
		
		<!-- pesan -->
			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<br>
						<h1 class="fh5co-heading-colored">Foods</h1>
						<br>
					</div>
				</div>
				<div class="row">
					<?php foreach ($food as $menu) : ?>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/<?= $menu->gambar ?>" style="width:82%" data-toggle="modal" data-target="#modaldetail">
							</a>
						</p>
						
						<p>
							<a data-toggle="modal" data-target="modaldetail" onclick="detail()">
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