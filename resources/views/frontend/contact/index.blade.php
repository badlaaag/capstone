@extends('layouts.frontend')
@section('title', 'contact')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/form.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>Contact Us</title>
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<div class="contact-area pt-5 pb-5">
	<div class="container">
		<div class="contact-map mb-10 pb-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.6877769158345!2d121.13563731543258!3d14.73023597783421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb18144bf653%3A0x34e13592dd4050d0!2sRodriguez%20Hwy%2C%20Rodriguez%2C%20Rizal!5e0!3m2!1sen!2sph!4v1679020338140!5m2!1sen!2sph" width="600" height="450" class="border-0 w-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="custom-row-2">
			<div class="col-12 col-lg-4 col-md-5">
				<div class="contact-info-wrap">
					<div class="single-contact-info">
						<div class="contact-icon">
							<i class="fa fa-phone"></i>
							</div>
								<div class="contact-info-dec">
								<p>+639430901821</p>
								<p>+639408090182</p>
								</div>
							</div>
								<div class="single-contact-info">
									<div class="contact-icon">
										<i class="fa fa-globe"></i>
									</div>
									<div class="contact-info-dec">
										<p><a href="mailto:yourname@email.com">acevins@gmail.com</a></p>
										<p><a href="https://yourwebsitename.com">Tech-o-Matic.com</a></p>
									</div>
								</div>
								<div class="single-contact-info">
									<div class="contact-icon">
										<i class="fa fa-map-marker"></i>
									</div><div class="contact-info-dec">
										<p>Montalban Rizal </p>
										<p></p>
									</div>
								</div>
								<div class="contact-social text-center">
									<h3>Follow Us</h3>
									<ul>
										<li>
											<a href="//facebook.com"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="//youtube.com"><i class="fa fa-youtube"></i></a>
										</li>
										<li>
											<a href="//instagram.com"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a href="//twitter.com"><i class="fa fa-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-8 col-md-7">
							<div class="contact-form">
								<div class="contact-title mb-30">
									<h2>Get In Touch</h2>
								</div>
								<form class="contact-form-style" data-hs-cf-bound="true" action="" method="POST">
									  @csrf
                                    <div class="row">
										<div class="col-lg-6">
											<input name="name" placeholder="Name*" type="text"></div>
											<div class="col-lg-6">
												<input name="email" placeholder="Email*" type="email"></div>
												<div class="col-lg-12">
													<input name="subject" placeholder="Subject*" type="text"></div>
													<div class="col-lg-12">
														<textarea name="message" placeholder="Your Message*"></textarea>

														<button class="submit" type="submit">SEND</button>
													</div>
												</div>
											</form>
											<p class="form-message"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
@endsection
