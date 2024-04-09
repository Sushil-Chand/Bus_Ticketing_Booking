@extends('Frontend.include.main')


@section('content')

<style>
/* CSS styles for bus route search form */


.container {
   
    
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
button {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#searchResults {
    margin-top: 20px;
}

/* Additional styles for displaying schedule data */
.schedule {
    margin-top: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
    background-color: #f9f9f9;
}

.schedule h2 {
    margin-bottom: 5px;
    color: #333;
}

.schedule p {
    margin: 0;
}

</style>
<div class="content">
    
	

	<section id="home" class="welcome-hero">
		<div class="container">
			<div class="container">
				<h1>Bus Route Search</h1>
				<form id="busRouteForm">
					<label for="city">City:</label>
					<input type="text" id="city" name="city" required>
					<label for="destination">Destination:</label>
					<input type="text" id="destination" name="destination" required>
					<label for="date">Date:</label>
					<input type="date" id="date" name="date" required>
					<button type="submit">Search</button>
				</form>
				<div id="searchResults">
					<!-- Search results will be displayed here -->
				</div>
			</div>
		</div>
	</div>
</section><!--/.welcome-hero-->
	
	

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-restaurant"></i>
								</div>
								<h2><a href="#">resturent</a></h2>
								<p>150 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-travel"></i>
								</div>
								<h2><a href="#">destination</a></h2>
								<p>214 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-building"></i>
								</div>
								<h2><a href="#">hotels</a></h2>
								<p>185 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-pills"></i>
								</div>
								<h2><a href="#">healthcaree</a></h2>
								<p>200 listings</p>
							</div>
						</li>
						
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

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
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
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
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
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
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
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
<script>
	// JavaScript for bus route search form

const busRouteForm = document.getElementById('busRouteForm');
const searchResults = document.getElementById('searchResults');

busRouteForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const city = document.getElementById('city').value;
    const destination = document.getElementById('destination').value;
    const date = document.getElementById('date').value;

    // Fetch data from bus_schedules table (replace with actual API call or database query)
    fetch(`fetch_schedule.php?city=${city}&destination=${destination}&date=${date}`)
        .then(response => response.json())
        .then(data => {
            // Display search results
            displaySearchResults(data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});

function displaySearchResults(schedules) {
    searchResults.innerHTML = ''; // Clear previous results

    if (schedules.length === 0) {
        searchResults.innerHTML = '<p>No schedules found for the selected criteria.</p>';
        return;
    }

    schedules.forEach(schedule => {
        const scheduleElement = document.createElement('div');
        scheduleElement.classList.add('schedule');
        scheduleElement.innerHTML = `
            <h2>Bus Number: ${schedule.bus_number}</h2>
            <p>Operator: ${schedule.operator}</p>
            <p>Departure Date: ${schedule.depart_date}</p>
            <p>Departure Time: ${schedule.depart_time}</p>
            <p>Pickup Address: ${schedule.pickup_address}</p>
            <p>Dropoff Address: ${schedule.dropoff_address}</p>
            <p>Fare Amount: ${schedule.fare_amount}</p>
        `;
        searchResults.appendChild(scheduleElement);
    });
}

</script>
		
</div>
@endsection
