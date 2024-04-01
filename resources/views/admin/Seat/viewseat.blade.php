@extends('admin.dashboard')
@section('title', 'viewseat')

@section('content')
<style>


.bus {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 500px;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.seat-row {
  display: flex;
  margin-bottom: 10px;
}

.seat {
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  margin-right: 10px;
  background-color: #28a745; /* Green for available seats */
  color: #fff;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.seat.booked {
  background-color: #dc3545; /* Red for booked seats */
}

.seat:hover {
  background-color: #007bff; /* Blue on hover */
}

/* Optional: Add some spacing and centering */
.bus {
  margin-top: 50px;
  padding: 20px;
}

.seat-row {
  margin-bottom: 10px;
}

.seat:last-child {
  margin-right: 0;
}

</style>
<div class="content-wrapper">   
    <div class="content">
        <div class="bus">
            @for ($i = 1; $i <= ceil($bus->total_seats / 4); $i++)
                <div class="seat-row">
                    @for ($j = 0; $j < 4; $j++)
                        @php
                            $seatNumber = ($i - 1) * 4 + $j + 1;
                        @endphp
                        @if ($seatNumber <= $bus->total_seats)
                            <div class="seat available"></div>
                        @else
                            <div class="seat"></div>
                        @endif
                    @endfor
                </div>
            @endfor
           
            
            <!-- Add more seat rows as needed -->
          </div>
    </div>
</div>
@endsection