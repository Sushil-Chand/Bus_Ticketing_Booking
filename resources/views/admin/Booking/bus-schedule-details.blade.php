<style>
/* Styling for seat container */
.seat-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Styling for each seat box */
.seat-box {
    width: 45%; /* Adjust width to fit two seats in a row */
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: lightyellow; /* Default color */
    cursor: pointer;
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


</style>
<div class="bus-schedule-container">
    <h2>Bus Schedule Information</h2>
    <p>Bus Name: {{ $busSchedule->Bus->bus_name }}</p>
    <p>Operator: {{ $busSchedule->Operator->name }}</p>
    <!-- Display other bus schedule information as needed -->

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