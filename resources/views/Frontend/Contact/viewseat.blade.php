@extends('frontend.include.main')
@section('title', 'viewseat')

@section('content')



<style>
  body {
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
  }
  .center {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(
      to right,
      rgb(162, 216, 162),
      rgb(102, 194, 102)
    );
  }
  .tickets {
    width: 550px;
    height: fit-content;
    border: 0.4mm solid rgba(0, 0, 0, 0.08);
    border-radius: 3mm;
    box-sizing: border-box;
    padding: 10px;
    font-family: poppins;
    max-height: 96vh;
    overflow: auto;
    background: white;
    box-shadow: 0px 25px 50px -12px rgba(0, 0, 0, 0.25);
  }
  .ticket-selector {
    background: rgb(243, 243, 243);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    box-sizing: border-box;
    padding: 20px;
  }
  .head {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
  }
  .title {
    font-size: 16px;
    font-weight: 600;
  }
  .seats {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    min-height: 150px;
    position: relative;
  }
  .status {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }
  .seats::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0);
    width: 220px;
    height: 7px;
    background: rgb(141, 198, 255);
    border-radius: 0 0 3mm 3mm;
    border-top: 0.3mm solid rgb(180, 180, 180);
  }
  .item {
    font-size: 12px;
    position: relative;
  }
  .item::before {
    content: "";
    position: absolute;
    top: 50%;
    left: -12px;
    transform: translate(0, -50%);
    width: 10px;
    height: 10px;
    background: rgb(255, 255, 255);
    outline: 0.2mm solid rgb(239, 235, 235);
    border-radius: 0.3mm;
  }
  .item:nth-child(2)::before {
    background: rgb(180, 180, 180);
    outline: none;
  }
  .item:nth-child(3)::before {
    background: rgb(93, 185, 28);
    outline: none;
  }
  .all-seats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 15px;
    margin: 60px 0;
    margin-top: 20px;
    position: relative;
  }
  .seat {
    width: 20px;
    height: 20px;
    background: white;
    border-radius: 0.5mm;
    outline: 0.3mm solid rgb(37, 5, 5);
    cursor: pointer;
  }
  .all-seats input:checked + label {
    background: rgb(28, 185, 120);
    outline: none;
  }
  .seat.booked {
    background: rgb(239, 2, 2);
    outline: none;
  }
  input {
    display: none;
  }
  .timings {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
  }
  .dates {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .dates-item {
    width: 50px;
    height: 40px;
    background: rgb(233, 233, 233);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 10px 0;
    border-radius: 2mm;
    cursor: pointer;
  }
  .day {
    font-size: 12px;
  }
  .times {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
  }
  .time {
    font-size: 14px;
    width: fit-content;
    padding: 7px 14px;
    background: rgb(233, 233, 233);
    border-radius: 2mm;
    cursor: pointer;
  }
  .timings input:checked + label {
    background: rgb(28, 185, 120);
    color: white;
  }
  .price {
    width: 100%;
    box-sizing: border-box;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .total {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    font-size: 16px;
    font-weight: 500;
  }
  .total span {
    font-size: 11px;
    font-weight: 400;
  }
  .price button {
    background: rgb(60, 60, 60);
    color: white;
    font-family: poppins;
    font-size: 14px;
    padding: 7px 14px;
    border-radius: 2mm;
    outline: none;
    border: none;
    cursor: pointer;
  }
</style>


<div class="content-wrapper">  
  <br>

<br>
<br>
<br> 
    

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



</div>
@endsection