
<div class="container-flui py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
			
        <div class="container py-5">
            <div class="row">
                <!-- Blog list Start -->
			<div class="row py-2 px-3">
			</div>
               <section id="content-berita" class="col-md-8">
				<div class="title-berita mb-3">
					<h3 class=""><?php echo $record->title ?></h3>
					<span class="wow fadeInDown fst-italic"><i class="bx bxs-calendar me-1"></i>
					<?php echo tgl_long($record->tgl_up) ?></span>
					<span class="ms-3 wow fadeInDown fst-italic"><i class="bx bxs-user me-1"></i>
					admin</span>
				</div>
				<div class="image-berita pw">
					<figure class="figure h-100 w-100">
					<img class="w-100" src="<?php echo base_url();?>assets/img/<?php echo $record->img ?>">
					</figure>
				</div>
				<div class="isi-berita mt-3 pe_1  pw">
				<?php echo $record->detail ?>
				</div><br><br>
				</section>
    
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