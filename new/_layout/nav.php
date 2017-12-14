<div id="fh5co-main">
    <!-- nav atas -->
      <div class="w3-top">
          <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto">
            <div class="w3-center w3-padding-16">
            <? if():?>
              <p style="margin-left:50%" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Your Orders</p>
            <? endif; ?>
            </div>
          </div>
      </div>
      <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Pesanan Anda</h4>
                    </div>
                    <div class="modal-body">
                      <p>Tabel Pesanan</p>
                    </div>
                    <div class="modal-footer">
                      <p type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Order</p>
                      <span></span>
                      <p type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Cancel</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal-->
    <!--nav atas -->