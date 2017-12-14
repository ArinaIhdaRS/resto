
		
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
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/gurame asam manis.png" style="width:82%">
							</a>
						</p>
						<p><a data-toggle="modal" data-target="#myModal" onclick="detail()">Gurame Asam Manis</a><br><small id="containerrr">Rp 30.000,-</small>
						<select  id="select1" style="margin-left: 35%" name="jumlah" onclick="tampilkan()">
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
								harga.innerHTML="Rp 30000,-";
							}else if (jumlah=="2"){
								harga.innerHTML="Rp 60000,-";
							}else if (jumlah=="3"){
								harga.innerHTML="Rp 90000,-";
							}else if (jumlah=="4"){
								harga.innerHTML="Rp 120000,-";
							}else if (jumlah=="5"){
								harga.innerHTML="Rp 150000,-";
							}
						}
						
					</script>						
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/ayam bakar madu.png" style="width:82%">
							</a>
						</p>
						<p><a href="detail">Ayam Bakar Madu</a><small><br>Rp 25.000,-</small><select  id="select1" style="margin-left: 35%" name="jumlah" onclick="tampilkan()">
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
								harga.innerHTML="Rp 25000,-";
							}else if (jumlah=="2"){
								harga.innerHTML="Rp 50000,-";
							}else if (jumlah=="3"){
								harga.innerHTML="Rp 75000,-";
							}else if (jumlah=="4"){
								harga.innerHTML="Rp 100000,-";
							}else if (jumlah=="5"){
								harga.innerHTML="Rp 125000,-";
							}
						}
					</script>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">
							<a href="#">
								<img src="../../img/bebek goreng ijo.png" style="width:82%">
							</a>
						</p>
						<p><a href="detail">Bebek Goreng Ijo</a><small><br>Rp 40.000,-</small><select  id="select1" style="margin-left: 35%" name="jumlah" onclick="tampilkan()">
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
								harga.innerHTML="Rp 40000,-";
							}else if (jumlah=="2"){
								harga.innerHTML="Rp 80000,-";
							}else if (jumlah=="3"){
								harga.innerHTML="Rp 120000,-";
							}else if (jumlah=="4"){
								harga.innerHTML="Rp 160000,-";
							}else if (jumlah=="5"){
								harga.innerHTML="Rp 200000,-";
							}
						}
					</script>
				</div>
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
			<!--pesan >-->


			
		</div>
	</div>

</body>
</html>