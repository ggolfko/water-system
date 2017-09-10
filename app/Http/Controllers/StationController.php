<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use Validator;
use DB;
use Session;
use Input;
use App\Station;
class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function save()
    {
        $url = "https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
    $json = file_get_contents($url);
    $dataa = json_decode($json);
for ($i=0; $i < count($dataa->feeds) ; $i++){
        
        $data1=$dataa->feeds[$i]->field1;
        $data2=$dataa->feeds[$i]->field2;
        $data3=$dataa->feeds[$i]->created_at;

        DB::table('station')->insert(['turbidity'=>$data2,'temp'=>$data1,'time'=>$data3]);}

      return Redirect::to("/");
    }
    
    public function newsave()
    {
        $url = "https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
    $json = file_get_contents($url);
    $datax = json_decode($json);
for ($i=0; $i < count($datax->feeds) ; $i++){
        
        $data4=$datax->feeds[$i]->field1;
        $data5=$datax->feeds[$i]->field2;
        $data6=$datax->feeds[$i]->field3;
        $data7=$datax->feeds[$i]->created_at;

        DB::table('device')->insert(['newturb'=>$data5,'newtemp'=>$data4,'ph'=>$data6,'newtime'=>$data7]);}

      return Redirect::to("/");
    }

}
