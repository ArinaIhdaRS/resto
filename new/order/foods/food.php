
		
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
					
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    	<div class="modal-dialog modal-sm" role="document">
                        	<div class="modal-content">
                            	<div class="modal-header">
                                	<h5 class="modal-title" id="exampleModalLabel">Order</h5>
                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        	<span aria-hidden="true">&times;</span>
                                    	</button> 
                            		</div>
                            		<div class="modal-body">
                     	       			Pesan ini?
                            		</div>
                            		<div class="modal-footer">                        
                                	<a href="http://localhost/new/resto/new/order/foods" class="btn btn-default">Yes</a>
                                	<button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                            	</div>
                        	</div>
                    	</div>
                	</div>
				</div>
				
			</div>
			<!--pesan >-->


			
		</div>
	</div>

</body>
</html>