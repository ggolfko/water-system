@extends('welcome')


@section('sidebar')
    <center>ข้อมูลการวัด <br>
<form class="form-horizontal" action="{{url('newsave')}}" method="POST" role="form">
                    {!! csrf_field() !!}
                    <fieldset>

<table>
    <tr>
      <th>อุณหภูมิ</th>
      <th>ความขุ่น</th>
      <th>ค่า pH</th>
      <th>วันที่ / เวลา</th>
    </tr>

<?php
    for ($i=0; $i < count($datax->feeds) ; $i++) {
      echo '<tr><td>'.$datax->feeds[$i]->field1.'</td>';
      echo '<td>'.$datax->feeds[$i]->field2.'</td>'; 
      echo '<td>'.$datax->feeds[$i]->field3.'</td>'; 
      echo '<td>'.$datax->feeds[$i]->created_at .'<br/></td></tr>'; 
    }

?>
</table><br>
<button id="submitButton" name="submitButton" class="btn btn-success">Save</button><br>
  </fieldset>
</form>
@stop