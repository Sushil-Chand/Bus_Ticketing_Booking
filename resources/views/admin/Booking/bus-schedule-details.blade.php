@extends('frontend.include.main')
@section('content')

    <style>
        /* Styling for seat container */

        .bus-schedule-container {

            justify-content: center;
            align-items: center;
            padding-right: 0;
        }

        .seat-container {

            display: grid;
            grid-template-columns: repeat(4, 0.06fr);
            /* 4 columns */
            grid-column: 0.01px;
            /* spacing between cells */
            justify-content: center;
            padding-right: 0;

        }

        .seat-box {

            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            /* Adjust width as needed */
            height: 50px;
            /* Adjust height as needed */
            background-color: green;
            /* Default color */
            color: white;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            border: 1px solid black;
            font-weight: bold;
        }

        /* Style for booked seats */
        .seat-box[data-booked="true"] {
            background-color: red;
            /* or any other color for booked seats */
            cursor: not-allowed;
        }

        /* Styling for modal */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black with opacity */
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
            overflow: hidden;
            border: 3px solid black;
            background-color: #eeeeee margin:10px;
            padding: 10px;
        }

        .bus-wheel {
            justify-content: center;
            align-items: center;
            width: 70px;
            height: 90px;
            border-radius: 10%;
            position: absolute;
            top: 32%;
            right: 55rem;
            padding-top: 0px;
            transform: translateX(-50%);

        }

        .bus-wheel span {
            justify-content: center;
            align-content: center;
            padding-left: 16px;
            font-size: 18px;
        }

        .seat-column {
            display: grid;
            grid-template-rows: repeat(10, 6fr);
            row-gap: 0.1px;
        }
    </style>

    <div class="content">
        <div class="bus-schedule-container">
            <h2>Bus Schedule Information</h2>
            <p>Bus Name: {{ $busSchedule->Bus->bus_name }}</p>
            <p>Operator: {{ $busSchedule->Operator->name }}</p>
            <!-- Display other bus schedule information as needed -->

            <br>

            <h2>Seats</h2>
            <div class="bus-wheel">
                <img src="{{ asset('images/driverwheel.png') }}" alt="Bus Wheel">
                <span>Driver</span>
            </div>
            <br>
            <div class="seat-container">


                @for ($i = 0; $i < 4; $i++)
                    <div class="seat-column">
                        @for ($j = 0; $j < 10; $j++)
                            @php
                                $seat = $seats->skip($i * 10 + $j)->first();
                            @endphp
                            <div class="seat-box" id="seat_{{ $seat->id ?? '' }}" data-seat-id="{{ $seat->id ?? '' }}"
                                data-booked="{{ $seat->booked ?? 'false' }}"
                                style="background-color: {{ $seat->booked ?? 'false' ? 'red' : 'green' }}">
                                {{ $seat->seat_no ?? '' }}
                            </div>
                        @endfor
                    </div>
                @endfor

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
