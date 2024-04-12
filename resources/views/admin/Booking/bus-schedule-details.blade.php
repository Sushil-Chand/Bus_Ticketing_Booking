
@extends('frontend.include.main')
@section('content')

<style>
/* Styling for seat container */
* {
  box-sizing: border-box;
}

.bus-schedule-container{
   background-color: 
   
}
.seat-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columns */
    grid-gap: 5px;                         /* spacing between cells */
    justify-content: center;
    margin-top: 5px;
    margin-left: 50px;
    padding-left: 15%
}

.seat-box {
    
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px; /* Adjust width as needed */
    height: 50px; /* Adjust height as needed */
    background-color: green; /* Default color */
    color: white;
    border-radius: 5px;
   
    font-size: 14px;
    cursor: pointer;
}

/* Style for booked seats */
.seat-box[data-booked="true"] {
    background-color: red; /* or any other color for booked seats */
    cursor: not-allowed;
}



/* Styling for modal */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5); /* Black with opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.content {
            border: 3px solid black; 
            background-color: #efeb23
            padding: 10px;
            margin: 50px;
        }

.bus-wheel{
    width:70px; 
    height:90px; 
    float: right;
    margin-right: 5px;
    border-radius:10%;
    padding-right:2rem;

    
}

</style>

<div class="content">
<div class="bus-schedule-container">
    <h2>Bus Schedule Information</h2>
    <p>Bus Name: {{ $busSchedule->Bus->bus_name }}</p>
    <p>Operator: {{ $busSchedule->Operator->name }}</p>
    <!-- Display other bus schedule information as needed -->
    
    <br>
    <div class="bus-schedule-container">
    <h2>Seats</h2>

    <div class="seat-container">
        <div class="bus-wheel">
            <img src="{{asset('images/driverwheel.png')}}" alt="Bus Wheel" >
        </div>
        @foreach($seats as $seat)
       
            <div class="seat-box" id="seat_{{ $seat->id }}" data-seat-id="{{ $seat->id }}" data-booked="{{ $seat->booked ? 'true' : 'false' }}" style="background-color: {{ $seat->booked ? 'red' : 'green' }}">
                {{ $seat->seat_no }}
            </div>
           
        @endforeach
        <div class="seat-box">
            
            <li>Q8</li>
            

        </div>
        <div class="seat-box">
            
            <li>Q9</li>
            

        </div>
    </div>
</div>

<!-- Booking Modal -->
<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Do you want to book seat <span id="seatNo"></span>?</p>
        <button id="confirmBooking">Yes</button>
        <button class="close">Close</button>
    </div>
</div>
</div>


{{---test --}}




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('.seat-box').click(function() {
        var seatId = $(this).data('seat-id');
        var booked = $(this).data('booked');

        if (!booked) {
            // Open booking modal
            $('#bookingModal').css('display', 'block');

            // Set seat number in the modal content
            var seatNo = $(this).text();
            $('#seatNo').text(seatNo);

            // Store the seat ID in a data attribute of the modal
            $('#bookingModal').data('seat-id', seatId);
        }
    });

    // Confirm booking
    $('#confirmBooking').click(function() {
        // Perform booking action (e.g., update seat status to booked)
        var seatId = $('#bookingModal').data('seat-id');

        window.location.href = "/book_bus/" + seatId;

        // Close modal
        $('#bookingModal').css('display', 'none');
    });

    // Close modal when clicking on the close button
    $('.close').click(function() {
        $('#bookingModal').css('display', 'none');
    });
});
</script>
@endsection