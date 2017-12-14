
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
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/jus pisang.png" style="width:82%">
							</a>
						</p>
						<p><a href="detail">Jus Pisang</a><br><small id="containerrr">Rp 5000,-</small>
						<select  id="select1" style="margin-left:30%" name="jumlah" onclick="tampilkan()">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>	
						</select></p>
						<p><a href="#" class="btn btn-primary btn-outline">Pesan</a></p>
					</div>
					<script>
						function tampilkan(){
							var jumlah=document.getElementById("select1").value;
							var harga=document.getElementById("containerrr");
							if (jumlah=="1"){
								harga.innerHTML="Rp 5000,-";
							}else if (jumlah=="2"){
								harga.innerHTML="Rp 10000,-";
							}else if (jumlah=="3"){
								harga.innerHTML="Rp 15000,-";
							}else if (jumlah=="4"){
								harga.innerHTML="Rp 20000,-";
							}else if (jumlah=="5"){
								harga.innerHTML="Rp 25000,-";
							}
						}
					</script>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/strawberry iced.png" style="width:82%">
							</a>
						</p>
						<p><a href="detail">Strawberry Iced Tea</a><small><br>Rp 30.000,-</small></p>
						<p><a href="#" class="btn btn-primary btn-outline">Pesan</a></p>
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/caramel mc.png" style="width:82%">
							</a>
						</p>
						<p><a href="detail">Caramel Macchiato</a><small><br>Rp 30.000,-</small></p>
						<p><a href="#" class="btn btn-primary btn-outline">Pesan</a></p>
					</div>
				
				</div>
			</div>
			<!--pesan >-->


			
		</div>
	</div>


</body>
</html>