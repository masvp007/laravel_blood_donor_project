
@extends('layout')

@section('title')

Update

@endsection


@section('main')
<section>
    <div>
    <table id="don" class="table table-bordered">
        <caption>Edit Donor
        </caption>
        <!-- <form action="{{route('edit',$donor->id)}}" method="post"> -->
        <form action="{{route('edit',$donor->id)}}" method="post">
            @csrf
        <tr>
            <!-- <th>Donor ID</th> -->
            <th>Donor Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Blood Group</th>
            
        </tr>
    
        <tr>
            
            <td><input type="text" class="form-control" id="proname" name="dname" value="{{$donor->name}}"></td>
            <td><input type="text" class="form-control" id="proprice" name="dsex" value="{{$donor->sex}}"></td>
            <td><input type="number" class="form-control" id="proqty" name="dage" value="{{$donor->age}}"></td>
            <td><input type="text" class="form-control" id="prototal" name="dbloodg" value="{{$donor->bloodg}}"></td>
            <td><input type="submit" id="button1" class="btn btn-success"  value="UPDATE"></td>
        </tr>
          
        </form>
    </table>
    <!-- <table id="DonorTable" class="table table-bordered">
        <caption>Donors</caption>
        <thead>
        <tr>
            
            <th >Donor ID</th>
            <th >Donor Name</th>
            <th >Sex</th>
            <th >Age</th>
            <th >Blood Group</th>
            <th>last Donation</th>
        </tr>
        </thead> -->
    </div> 
</section>

@endsection