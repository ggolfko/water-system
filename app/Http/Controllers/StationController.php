<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use DB;
use Session;
use Input;
use App\Station;
class StationController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function index(){
        $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);
        return view('result')->with('data', $data);
    }

    public function getData()
    {
    $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
    $json=file_get_contents($url);
    $data=json_decode($json); // return response()->json($data);
    $result=count($data->feeds); // for ($i=0; $i < count($data->feeds) ; $i++) {
    //  echo $data->feeds[$i]->created_at . '<br/>';
    // $data = new Data();
    // $data->created_at = $data->feeds[0]->created_at;
    // $data->entry_id = $data->feeds[0]->entry_id;
    // $data->field1 = $data->feeds[0]->field1;
    // $data->field2 = $data->feeds[0]->field2;
    // $data->save();
    //  }
    return view('data') ->with('dataa', $data); // ->with('result',$result);  
    }

    public function save(Request $request) {    
        if ($request->input('select') == 'setdate') {
            $setDate = $request->input('datepicker');
            //return redirect()->route('data', ['setDate' => $setDate]);
            session(['setDate' => $setDate]);
            return back();
        }
        $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);
        $count=count($data->feeds);
        foreach ($data->feeds as $data){
            $data1=$data->field1;
            $data2=$data->field2;
            $data3=$data->created_at;
            DB::table('station')->insert(['turbidity'=>$data2, 'temp'=>$data1, 'time'=>$data3]);
        }
        return back();
    }
    public function newsave() {
        $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $datax=json_decode($json);
        for ($i=0;$i < count($datax->feeds); $i++) {
            $data4=$datax->feeds[$i]->field1;
            $data5=$datax->feeds[$i]->field2;
            $data6=$datax->feeds[$i]->field3;
            $data7=$datax->feeds[$i]->created_at;
            DB::table('device')->insert(['newturb'=>$data5, 'newtemp'=>$data4, 'ph'=>$data6, 'newtime'=>$data7]);
        }
        return back();
    }
}