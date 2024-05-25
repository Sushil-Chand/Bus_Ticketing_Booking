@extends('admin.dashboard')

@section('title', 'seat')

@section('content')

<style>


</style>
    <div class="content-wrapper">
        <br>
        <br>      
        <div class="content">
            <br>
            <div class="container-fluid">
              <button onclick="window.location='{{'#' }}'" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i> Back
            </button>
            <h2 class="text-center">Bus seat</h2>

            <table class="table">
              <thead class="text-primary">
                  <th>ID</th>
                  <th>Bus Name</th>
                  <th>Type</th>
                  <th>Total Seats</th>
                 
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
                                    {{ $bus->seats_price }} <br>
                                @endforeach
                            @else
                                No schedules available
                            @endif
                        </td>
            
                          <td>{{ $bus->status ? 'Active' : 'Inactive' }}</td>
                       
                          <td>
                              <a href="{{ route('buses.viewseats', $busSchedule->id) }}" class="btn btn-sm btn-info">View Seat</a>
                              
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
           
        
            
            </div>
        </div>
    </div>
@endsection