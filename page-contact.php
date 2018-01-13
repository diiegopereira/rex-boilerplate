<?php include('header.php'); ?>

<!-- Main Content
================================================== -->
<section id="body" class="">	
	<!-- Main Title -->
	<div class="section-title">
		<div class="container">				
				<div class="row">
					<!-- col -->
					<div class="col-sm-12">
						<h1 class="title1 main-title">Get in Touch <small>/ our contact infos</small></h1>
					</div>
					<!-- /col -->
				</div>
			</div>		
		</div>		
	</div>
	<!-- /Main Title -->


	<!-- SECTION: Map -->
	<div class="section-map">
		<div class="map" id="map">			
		    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3026.6617384330816!2d-73.9992296355825!3d40.65938630000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25ae9ec6e2cb3%3A0x39c56782050e447a!2s27th+St%2C+Brooklyn%2C+NY+11232%2C+USA!5e0!3m2!1spt-BR!2sbr!4v1431959746282" height="350"></iframe>
		</div>
	</div>
	<!-- /SECTION: Map -->	

	<!-- SECTION: Contact -->
	<div class="section section-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<!-- box -->
					<div class="contact-box">
						<p>451 Lorem Ipsum, London - Uk</p>
						<h4>Phone: </h4>
						<p>+61 3 8376 6284</p>
						<h4>Mail: </h4>
						<p>john.Rex@dotrex.com</p>
					</div>
					<!-- /box -->					
				</div>
				<div class="col-sm-8">
					<!-- form -->
					<form action="" id="contactForm">
						<!-- item -->            
						<div class="form-group">
						  <input type="text" class="form-control required" id="name" name="name" placeholder="Nome*" required>
						</div>    
						<!-- /item -->
						<!-- item -->        
						<div class="form-group">
						  <input type="email" class="form-control required" id="email" name="email" placeholder="Email" required>
						</div>    
						<!-- /item --> 
						<!-- item -->            
						<div class="form-group">
						  <input type="text" class="form-control required" id="subject" name="subject" placeholder="Assunto" required>
						</div>    
						<!-- /item -->
						<!-- item -->            
						<div class="form-group">
						  <textarea class="form-control required" name="message" id="message" placeholder="Mensagem" required></textarea>
						</div>    
						<!-- /item --> 
						<!-- item -->            
						<div class="form-group form-send">
						  <input type="submit" value="enviar" class="btn btn-default btn3">
						</div>    
						<!-- /item -->                
					</form>
					<!-- /form -->
				</div>
			</div>
		</div>
	</div>
	<!-- /SECTION: Contact -->


</section>
<!-- /Main Content
================================================== -->

<?php include('include-form-modals.php'); ?>

<?php include('footer.php'); ?>