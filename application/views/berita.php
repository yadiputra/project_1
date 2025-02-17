
<div class="container-flui py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
			
        <div class="container py-5">
            <div class="row">
                <!-- Blog list Start -->
			<div class="row py-2 px-3">
			<div class="col-lg-12 col-md-12">
				<div class="sec-heading">
					<h2 class="fw-bold text-ponpe" >BERITA TERBARU</h2>
					<p class="fw-bold text-ponpe">Berita terbaru Pondok Pesantren Darussalamah</p>
				</div>
			</div>
			</div>
                <div class="col-lg-8">
                    <div class="row">
					<?php foreach ($berita as $row){
					echo "
						<div class='col-lg-6 col-md-12'>
						<div class='blog-wrap-grid'>

							<div class='blog-thumb'>
								<a href='".base_url()."berita/detail/".$row['seo']."'><img data-src='' class='img-fluid ls-is-cached lazyloaded' alt='' style='height: 250px;min-height: 250px;max-height: 250px;width: 100%' src='".base_url()."assets/img/".$row['img']."'></a>
							</div>

							<div class='blog-info'>
								<div class='d-flex'>
                                        <small class='me-3 hide'><i class='far fa-user text-primary me-2'></i>".$row['user_up']."</small>
                                        <small><i class='far fa-calendar-alt text-primary me-2'></i>".tgl_i($row['tgl_up'])."</small>
                                </div>
							</div>

							<div class='blog-body'>
								<h4 class='bl-title title title_berita '><a class='text-ponpes' href='".base_url()."berita/detail/".$row['seo']."'>".$row['title']."</a></h4>
								<p class='title d_berita'>
									".$row['detail']."
								</p>
								<a class='text-ponpes' href='".base_url()."berita/detail/".$row['seo']."' class='bl-continue'>Baca Selengkapnya</a>
							</div>

						</div>
					</div> 
					";
					}?>
                 
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div id="sidebar-berita" class="col-md-4">
					<h5 class="section-title bg-white text-start text-merah pe-3 ms-3">Berita Populer</h5>
					<div id="beritaSidebar" class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white pb-5">
						<div class="list-group list-group-flush border-bottom border-top">
						<?php foreach ($berita as $rows){
						echo "
						<a href='".base_url()."berita/detail/".$rows['seo']."' class='list-group-item list-group-item-action py-3 lh-tight aos-init aos-animate' data-aos='fade-up' data-aos-delay='100'>
							<div class='d-flex w-10 align-items-center justify-content-between'>
							<strong class='mb-1'>".$rows['title']."</strong>
							</div>
						<div>
							<span><small><i>".tgl_long($rows['tgl_up'])."</i></small></span>
							<span class='px-1'>|</span>
							<span><small><i>Oleh : ".$rows['user_up']."</i></small></span>
						</div>
						</a>
						";
						}?>
					</div>
					</div>
   
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/brosur.PNG" alt="" class="img-flui rounded"></a>
                    </div>
                    <!-- Image End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>