

<div align="center">
<img src="./images/logo.png" style="width:300px;height:300px; "  >
<h1 > Pre-registration Of Visitors </h1>

<form action="/pre-register" method="post">
@csrf


<p>Name Of host:<input type="text" name="host_name"> <br></p>
<p>Name Of Visitor:<input type="text" name="visitor_name"><br></p>
<p>Address of Host: <input type="text" name="address"><br></p>
<p>Phone No: <input type="number" name="phone"><br></p>
<p>Email: <input type="email" name="email"><br></p>
<p>NIC/Passport <input type="text" name="nic"><br></p>
<p>Clockin: <input type="text" name="clockin"><br></p>
<p>Clockout: <input type="text" name="clockout"><br></p>





<button type="submit"> Register </button>


 <div style="border:1px solid black">
   @foreach($errors->all() as $error)
   <div>{{$error}}</div>
    @endforeach
 </div>

</div>
</form>
