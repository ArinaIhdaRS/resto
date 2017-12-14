<div id="fh5co-main">
    <!-- nav atas -->
      <div class="w3-top">
          <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto">
            <div class="w3-center w3-padding-16"><?=$heads ?></div>
          </div>
      </div>

		<!-- content -->
			<div class="fh5co-cards">
				<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Welcome!</h2>
					<div class="fh5co-flex-wrap">
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>Special Today</h5>
							<p align="center"><img src="img/gurame asam manis.png" width="80%"></p>
							<p><a onclick="bahan()">Gurame Asam Manis</a>
								<span><small><br>IDR 30.000</small></span>
							</p>
							<p id="bahan"><small></small></p>
							<p><a href="http://localhost/new/resto/new/order/foods" class="btn btn-md btn-primary">Order</a></p>
							<script type="text/javascript">
								function bahan(){
									var text;
									text = "Lorem ipsum";
									document.getElementById('bahan').innerHTML = text;
								}	
							</script>
						</div>
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>New Menu</h5>
							<p align="center"><img src="img/chicken wings.png" width="80%"></p>
							<p><a onclick="today()">Chicken Wings</a><span><small><br>IDR 30.000</small></span></p>
							<p id="today"><small></small></p>
							<p><a href="http://localhost/new/resto/new/order/fastfoods" class="btn btn-md btn-primary">Order</a></p>
							<script type="text/javascript">
								function today(){
									var text;
									text = "Lorem ipsum";
									document.getElementById('today').innerHTML = text;
								}	
							</script>
						</div>
					</div>		
				</div>
			</div>
		<!-- content -->
		</div>
	</div>

</body>
</html>