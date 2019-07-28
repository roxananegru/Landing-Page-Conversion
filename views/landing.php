<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $config['name'];?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $config['base_url'];?>assets/css/style.css" />
        <link rel="stylesheet" href="<?= $config['base_url'];?>assets/css/adaptive_placeholder.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
        <script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	</head>
	<body>
		<section class="first-section">
			<header>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 col-12">
							<div class="logo">
								<a href="#"><img src="<?= $config['base_url'];?>assets/img/logo.png" alt="Logo" class="img-fluid"></a>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="text-first-section default-text">
							<h1>We build great products	on-demand with Drupal 8</h1>
							<p>We work both with large corporates and small start-ups across multiple industries and technologies on scoping, prototyping, designing and developing their digital products</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-12">
						<button type="button" class="btn btn-primary">Cere o oferta</button>
					</div>
				</div>
			</div>
		</section>
		<section class="second-section mt-30 pad-30">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="clients-rep mb-20">
							<h5>Clienti reprezentativi</h5>
						</div>	
					</div>
				</div>
				<div class="desktop">
					<div class="row logo-section">
						<div class="col-md-3 text-center"> 
							<a href="#"><img src="<?= $config['base_url'];?>assets/img/brd.png" alt="BRD-logo"  class="img-fluid mh-40" /></a>
						</div>
						<div class="col-md-3 text-center"> 
							<a href="#"><img src="<?= $config['base_url'];?>assets/img/medlife.png" alt="MedLife-logo"  class="img-fluid" /></a>
						</div>
						<div class="col-md-3 text-center"> 
							<a href="#"><img src="<?= $config['base_url'];?>assets/img/depanero.png" alt="Depanero-logo"  class="img-fluid mh-50" /></a>
						</div>
						<div class="col-md-3 text-center"> 
							<a href="#"><img src="<?= $config['base_url'];?>assets/img/up.png" alt="Up-logo"  class="img-fluid" /></a>
						</div>
					</div>
				</div>
				<div class="mobile">
					<div class="row logo-section">
						<div class="col-12">
							<div class="swiper-container swiper-clients" id="clientsSwiper">
							    <div class="swiper-wrapper">
							        <div class="swiper-slide">
							        	<img src="<?= $config['base_url'];?>assets/img/brd.png" target="_blank" alt="BRD-logo"  class="img-fluid mh-40" />
							        </div>
							        <div class="swiper-slide">
							        	<img src="<?= $config['base_url'];?>assets/img/medlife.png" target="_blank" alt="MedLife-logo"  class="img-fluid mh-40" />
							        </div>
							        <div class="swiper-slide">
							        	<img src="<?= $config['base_url'];?>assets/img/depanero.png" target="_blank" alt="Depanero-logo"  class="img-fluid mh-40" />
							        </div>
							        <div class="swiper-slide">
							        	<img src="<?= $config['base_url'];?>assets/img/up.png" target="_blank" alt="Up-logo"  class="img-fluid mh-40" />
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="thrid-section mt-30 pad-30">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="next-amazing-project">We become your partner in thinking and creating your next amazing Drupal project</h2>
						<p>We work both with large corporates and small start-ups across multiple industries and technologies on
						scoping, prototyping, designing and developing their digital products</p>
					</div>
				</div>
				<div class="row mt-30 pad-30 mt0-mobile info-row">
					<div class="col-md-4 col-12 mt-30 text-center">
						<img src="<?= $config['base_url'];?>/assets/img/icon1.png" alt="Icon 1" class="img-fluid mxh" />
						<h6 class="text-center icon-text">Consultanta pentru proiecte realizate cu Drupal</h6>
					</div>
					<div class="col-md-4 col-12 mt-30 text-center mt0-mobile">
						<img src="<?= $config['base_url'];?>/assets/img/icon2.png" alt="Icon 2" class="img-fluid mxh" />
						<h6 class="text-center icon-text">Dezvoltare module & integrare cu aplicații 3rd party</h6>
					</div>
					<div class="col-md-4 col-12 mt-30 text-center mt0-mobile">
						<img src="<?= $config['base_url'];?>/assets/img/icon3.png" alt="Icon 3" class="img-fluid mxh" />
						<h6 class="text-center icon-text">Dezvoltare module & integrare cu aplicații 3rd party</h6>
					</div>
				</div>
				<div class="row pad-30">
					<div class="col-md-4 col-12 mt-30 text-center mt0-mobile">
						<img src="<?= $config['base_url'];?>/assets/img/icon4.png" alt="Icon 4" class="img-fluid mxh" />
						<h6 class="text-center icon-text">Web design</h6>
					</div>
					<div class="col-md-4 col-12 mt-30 text-center mt0-mobile">
						<img src="<?= $config['base_url'];?>/assets/img/icon5.png" alt="Icon 5" class="img-fluid mxh" />
						<h6 class="text-center icon-text">User Experience & personalizare teme</h6>
					</div>
					<div class="col-md-4 col-12 mt-30 text-center mt0-mobile">
						<img src="<?= $config['base_url'];?>/assets/img/icon6.png" alt="Icon 6" class="img-fluid mxh" />
						<h6 class="text-center icon-text">Optimizare pentru motoarele de căutare (SEO)</h6>
					</div>
				</div>
			</div>
		</section>
		<section class="forth-section pad-30 mt-30">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-12">
						<div class="text-fourth-section default-text">
							<h2>Certificari detinute</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
						</div>
					</div>
					<div class="col-md-8 col-12">
						<div class="desktop">
							<div class="row">
								<div class="col-md-4 col-12">
									<div class="iso-cert text-center">
										<img src="<?= $config['base_url'];?>/assets/img/iso9001.png" alt="ISO9001" class="img-fluid" />
										<p>ISO 9001:2015 <br /> Sistem de Management al Calitatii</p>
									</div>
								</div>
								<div class="col-md-4 col-12">
									<div class="iso-cert text-center">
										<img src="<?= $config['base_url'];?>/assets/img/iso27001.png" alt="ISO9001" class="img-fluid" />
										<p>ISO 9001:2015 <br /> Sistem de Management al Calitatii</p>
									</div>
								</div>
								<div class="col-md-4 col-12">
									<div class="iso-cert text-center">
										<img src="<?= $config['base_url'];?>/assets/img/iso3.png" alt="ISO9001" class="img-fluid" />
										<p>Nielsen Norman Group User Experience (UX) Master Certified</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mobile">
							<div class="row">
								<div class="col-12">
									<div class="swiper-container iso-swiper" id="isoSwiper">
									    <div class="swiper-wrapper">
									        <div class="swiper-slide">
									        	<div class="iso-cert text-center">
													<img src="<?= $config['base_url'];?>/assets/img/iso9001.png" alt="ISO9001" class="img-fluid" />
													<p>ISO 9001:2015 <br /> Sistem de Management al Calitatii</p>
												</div>
									        </div>
									        <div class="swiper-slide">
									        	<div class="iso-cert text-center">
													<img src="<?= $config['base_url'];?>/assets/img/iso27001.png" alt="ISO9001" class="img-fluid" />
													<p>ISO 9001:2015 <br /> Sistem de Management al Calitatii</p>
												</div>
									        </div>
									        <div class="swiper-slide">
									        	<div class="iso-cert text-center">
													<img src="<?= $config['base_url'];?>/assets/img/iso3.png" alt="ISO9001" class="img-fluid" />
													<p>Nielsen Norman Group User Experience (UX) Master Certified</p>
												</div>
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="fifth-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text-fifth-section default-text">
							<h2>Procesul nostru</h2>
							<p>Your project can contain the stages mentioned below – but doesn’t have to.</p>
							<p>It’s tailored to your needs and depending on where you are in your product’s lifecycle.</p>
						</div>
					</div>
				</div>
				<div class="our-process-row desktop">
					<hr>
					<div class="our-process-col">
						<div class="number">
							<h4>01</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Initial assesment</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						</div>
					</div>
					<div class="our-process-col">
						<div class="number">
							<h4>02</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Scoping</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						</div>
					</div>
					<div class="our-process-col">
						<div class="number">
							<h4>03</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Design</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						</div>
					</div>
					<div class="our-process-col">
						<div class="number">
							<h4>04</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Development and Testing</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						</div>
					</div>
					<div class="our-process-col">
						<div class="number">
							<h4>05</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Transition</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="our-process-row mobile">
					<div id="ourProcessSlider" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <div class="number">
							<h4>01</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Initial assesment</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						 </div>
					    </div>
					    <div class="carousel-item">
					      <div class="number">
							<h4>02</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Scoping</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						 </div>
					    </div>
					    <div class="carousel-item">
					      <div class="number">
							<h4>03</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Design</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						 </div>
					    </div>
					    <div class="carousel-item">
					      <div class="number">
							<h4>04</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Development and Testing</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
						 </div>
					    </div>
					    <div class="carousel-item">
					      <div class="number">
							<h4>05</h4>
							<div class="circle">
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
								<div class="sub-circle"></div>
							</div>
							<div class="text-center">
								<h5>Transition</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							</div>
							</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#ourProcessSlider" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  </a>
					  <a class="carousel-control-next" href="#ourProcessSlider" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  </a>
					</div>	
				</div>
			</div>
		</section>
		<section id="sectionForm" class="sixth-section">
			<div class="section form-section">
				<div class="container">
					<div class="row flex-column-reverse flex-md-row">
						<div class="col-md-7 col-12 form-details">
							<h2>Cere o oferta</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
							<form id="contactForm">
								<div class="form-row">
								    <div class="form-group col-md-6">
							    	  <div class="alert alert-danger dnone" id="nameError">
							    	  	Numele trebuie sa contina cel putin 5 caractere!
							    	  </div>
								      <input type="text" adaptive required class="form-control" id="name" />
								      <label alt='Numele tau' placeholder='Numele tau'></label>
								    </div>
								    <div class="form-group col-md-6">
								      <div class="alert alert-danger dnone" id="emailError">
								      	Emailul este incorect!
								      </div>
								      <input type="email" adaptive required class="form-control" id="email" />
								      <label alt='Adresa de mail' placeholder='Adresa de mail'></label>
								    </div>
	  							</div>
	  							<div class="form-row">
								    <div class="form-group col-md-6">
							    	  <div class="alert alert-danger dnone" id="companyError">
								      	Numele companiei trebuie sa contina cel putin 5 caractere!
								      </div>
								      <input type="text" adaptive class="form-control" id="company" />
								      <label alt='Numele companiei (optional)' placeholder='Numele companiei (optional)'></label>
								    </div>
								    <div class="form-group col-md-6">
								      <div class="alert alert-danger dnone" id="phoneError">
								      	Numarul de telefon este invalid!
								      </div>
								      <input type="text" adaptive class="form-control" id="phone" />
								      <label alt='Numarul de telefon (optional)' placeholder='Numarul de telefon (optional)'></label>
								    </div>
	  							</div>
	  							<div class="form-row">
	  								<div class="form-group col-md-6">
										<label for="subject">Despre ce vrei sa discutam?</label>
										<select id="subject" class="form-control">
											<option selected>Un potential proiect</option>
											<option>...</option>
										</select>
									</div>
	  							</div>
								<div class="form-group">
									<div class="alert alert-danger dnone" id="messageError">
										Mesajul trebuie sa contina cel putin 7 caractere!
									</div>
									<textarea required class="form-control" placeholder="Mesajul tau" id="message" rows="8"></textarea>
								</div>
							<p class="data-text"><strong>Datele vor fi utilizate exclusiv pentru a raspunde la cererea de oferta solicitata si pentru informari ulterioare legate de aceasta.</strong></p>
							<div class="alert alert-success dnone" id="successMessage">Mesajul a fost trimis cu succes!</div>
							<button type="submit" id="btnSend" class="btn btn-primary btn-animate">Trimite</button>
							</form>
						</div>

						<div class="col-md-5 col-12 sidebar-bullet">
							<h2>De ce sa alegi Conversion</h2>
							<ul>
								<li><span class="bullet"></span> <p>Best engineering, product and design talent</p></li>
								<li><span class="bullet"></span> <p>Dedicated Project Manager with domain expertise</p></li>
								<li><span class="bullet"></span> <p>Fully managed process from idea to product</p></li>
								<li><span class="bullet"></span> <p>Milestone-based Agile development team</p></li>
								<li><span class="bullet"></span> <p>Pragmatic executers with start-up heart and enterprise brains</p></li>
								<li><span class="bullet"></span> <p>O echipa de 30 de specialisti</p></li>
								<li><span class="bullet"></span> <p>8 ani de experienta</p></li>
								<li><span class="bullet"></span> <p>+10 milioane euro cifra de afaceri</p></li>
								<li><span class="bullet"></span> <p>Suntem o companie din grupul eMAG.</p></li>
							</ul>
							<h2 class="technologies">Ce tehnologii folosim</h2>
							<div class="icons">
								<div class="icon">
									<a href="#" target="_blank"><img src="<?= $config['base_url'];?>/assets/img/icon1.png" alt="Drupal Icon" class="img-fluid " /></a>
									<p>Drupal 8</p>
								</div>
								<div class="icon">
									<a href="#" target="_blank"><img src="<?= $config['base_url'];?>/assets/img/css3icon.png" alt="CSS3 Icon" class="img-fluid" /></a>
									<p>CSS 3</p>
								</div>
								<div class="icon">
									<a href="#" target="_blank"><img src="<?= $config['base_url'];?>/assets/img/html5icon.png" alt="HTML5 Icon" class="img-fluid" /></a>
									<p>HTML5</p>
								</div>
								<div class="icon">
									<a href="#" target="_blank"><img src="<?= $config['base_url'];?>/assets/img/Mysqlicon.png" alt="Mysqlicon Icon" class="img-fluid" /></a>
									<p>MySQL</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<a href="#"><img src="<?= $config['base_url'];?>/assets/img/logo-footer.png" alt="Logo" class="img-fluid logo-footer"></a>
					</div>
					<div class="col-md-5">
						<div class="links-footer">
							<a href="#">Politica de confidentialitate</a>
							<p>© 2019 Conversion Marketing</p>	
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="<?= $config['base_url'];?>assets/js/main.js"></script>
	</body>
</html>