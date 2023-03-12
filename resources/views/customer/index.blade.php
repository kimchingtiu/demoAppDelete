<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Customers</title>

    <style>
h3 {
  text-align: center;
}
</style>
</head>
<body>
@include('partials.header')
<x-nav/>
    <h3>CUSTOMER DATA</h3>
    <!--
    <ul>
    @foreach($customers as $customer)
        <li>  {{ $customer->firstname }} {{ $customer->lastname }}</li>
        <li>  {{ $customer->email }}</li>
        <li>  {{ $customer->contactNumber }}</li>
        <li>  {{ $customer->address }}</li>
        <br>
        @endforeach
    </ul>
    -->
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
      @if(Session::has('success'))
    {{ Session::get('success') }}
  @endif
    <tr>
      <th scope="row">{{ $customer->id }}</th>
    
      <td>{{ $customer->firstname }}</td>
      <td>{{ $customer->lastname }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->contactNumber }}</td>
      <td>{{ $customer->address }}</td>
      <td>
          <form action="delete/{{$customer->id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>      
      <td></td>
    </tr>
       @endforeach
  </tbody>
</table>

@include('partials.footer')
</body>
</html>
   
 
      

