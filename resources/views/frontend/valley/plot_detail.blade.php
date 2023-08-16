@extends('frontend.main_master')

@section('index')
	<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header">

				<!-- Begin page header image
				=============================
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url({{ asset('frontend') }}/assets/img/valley/about_13.png);">

					<!-- Element cover
					===================
					* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
					-->
					<div class="cover bg-transparent-5-dark"></div>

				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap">

					<!-- Begin page header caption
					===============================
					* Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
					-->
					<div class="page-header-caption ph-caption-lg parallax-4 fade-out-scroll-3">
						<h1 class="page-header-title">Martin Vegas</h1>
						<hr class="hr-short">

						<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
						<div class="page-header-description" data-max-words="40">
							Artist &amp; Photographer
						</div>

					</div>
					<!-- End page header caption -->

				</div>
				<!-- End page header inner -->

			</section>
			<!-- End page header -->


			<!-- =============================
			///// Begin about me section /////
			============================== -->
			<section id="about-me-section">
				<div class="about-me-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

					<!-- ======================
					///// Begin split box /////
					based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					======================= -->
					<div class="split-box about-me">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height">

									<!-- Column -->
									<div class="col-lg-6 col-lg-height split-box-image no-padding bg-image" style="background-image: url({{ asset('frontend') }}/assets/img/valley/about.png); background-position: 50% 50%;">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-85"></div>

									</div> <!-- /.col -->

									<!-- Column -->
									<div class="col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content
										=============================
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
										<div class="split-box-content sb-content-right">

											<!-- Begin tt-heading
											======================
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
											<div class="tt-heading">
												<div class="tt-heading-inner">
													<h1 class="tt-heading-title">WHO I AM ?</h1>
													<div class="tt-heading-subtitle">A little bit about me</div>
													<hr class="hr-short">
												</div> <!-- /.tt-heading-inner -->
											</div>
											<!-- End tt-heading -->

											<div class="margin-top-30">
												<p>Hi, my name is <strong>Martin Vegas</strong>. I am an artist and photographer. Sollicitudin diam vitae, amet lacus donec eu, donec vulputate duis nullam nulla, suscipit nulla orci, ornare maecenas eget gravida.</p>

												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas enimoa.</p>
											</div>

											<!-- Begin signature -->
											<div class="signature">
												<img class="signature-dark" src="{{ asset('frontend') }}/assets/img/signature-dark.png" alt="">
												<img class="signature-light" src="{{ asset('frontend') }}/assets/img/signature-light.png" alt="">
											</div>
											<!-- End signature -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

					<!-- ======================
					///// Begin split box /////
					based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					======================= -->
					<div class="split-box what-i-do">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height">

									<!-- Column -->
									<div class="col-lg-6 col-lg-push-6 col-lg-height split-box-image no-padding bg-image" style="background-image: url({{ asset('frontend') }}/assets/img/valley/about_1.png); background-position: 50% 50%;">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-85"></div>

									</div> <!-- /.col -->

									<!-- Column -->
									<div class="col-lg-6 col-lg-pull-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content
										=============================
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
										<div class="split-box-content sb-content-left">

											<!-- Begin tt-heading
											======================
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
											<div class="tt-heading">
												<div class="tt-heading-inner">
													<h1 class="tt-heading-title">AMIN MOHAMMAD HOLDINGS LTD</h1>
													<div class="tt-heading-subtitle">A little bit of our work</div>
													<hr class="hr-short">
												</div> <!-- /.tt-heading-inner -->
											</div>
											<!-- End tt-heading -->

											<div class="margin-top-30">
												<p>Pellentesque nec convallis nisi, in mollis nulla. Aliquam eget elit risus. Quisque vitae commodo libero, eu efficitur ligula. Cras vulputate arcu id interdum pretium. Cras eu blandit massa, at semper est. Curabitur id blandit purus. Curabitur egestas, lacus quis facilisis tempor.</p>

												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
											</div>
											<a href="contact.html" class="btn btn-primary margin-top-20">Hire Me!</a>
											<a href="categories-grid.html" class="btn btn-dark margin-top-20">View All My Work</a>
										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.about-me-inner -->
			</section>
			<!-- End about me section -->
            <div class="split-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row-lg-height full-height-vh">
                            <!-- Column -->
                            <div class="col-lg-12 col-lg-height col-lg-middle no-padding">

                                <!-- Begin split box content -->
                                <div class="split-box-content">

                                    <!-- Begin contact form
                                    ========================= -->
                                    <form id="contact-form">
                                        <div class="contact-form-inner text-left">

                                            <div class="contact-form-info">
                                                <div class="tt-heading">
                                                    <div class="tt-heading-inner">
                                                        <h1 class="tt-heading-title">Contact With Us</h1>
                                                        <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                                                        <hr class="hr-short">
                                                    </div> <!-- /.tt-heading-inner -->
                                                </div>
                                                <!-- End tt-heading -->

                                                <div class="margin-top-30">
                                                    <p>Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                                </div>

                                            </div> <!-- /.contact-form-info -->

                                            <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                                            <input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
                                            <input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
                                            <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
                                            <!-- End Hidden Required Fields -->

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <select class="form-control" name="option" required>
                                                            <option value="" disabled selected>Select an option</option>
                                                            <option value="Say Hello">Say hello</option>
                                                            <option value="New Project">New project</option>
                                                            <option value="Feedback">Feedback</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small text-gray"><em>* All fields are required!</em></div>

                                        </div> <!-- /.contact-form-inner -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary btn-lg margin-top-40">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End contact form -->

                                </div>
                                <!-- End split box content -->

                            </div> <!-- /.col -->
                        </div> <!-- /.row-height -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>

@endsection
