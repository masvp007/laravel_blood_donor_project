@extends('layout')

@section('title')

Home

@endsection

@section('main')
<section>
    <div>
    <table id="don" class="table table-bordered">
        <caption>Add Donors
        </caption>
        <form action="/create" method="post">
        @csrf    
        <tr>
            <!-- <th>Donor ID</th> -->
            <th>Donor Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Add</th>
        </tr>
    
        <tr>
            <!-- <td><input type="number" class="form-control" id="procode" name="did" placeholder="Donor ID"></td> -->
            <td><input type="text" class="form-control" id="proname" name="dname" placeholder="Donor Name"></td>
            
            <td><input type="text" class="form-control" id="proprice" name="dsex" placeholder="Sex"></td>
            <td><input type="number" class="form-control" id="proqty" name="dage" placeholder="Age"></td>
            <td><input type="text" class="form-control" id="prototal" name="dbloodg" placeholder="Blood Group "></td>
            <td><input type="submit" id="button1" class="btn btn-success" onclick="" value="ADD"></td>
        </tr>
        </form>
    </table>
    <form action="/choose" type="get">
        <tr><th>Choose By Blood Group</th></tr>
        <tr>
            <td><select class="form-control" style="width:200px" name="choose" id="bg">
                <option value="O Positive">O Positive</option>
                <option value="A Positive">A Positive</option>
                <option value="B Positive">B Positive</option>
                <option value="AB Positive">AB Positive</option>
                <option   value="O Positive">O Positive</option>
                <option value="O Negative">O Negative</option>
                <option value="A Negative">A Negative</option>
                <option value="B Negative">B Negative</option>
                <option value="AB Negative">AB Negative</option>
                </select>
                
            </td>
            <td><input type="submit"  class="btn btn-warning" value="Choose"></td>
            
        </tr>
    </form>  

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
                <form action="{{route('delete',$donor->id)}}" method="post">
                    @csrf
                    <td><input type="submit" class="btn btn-danger" value="DELETE"></td>
                </form>
                <!-- <td><input type="button" id="button1"  class="btn btn-info" onclick="" value="Update"></td> -->
                <!-- <td><input type="button" id="button1" class="btn btn-danger" onclick="" value="Delete"></td> -->
            
            </tr>
        @endforeach
        
        </thead>
        <tr>
            <td>
                <div>
                    {{$donors->links()}}
                </div>
            </td>
        </tr>
    </div>  
    <form action="/search" type="get">

                <input type="text" class="form-control" style="width:50%"  name="search" placeholder="Search Here By Name">
                <input type="submit" class="btn btn-info"  value="SEARCH">
            
        
        </form>
       
        
    
</section>

@endsection




    