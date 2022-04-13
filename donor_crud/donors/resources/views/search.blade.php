@extends('layout')

@section('main')

<table id="DonorTable" class="table table-bordered">
        <caption>Donors</caption>
        <thead>
        <tr>
            
            <th >Donor ID</th>
            <th >Donor Name</th>
            <th >Sex</th>
            <th >Age</th>
            <th >Blood Group</th>
            <th>Status</th>
        </tr>
        
        @foreach($donors as $donor)
            <tr>
                
                <td >{{$donor->id}}</td>
                <td >{{$donor->name}}</td>
                <td >{{$donor->sex}}</td>
                <td id="age">{{$donor->age}}</td>
                <td >{{$donor->bloodg}}</td>
                <td>
                {{$donor->age >18?"Fit to Donate":"Not Fit to Donate"}}
                </td>
                <td><a href="{{route('update',$donor->id)}}" class="btn btn-warning">UPDATE</a></td>
                <form action="{{route('delete',$donor->did)}}"" method="post">
                    @csrf
                    <td><input type="submit" class="btn btn-danger" value="DELETE"></td>
                </form>
                <!-- <td><input type="button" id="button1"  class="btn btn-info" onclick="" value="Update"></td> -->
                <!-- <td><input type="button" id="button1" class="btn btn-danger" onclick="" value="Delete"></td> -->
            
            </tr>
        @endforeach
        
        </thead>
</table>    



@endsection