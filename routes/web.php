<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/data', function () {
	$url = "https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
    $json = file_get_contents($url);
    $data = json_decode($json);
	// return response()->json($data);
	$result = count($data->feeds);


	// for ($i=0; $i < count($data->feeds) ; $i++) {
	// 	echo $data->feeds[$i]->created_at . '<br/>';
	// $data = new Data();
	// $data->created_at = $data->feeds[0]->created_at;
	// $data->entry_id = $data->feeds[0]->entry_id;
	// $data->field1 = $data->feeds[0]->field1;
	// $data->field2 = $data->feeds[0]->field2;
	// $data->save();

// 	}

	return view('data')	->with('dataa',$data);
						// ->with('result',$result);


});
Route::get('/result', function () {
 $url = "https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
    $json = file_get_contents($url);
    $datab = json_decode($json);
	// return response()->json($data);
	$result = count($datab->feeds);


	// for ($i=0; $i < count($data->feeds) ; $i++) {
	// 	echo $data->feeds[$i]->created_at . '<br/>';
	// $data = new Data();
	// $data->created_at = $data->feeds[0]->created_at;
	// $data->entry_id = $data->feeds[0]->entry_id;
	// $data->field1 = $data->feeds[0]->field1;
	// $data->field2 = $data->feeds[0]->field2;
	// $data->save();

// 	}

	return view('result')	->with('datax',$datab);
	});

Route::post('save', 'StationController@save');
Route::post('newsave', 'StationController@newsave');