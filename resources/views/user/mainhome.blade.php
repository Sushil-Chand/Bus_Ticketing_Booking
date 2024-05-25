@extends('Frontend.include.main')
@section(
'content')
<style>
.bussearch{
	padding-top: 10px;
	background-color: rgb(243, 241, 237);
	padding-left: 2rem;
	/* opacity: 0.5; */
	width: 100%;	
}

</style>
<div class="content">
	<section id="home" class="welcome-hero">
		<div class="container">
			<div class="welcome-hero-txt">
				<h2>Find the Best Bus Services Near You</h2>
				<p>Discover and book bus tickets easily with just a few clicks</p>
			</div>
			<div class="card-body">
				<div class="bussearch">
					<!-- Bus Search Form -->
					<form action="{{route('busboks')}}" method="GET">
						<div class="form-group row">
							<label for="from" class="col-md-2 col-form-label text-md-right">From</label>
							<div class="col-md-3">
								<input id="from" type="text" class="form-control" name="from" required autofocus>
							</div>

							<label for="to" class="col-md-1 col-form-label text-md-right">To</label>
							<div class="col-md-3">
								<input id="to" type="text" class="form-control" name="to" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="date" class="col-md-2 col-form-label text-md-right">Date</label>
							<div class="col-md-2">
								<input id="date" type="date" class="form-control" name="date" required>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">Search Bus</button>
							</div>
						</div>
					</form>
				</div>
		</div>
	</section><!--/.welcome-hero-->
	

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
			
				<div class="section-header">
					<h2>how it works</h2>
					<p>Learn More about how our website works</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">choose <span> what to</span> do</a></h2>
								<p>
									Nepal offers a range of activities for all types of travelers. Trek through the majestic Himalayas, explore the vibrant markets of Kathmandu, or relax by the serene lakes of Pokhara. Adventure seekers can try paragliding, while culture enthusiasts can visit ancient temples and monasteries. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">find <span> what you want</span></a></h2>
								<p>
									Navigating Nepal by bus is an adventure in itself. The country has a network of buses connecting major cities and towns, offering an affordable way to travel. For long journeys, opt for tourist buses which provide more comfort and reliability compared to local buses.
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">explore <span> amazing</span> place</a></h2>
								<p>
									Nepal is a treasure trove of amazing places. Visit the UNESCO World Heritage Sites in Kathmandu Valley, hike up to the breathtaking viewpoint of Sarangkot in Pokhara, or venture into Chitwan National Park to experience the rich wildlife. Each location promises a unique and unforgettable experience.
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">90 </div> <span>K+</span>
							</div><!--/.statistics-content-->
							<h3>listings</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>listing categories</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">65</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>visitors</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">50</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>happy clients</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

		
</div>
@endsection
