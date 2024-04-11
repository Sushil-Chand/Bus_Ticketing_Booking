
@extends('frontend.include.main')
@section('content')

<style>
/* Styling for seat container */

.bus-schedule-container{
   background-color: rgb(93, 0, 255);
   
}
.seat-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    
}

/* Styling for each seat box */
.seat-box {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 15px;
    margin: 60px 0;
    margin-top: 20px;
    position: relative;



    
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
            border: 3px solid black; /* Add black border */
            padding: 20px;
            margin: 20px;
        }

.bus-wheel{
    width:70px; 
    height:90px; 
    float: right;
    border-radius:10%;
    padding-right:50%;
    
}

</style>

<div class="content">
<div class="bus-schedule-container">
    <h2>Bus Schedule Information</h2>
    <p>Bus Name: {{ $busSchedule->Bus->bus_name }}</p>
    <p>Operator: {{ $busSchedule->Operator->name }}</p>
    <!-- Display other bus schedule information as needed -->
    <div class="bus-wheel">
        <img src="{{asset('images/driverwheel.png')}}" alt="Bus Wheel" >
    </div>
    <br>
    <div class="bus-schedule-container">
    <h2>Seats</h2>
    <div class="seat-container">
        @foreach($seats as $seat)
            <div class="seat-box" id="seat_{{ $seat->id }}" data-seat-id="{{ $seat->id }}" data-booked="{{ $seat->booked ? 'true' : 'false' }}" style="background-color: {{ $seat->booked ? 'red' : 'green' }}">
                {{ $seat->seat_no }}
            </div>
        @endforeach
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