@extends('admin.dashboard')
@section('title', 'seat')

@section('content')
<style>
/* public/css/seat.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f5f5f5;
}

.tickets {
    max-width: 800px;
    width: 100%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.ticket-selector {
    margin-bottom: 20px;
}

.head {
    text-align: center;
    margin-bottom: 20px;
}

.title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.seats {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 5px;
    margin-bottom: 20px;
}

.seat {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.seat.booked {
    background-color: #ccc;
    cursor: not-allowed;
}

.seat.selected {
    background-color: #007bff;
    color: #fff;
}

.timings {
    text-align: center;
    margin-bottom: 20px;
}

.departure,
.return,
.driver-wheel-logo {
    margin-bottom: 10px;
}

.driver-wheel-logo img {
    max-width: 100px;
    height: auto;
}

.price {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.total {
    font-size: 18px;
}

#book-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

#create-seats-form {
    margin-top: 20px;
}

#create-seats-form label {
    display: block;
    margin-bottom: 10px;
}

#create-seats-form input[type="number"] {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

#create-seats-form button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

</style>
<div class="content-wrapper">
    <div class="content">
    <div class="center">
        <div class="tickets">
            <div class="ticket-selector">
                <div class="head">
                    <div class="title">{{ "#"}} - Bus Booking</div>
                </div>
                <div class="seats" id="seats-container">
                    @php
                        $totalSeats = $busSchedule->bus->total_seats;
                        $columnCount = 2; // Number of columns for seats
                        $seatsPerColumn = $totalSeats / $columnCount;
                        $seatLetters = range('A', 'Z');
                        $seatIndex = 0;
                    @endphp
                    @for ($i = 1; $i <= $totalSeats; $i++)
                        @php
                            $column = $i % $seatsPerColumn === 0 ? $seatsPerColumn : $i % $seatsPerColumn;
                            $seatLetter = $seatLetters[$seatIndex];
                            $seatStatus = $seats[$i - 1]->booked ? 'booked' : '';
                            if ($column === 1 && $i !== 1) {
                                $seatIndex++;
                            }
                        @endphp
                        <input type="checkbox" name="tickets" id="seat-{{ $seatLetter }}{{ $column }}" class="seat-checkbox" data-seat-id="{{ $seats[$i - 1]->id }}" {{ $seatStatus }} />
                        <label for="seat-{{ $seatLetter }}{{ $column }}" class="seat {{ $seatStatus }}">{{ $seatLetter }}{{ $column }}</label>
                    @endfor
                </div>
                <div class="timings">
                    <div class="departure">
                        Departure Time: {{ $busSchedule->depart_time }}
                    </div>
                    @if ($busSchedule->return_time)
                        <div class="return">
                            Return Time: {{ $busSchedule->return_time }}
                        </div>
                    @endif
                    @if ($busSchedule->driver_wheel_logo)
                        <div class="driver-wheel-logo">
                            <img src="{{ asset('path/to/driver_wheel_logo.png') }}" alt="Driver Wheel Logo">
                        </div>
                    @endif
                </div>
            </div>
            <div class="price">
                <div class="total">
                    <span><span id="ticket-count">0</span> Tickets</span>
                    <div>Total Price: <span id="total-price">{{ $totalPrice }}</span></div>
                </div>
                <button id="book-button" type="button">Book</button>
            </div>
        </div>
        <div class="create-seats">
            <h3>Create Seats</h3>
            <form id="create-seats-form">
                <input type="hidden" name="bus_id" value="{{ $busSchedule->bus_id }}">
                <label for="total_seats">Total Seats:</label>
                <input type="number" id="total_seats" name="total_seats" required>
                <button type="submit">Create</button>
            </form>
        </div>
    </div>
    </div>
</div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to update ticket count and total amount
            function updateTotal() {
                let ticketCount = $('input[name="tickets"]:checked').length;
                let totalPrice = parseFloat($('#total-price').text());
                let totalAmount = ticketCount * totalPrice;
                $('#ticket-count').text(ticketCount);
                $('#total-amount').text(totalAmount.toFixed(2)); // Format to two decimal places
            }

            // Function to fetch and display seats
            function fetchSeats() {
                $.ajax({
                    url: "{{ route('seats.index') }}",
                    method: 'GET',
                    success: function(response) {
                        let seatsContainer = $('#seats-container');
                        seatsContainer.empty();
                        response.forEach(seat => {
                            let seatStatus = seat.booked ? 'booked' : '';
                            let seatHTML = `
                                <input type="checkbox" name="tickets" id="seat-${seat.id}" class="seat-checkbox" data-seat-id="${seat.id}" ${seatStatus} />
                                <label for="seat-${seat.id}" class="seat ${seatStatus}">${seat.seat_no}</label>
                            `;
                            seatsContainer.append(seatHTML);
                        });

                        // Attach event listener to seat checkboxes
                        $('.seat-checkbox').change(function() {
                            updateTotal();
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Initial fetch of seats
            fetchSeats();

            // Book button click event
            $('#book-button').click(function() {
                let selectedSeats = $('input[name="tickets"]:checked').map(function() {
                    return $(this).data('seat-id');
                }).get();

                // Make an AJAX request to book the selected seats
                $.ajax({
                    url: "{{ route('seats.book') }}",
                    method: 'POST',
                    data: {
                        seats: selectedSeats
                    },
                    success: function(response) {
                        alert('Seats booked successfully!');
                        fetchSeats(); // Refresh seat status after booking
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Failed to book seats. Please try again.');
                    }
                });
            });

            // Create seats form submission
            $('#create-seats-form').submit(function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('seats.create') }}",
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert('Seats created successfully!');
                        fetchSeats(); // Refresh seat list after creating seats
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Failed to create seats. Please try again.');
                    }
                });
            });
        });
    </script>
@endsection