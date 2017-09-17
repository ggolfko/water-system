@extends('welcome')


@section('sidebar')
    <center>ข้อมูลการวัด <br>
     {{$setdate or ''}}
    <form action="{{url('save')}}" method="POST">
     {!! csrf_field() !!}
    <input type="hidden" name="setdate" value="setdate">
    <p>Date: <input type="text" id="datepicker" name="datepicker" value="{{ old('setdate') }}"></p>
      <button id="submitButton" name="submitButton" class="btn btn-success">select</button>
    </form>
    <p id="demo"></p>

<form class="form-horizontal" action="{{url('save')}}" method="POST" role="form" id='form'>
                    {!! csrf_field() !!}
                    <fieldset>
<table>
    <tr>
      <th>อุณหภูมิ</th>
      <th>ความขุ่น</th>
      <th>วันที่ / เวลา</th>
    </tr>

<?php
    //for ($i=0; $i < count($dataa->feeds) ; $i++) {
      //echo '<tr><td>'.$dataa->feeds[$i]->field1.'</td>';
      //echo '<td>'.$dataa->feeds[$i]->field2.'</td>'; 
      //echo '<td>'.$dataa->feeds[$i]->created_at .'<br/></td></tr>'; 
      
    //}

?>
    @foreach ($dataa->feeds as $data)
    <tr>
      <td>@if ($data->field1 > 29)
        <font color="red">{{$data->field1}}</font>
        @else {{$data->field1}} @endif
      </td>
      <td>@if ($data->field2 < 2.82)
        <font color="red">{{$data->field2}}</font>
        @else {{$data->field2}} @endif
      </td>
      <td>{{$data->created_at}}</td>
    </tr>
    @endforeach
</table><br>
<button id="submitButton" name="submitButton" class="btn btn-success">Save</button><br>
  </fieldset>
</form>


<script type="text/javascript">

$( function() {
    $( "#datepicker" ).datepicker();
  } );


 // Set the date we're counting down to
var countDownDate = new Date("09/18/2017 14:19:25").getTime();
// Update the count down every 1 second
var x = setInterval(function() {
    // Get todays date and time
    var now = new Date().getTime(); 
    // Find the distance between now an the count down date
    var distance = countDownDate - now;  
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);   
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s "; 
    // If the count down is over, write some text 
    if (distance < 0) {
       $(function(){  // document.ready function...
   setTimeout(function(){
      $('form').submit();
    },10000);
});
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

</script>
@stop


