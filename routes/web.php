<?php

use Illuminate\Support\Facades\Route;
use Khill\Lavacharts\Lavacharts;
use App\Models\greenhouse;
use App\Models\seed;
use Illuminate\Http\Request;

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
    return view('home');
})->name('home')->middleware('auth');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    $greenHouses = greenhouse::get();
    return view('home');
})->name('home')->middleware('auth');

Route::get('/plants', function() {
    return view('plants');
})->name('plants')->middleware('auth');

Route::get('/rassada', function() {
    return view('rassada');
})->name('rassada')->middleware('auth');

Route::get('/seeds', function() {
    $seeds = seed::get();
    return view('seeds', compact('seeds'));
})->name('seeds')->middleware('auth');

Route::get('/felts', function() {
    return view('felts');
})->name('felts')->middleware('auth');

Route::get('/greenhouse/{id}/microclimat', function() {
    return view('microclimat');
})->name('microclimat')->middleware('auth');

Route::get('/microclimat', function() {
    return view('microclimat');
})->name('microclimat')->middleware('auth');


Route::get('/grow', function() {
    return view('grow');
})->name('grow')->middleware('auth');

Route::get('/water', function() {
    return view('water');
})->name('water')->middleware('auth');

Route::get('/pants-place', function() {
    return view('pants-place');
})->name('pants-place')->middleware('auth');

Route::get('/felts-journal', function() {
    $lava = new Lavacharts; // See note below for Laravel

    $finances = $lava->DataTable();
    
    $finances->addStringColumn('Удобрение')
    ->addNumberColumn('Количество')
    ->addRow(['Первое удобрение',  rand(1000,5000)])
    ->addRow(['Тестовое удобрение',  rand(1000,5000)])
    ->addRow(['Азотное удобрение',  rand(1000,5000)])
    ->addRow(['Удобрение 2', rand(1000,5000)])
    ->addRow(['Удобритель 3000',   rand(1000,5000)]);
    
    $lava->BarChart('water', $finances, [
        'title' => 'Удобрения',
        'height' => 500,
    ]);
    
    return view('felts-journal',compact('lava'));
})->name('felts-journal')->middleware('auth');

Route::get('/water-journal', function() {
    $lava = new Lavacharts; // See note below for Laravel

    $finances = $lava->DataTable();
    
    $finances->addStringColumn('Дата')
             ->addNumberColumn('Вода')
             ->addRow(['2021-5-19', 24])
             ->addRow(['2021-5-20', 25])
             ->addRow(['2021-5-21', 26])
             ->addRow(['2021-5-22', 28])
             ->addRow(['2021-5-23', 31])
             ->addRow(['2021-5-24', 34])
             ->addRow(['2021-5-25', 40])
             ->addRow(['2021-5-26', 42])
             ->addRow(['2021-5-27', 44])
             ->addRow(['2021-5-28', 46])
             ->addRow(['2021-5-29', 48])
             ->addRow(['2021-5-30', 50])
             ->addRow(['2021-5-31', 45])
             ->addRow(['2021-6-1', 42])
             ->addRow(['2021-6-2', 38])
             ->addRow(['2021-6-3', 36])
             ->addRow(['2021-6-4', 32])
             ->addRow(['2011-6-5', 30])
             ->addRow(['2021-6-6', 28])
             ->addRow(['2021-6-7', 26]);
    
    $lava->ComboChart('water', $finances, [
        'title' => 'График полива',
        'height' => 500,
        'legend' => [
            'position' => 'in'
        ],
        'seriesType' => 'bars',
    ]);
    
    return view('water-journal',compact('lava'));
})->name('water-journal')->middleware('auth');

Route::get('/env-graph', function() {
    $lava = new Lavacharts; // See note below for Laravel

    $finances = $lava->DataTable();
    
    $finances->addStringColumn('Дата')
             ->addNumberColumn('Температура')
             ->addRow(['2021-5-19', 23])
             ->addRow(['2021-5-20', 22])
             ->addRow(['2021-5-21', 21])
             ->addRow(['2021-5-22', 24])
             ->addRow(['2021-5-23', 23])
             ->addRow(['2021-5-24', 22])
             ->addRow(['2021-5-25', 26])
             ->addRow(['2021-5-26', 24])
             ->addRow(['2021-5-27', 21])
             ->addRow(['2021-5-28', 20])
             ->addRow(['2021-5-29', 18])
             ->addRow(['2021-5-30', 19])
             ->addRow(['2021-5-31', 20])
             ->addRow(['2021-6-1', 22])
             ->addRow(['2021-6-2', 21])
             ->addRow(['2021-6-3', 22])
             ->addRow(['2021-6-4', 23])
             ->addRow(['2011-6-5', 24])
             ->addRow(['2021-6-6', 25])
             ->addRow(['2021-6-7', 25]);
    
    $lava->ComboChart('Finances', $finances, [
        'title' => 'Температура',
        // 'width' => ,
        'height' => 500,
        'legend' => [
            'position' => 'in'
        ],
    ]);
    
    return view('env-graph',compact('lava'));
})->name('env-graph')->middleware('auth');

Route::get('/greenhouse/{id}/env-graph', function() {
    $lava = new Lavacharts; // See note below for Laravel

    $finances = $lava->DataTable();
    
    $finances->addDateColumn('Year')
             ->addNumberColumn('Sales')
             ->addNumberColumn('Expenses')
             ->addNumberColumn('Net Worth')
             ->addRow(['2009-1-1', 1100, 490, 1324])
             ->addRow(['2010-1-1', 1000, 400, 1524])
             ->addRow(['2011-1-1', 1400, 450, 1351])
             ->addRow(['2012-1-1', 1250, 600, 1243])
             ->addRow(['2013-1-1', 1100, 550, 1462]);
    
    $lava->ComboChart('Finances', $finances, [
        'title' => 'Company Performance',
        'titleTextStyle' => [
            'color'    => 'rgb(123, 65, 89)',
            'fontSize' => 16
        ],
        'legend' => [
            'position' => 'in'
        ],
        'seriesType' => 'bars',
        'series' => [
            2 => ['type' => 'line']
        ]
    ]);
    
    return view('env-graph',compact('lava'));
})->name('env-graph')->middleware('auth');

Route::post('/draw-graph', function() {
    return view('env-graph');
})->name('env-graph')->middleware('auth');

Route::get('/add-home', function() {
    return view('add-home');
})->name('add-home')->middleware('auth');

Route::post('/add-home', function(Request $request) {
    $data = $request->all();
    $home = greenhouse::create([
        'name' => $data['name'],
        'max_number' => $data['max_number'],
    ]);

    return redirect('home');
})->name('add-home')->middleware('auth');

Route::get('/add-seeds', function() {
    return view('/add-seeds');
})->name('/add-seeds')->middleware('auth');

Route::post('/add-seeds', function(Request $request) {
    $data = $request->all();
    $home = seed::create([
        'name' => $data['name'],
        'code' => $data['code'],
        'arrive_date' => $data['arrive_date'],
        'number' => $data['number'],
        'seed_type_id' => 1
    ]);

    return redirect('seeds');
})->name('add-seeds')->middleware('auth');

Route::post('/add-rassada', function(Request $request) {
    $data = $request->all();
    $data['id'] = 1;
    $home = seedlings::create([
        'name' => $data['name'],
        'code' => $data['number'],
        'seed_date' => $data['seed_date'],
        'seed_id' => $data['id']
    ]);

    $seed = Seed::find($data['id'])->delete();

    return redirect('seeds');
})->name('add-rassada')->middleware('auth');
