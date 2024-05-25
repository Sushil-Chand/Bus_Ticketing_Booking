@extends('frontend.include.main')
@section('content')
<div class="content">

    <div class="content-wrapper">
        <br>
        <br>      
        <div class="content">
            <br>
            <div class="container-fluid">
            <h2 class="text-center">Bus seat</h2>

            <table class="table">
              <thead class="text-primary">
                  <th>ID</th>
                  <th>Bus Name</th>
                  <th>Type</th>
                  <th>Total Seats</th>
                  <th>Fare Amount</th>
                  <th>Status</th>
                  <th>View Seats</th>
              </thead>
              <tbody>
                  @foreach($buses as $bus)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $bus->bus_name }}</td>
                          <td>{{ $bus->type }}</td>
                          <td>{{ $bus->total_seats }}</td>
                          <td>
                            @php
                                $busSchedulesForBus = $busSchedules->where('bus_id', $bus->id);
                            @endphp
                            @if($busSchedulesForBus->isNotEmpty())
                                @foreach($busSchedulesForBus as $busSchedule)
                                    {{  $bus->seats_price  }} <br>
                                @endforeach
                            @else
                                No schedules available
                            @endif
                        </td>
            
                          <td>{{ $bus->status ? 'Active' : 'Inactive' }}</td>
                       
                          <td>
                              <a href="{{ route('user.viewseats', $busSchedule->id) }}" class="btn btn-sm btn-info">View Seat</a>
                              
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
           
        
            
            </div>
        </div>
    </div>

</div>


@endsection