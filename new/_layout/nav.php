
<div id="fh5co-main">
    <!-- nav atas -->
      <div class="w3-top">
          <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto">
            <div class="w3-center w3-padding-16">
              <a class="edit-record">
                <p style="margin-left:55%" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#pesanan">
                  <a style="color: white" class="icon-basket"></a>
                </p>
              </a>
            </div>
          </div>
      </div>

      <!-- Modal -->
              <div class="modal fade" id="pesanan" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Pesanan Anda</h4>
                    </div>

                    <div class="modal-body">
                    <h3>Anda Belum Memesan</h3>
                      <?php if(!empty($_SESSION['menu'])):?>
                      <table style="width:100%">
                        <thead>
                        <tr>
                          <th rowspan="100">Menu</th>
                          <th rowspan="100">Harga</th>
                          <th rowspan="100">Jumlah</th>
                          <th rowspan="100">Total</th>
                          <th rowspan="100"></th>
                        </tr>
                        </thead>
                        
                        
                        <?php foreach($_SESSION['menu'] as $key=>$menu):?>
                        <tr>
                          <td><?php print $menu['nama']?></td>
                          <td><?php print $menu['harga']?></td>
                          <td><?php print $menu['qty']?></td>
                          <?php $total = $menu['harga']*$menu['qty']?>
                          <td><?php print $total;?></td>
                          <td><a href="index.php?action=empty&id_menu=<?php print $key?>" class="btn btn-info">Hapus</a></td>
                        </tr>
                        <?php $Totals = $Totals+$total;?>
                        <?php endforeach;?>
                      </table>
                      <?php endif;?>
                    </div>
                    
                    <div class="modal-footer">
                      <p><h4 align="right">Total: IDR <?php print $Totals;?></h4></p>
                      <span></span>
                      <p type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#terpesan">Pesan</p>
                      <span></span>
                      <p type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#cancel">Batal</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal-->
    <!--nav atas -->    