		            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/carousel1.PNG" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h1 class="display text-capitalize text-white mb-4">PENERIMAAN SANTRI BARU (PSB)</h1>
                            <p class="mb-5 fs-5">Pendaftaran Santri Baru TP. 2025-2026 Telah Dibuka!! 
                            </p>
                            <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
				<div class="header-carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/carousel2.PNG" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h1 class="display text-capitalize text-white mb-4">PONDOK PESANTREN DARUSSALAMAH</h1>
                            <p class="mb-5 fs-5">Pondok Pesantren Darussalamah mengedepankan program unggulan pengkajian dan pengembangan Ilmu kitab klasik
                            </p>
                            <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->
		
		<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-3 px-4">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title_left position-relative pb-3 mb-2">
                        <h4 class="fw-bold text-ponpes text-uppercase">Pendaftaran Santri Baru</h4>
                        <h1 class="mb-0">Pondok Pesantren Darussalamah</h1>
                    </div>
                    <p class="mb-4">Pendaftaran Santri Baru Tahun Pelajaran 2025/2026 sudah dibuka Pendaftaran bisa dilakukan secara Offline maupun Online.</p>
					<p style="text-align: justify;"><strong>Melampirkan :</strong></p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Print Out NISN (2 Lembar)</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc Ijazah (5 lembar )</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc KTP Orang Tua (5 lembar </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc Akta Kelahiran (5 lembar )</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc KK (5 lembar )</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
							<h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc PIP/PKH (5 lembar )</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>1 Map Gobi</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Materai 10.000 (5 lembar )</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-ponpes me-3"></i>Fc Piagam (5 lembar )</h5>
                       
						</div>
                    </div>
                    <a href="#" class="btn btn-success py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Daftar</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <a href="#"><img class="position-absolute w-100 h-100 rounded wow zoomIn brosur" data-wow-delay="0.9s" src="<?php echo base_url(); ?>assets/img/brosur.png" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;"><a>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
		<section>
         <div class="container-fluid blog py-3 gray-bg wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="container py-3">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading">
                        <h2 class="fw-bold text-ponpe" >BERITA TERBARU</h2>
                        <p class="fw-bold text-ponpe">Berita terbaru Pondok Pesantren Darussalamah</p>
                    </div>
                </div>
            </div>

            <div class="row">

            <!-- Single blog Grid -->
			<?php foreach ($berita as $row){
			echo "
				<div class='col-lg-4 col-md-12'>
				<div class='blog-wrap-grid'>

					<div class='blog-thumb'>
						<a href='".base_url()."berita/detail/".$row['seo']."'><img data-src='' class='img-fluid ls-is-cached lazyloaded' alt='' style='height: 250px;min-height: 250px;max-height: 250px;width: 100%' src='".base_url()."assets/img/".$row['img']."'></a>
					</div>

					<div class='blog-info'>
						<span class='post-date'><i class='far fa-calendar-alt text-primary me-2'></i>".tgl_long($row['tgl_up'])."</span>
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
                     
            </div>
      </div>
        </div>
    </section>
		
		<div class="container py-3">
                <div class="section-title mb-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Ekstrakulikuler</h4>
                    </div>
                    <p class="mb-0">Kegiatan ekstrakurikuler sebagai wadah pengembangan potensi peserta didik yang dapat memberikan dampak positif dalam non-pelajaran formal. </p>
                </div>
                <div class="row g-4 justify-content-center">
						<?php foreach ($eskulikuler as $rows){
						echo "
							<div class='col-md-6 col-lg-4 col-xl-3 wow slideInUp' data-wow-delay='0.6s' style='visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;'>
							<div class='blog-item bg-light rounded overflow-hidden'>
								<div class='blog-img position-relative overflow-hidden py-3 px-3'>
									<img class='img-flui' src='".base_url()."assets/img/".$rows['img']."' alt=''>
									<a class='eskul position-absolute top-0 start-0 text-white py-2 px-4' href=''>Eskul</a>
								</div>
								<div class='text-center'>
									<h4 class='title_content mb-2'>".$rows['nama']."</h4>
								</div>
							</div>
						</div>
						";
						}?>
						
                    </div>
                 </div>
            </div>
		
			<section>
        <div class="container py-5">

            <div class="row">
                <div class="col text-center">
                    <div class="section-title mb-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<div class="sub-style">
							<h4 class="sub-title px-3 mb-0">GALERI VIDEO</h4>
						</div>
						<p class="mb-0">Galeri Video Pondok Pesantren Darussalamah</p>
					</div>
                </div>
            </div>

            <div class="row">
                            <!-- Single Property -->
                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <div class="list-img-slide">
                                    <div class="click slick-initialized slick-slider">
                                        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 570px; transform: translate3d(0px, 0px, 0px);" role="listbox"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide90">
                                        		<iframe class="video" src="https://www.youtube.com/embed/eJ8dNToHADc?si=xbToLL6G4lKXXv9p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div></div></div>
										</div></div></div>
                                    </div>
                                </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6 pb-">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <div class="list-img-slide">
                                    <div class="click slick-initialized slick-slider">
                                        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 570px; transform: translate3d(0px, 0px, 0px);" role="listbox"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide100">
                                         <iframe class="video" src="https://www.youtube.com/embed/HOWSddJ3VdM?si=ipvHMU6eyvyoBakw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div></div></div>
                                    </div>
                            </div>

                        </div>
        </div>
    </section>