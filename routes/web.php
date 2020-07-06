<?php

use Illuminate\Support\Facades\Route;
use App\Flight;
//use App\Destination;
use App\User;
use App\Scopes\AgeScope;
use Illuminate\Database\Eloquent\Builder;

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

//Route::get('/', function () {
//    return view('welcome');
//});

/* Table Names */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight =  new Flight;
//    $flight->name = 'Name One';
//    $flight->save();
//});

/* Primary Keys */
/* Table: my_flights [flight_id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight =  new Flight;
//    $flight->name = 'Name Two';
//    $flight->save();
//});

/* Primary Keys */
/* Table: my_flights [flight_id  Primary  varchar(20), name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->flight_id = '11';
//    $flight->name = 'Name Eleven';
//    $flight->save();
//});

/* Timestamps */
/* Table: my_flights [flight_id  Primary  varchar(20), name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->flight_id = '12';
//    $flight->name =  'Name Twelve';
//    $flight->save();
//});

/* Timestamps */
/* Table: my_flights [flight_id  Primary  varchar(20), name  varchar(255), created_at  bigint(20), updated_at  bigint(20)] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->flight_id = '13';
//    $flight->name =  'Name Thirteen';
//    $flight->save();
//});

/* Timestamps */
/* Table: my_flights [flight_id  Primary  varchar(20), name  varchar(255), creation_date  timestamp, last_update  timestamp] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->flight_id = '14';
//    $flight->name =  'Name Fourteen';
//    $flight->save();
//});

/* Database Connection */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->name = 'Name Fifteen';
//    $flight->save();
//});

/* Default Attribute Values */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), is_delayed  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = new Flight;
//    $flight->name = 'Name Sixteen';
//    $flight->save();
//});

/* Retrieving Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flights = Flight::all();
//    foreach ($flights as $flight) {
//        echo $flight->name . '<br />';
//    }
//});

/* Retrieving Models - Adding Additional Constraints */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flights = Flight::where('active', 1)->orderBy('name', 'desc')->take(10)->get();
//    foreach ($flights as $flight) {
//        echo $flight->name . '<br />';
//    }
//});

/* Retrieving Models - Refreshing Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = Flight::where('name', 'Name One')->first();
//    $flight->name = 'Name Temporary';
//    $freshFlight = $flight->fresh();
//    echo $freshFlight->name;
//});

/* Retrieving Models - Refreshing Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = Flight::where('name', 'Name Two')->first();
//    $flight->name = 'Name Temporary';
//    $flight->refresh();
//    echo $flight->name;
//});

/* Collections */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), cancelled  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flights = Flight::all();
//    $flights = $flights->reject(function ($flight) {
//        return $flight->cancelled;
//    });
//
//    foreach ($flights as $flight) {
//        echo $flight->name . '<br />';
//    }
//});

/* Chunking Results */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), cancelled  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    Flight::chunk(200, function ($flights) {
//        foreach ($flights as $flight) {
//            echo $flight->name . '<br />';
//        }
//    });
//});

/* Using Cursors */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), cancelled  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    foreach (Flight::where('cancelled', 0)->cursor() as $flight) {
//        echo $flight->name . '<br />';
//    }

//    $flights = Flight::cursor()->filter(function($flight) {
//        return $flight->cancelled;
//    });
//    foreach ($flights as $flight) {
//        echo $flight->name . '<br />';
//    }
//});

/* Advanced Subqueries - Subquery Selects */
/* Table: my_flights [ id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), destination_id  int(11), arrived_at  datetime(1), created_at  timestamp, updated_at  timestamp] */
/* Table: destinations [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255),  	last_flight  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    return Destination::addSelect([
//        'last_flight' => Flight::select('name')->whereColumn('destination_id', 'destinations.id')->orderBy('arrived_at', 'desc')->limit(1)
//    ])->get();
//});

/* Advanced Subqueries - Subquery Ordering */
/* Table: my_flights [ id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), destination_id  int(11), arrived_at  datetime(1), created_at  timestamp, updated_at  timestamp] */
/* Table: destinations [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255),  	last_flight  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    return Destination::orderByDesc(
//        Flight::select('arrived_at')->whereColumn('destination_id', 'destinations.id')->orderBy('arrived_at', 'desc')->limit(1)
//    )->get();
//});

/* Retrieving Single Models / Aggregates */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1) , price  int(11), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
    // Retrieve a model by its primary key...
//    $flight = Flight::find(1);
//    return $flight;

    // Retrieve the first model matching the query constraints...
//    $flight = Flight::where('active', 1)->first();
//    return $flight;

    // Shorthand for retrieving the first model matching the query constraints...
//    $flight = Flight::firstWhere('active', 1);
//    return $flight;

//    $flights = Flight::find([1, 2, 3]);
//    return $flights;

//    $model = Flight::where('price', '>', 2000)->firstOr(function () {
//        return 'Not Found';
//    });
//    return $model;

//    $model = Flight::where('price', '>', 2000)->firstOr(['name', 'price'], function () {
//        return 'Not Found';
//    });
//    return $model;

//    $model = Flight::findOrFail(10);
//    return $model;

//    $model = Flight::where('price', '>', 2000)->firstOrFail();
//    return $model;
//});

/* Retrieving Single Models / Aggregates */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1) , price  int(11), created_at  timestamp, updated_at  timestamp] */
//Route::get('/api/flights/{id}', function ($id) {
//    return Flight::findOrFail($id);
//});

/* Retrieving Aggregates */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), price  int(11), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $count = Flight::where('active', 1)->count();
//    return $count;

//    $max = Flight::where('active', 1)->max('price');
//    return $max;
//});

//Route::get('/{name}', 'FlightController@store');

/* Updates */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = Flight::find(1);
//    $flight->name = 'New Flight Name';
//    $flight->save();
//});

/* Mass Updates */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), destination  varchar(255), is_delayed  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    Flight::where('active', 1)->where('destination', 'San Diego')->update(['is_delayed' => 1]);
//});

/* Updates - Examining Attribute Changes */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, first_name  varchar(255), last_name  varchar(255), title  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $user = User::create([
//        'first_name' => 'Taylor',
//        'last_name' => 'Otwell',
//        'title' => 'Developer',
//    ]);
//    $user->title = 'Painter';

//    var_dump($user->isDirty()); // true
//    var_dump($user->isDirty('title')); // true
//    var_dump($user->isDirty('first_name')); // false

//    var_dump($user->isClean()); // false
//    var_dump($user->isClean('title')); //false
//    var_dump($user->isClean('first_name')); // true

//    $user->save();
//    var_dump($user->isDirty()); // false
//    var_dump($user->isClean()); // true

//    $user->save();
//    var_dump($user->wasChanged()); // true
//    var_dump($user->wasChanged('title')); // true
//    var_dump($user->wasChanged('first_name')); // false
//});

/* Updates - Examining Attribute Changes */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $user = User::find(1);
//    echo $user->name; // John
//    echo $user->email; // john@example.com
//    $user->name = "Jack";
//    echo $user->name; // Jack
//    echo $user->getOriginal('name'); // John
//    var_dump($user->getOriginal()); // Array of original attributes...
//});

/* Mass Assignment */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), destination  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = Flight::create(['name' => 'Name Ten']);
//    return $flight;

//    $flight = new Flight;
//    $flight->fill(['name' => 'Name Eleven']);
//    $flight->save();

//    Flight::create(['destination' => 'Destination One']);
//});

/* Mass Assignment - Guarding Attributes */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), price  int(11), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight =  Flight::create([
//        'name' => 'Name Twelve',
//    ]);
//    return $flight;

//    $flight = Flight::create([
//        'name' => 'Name Thirteen',
//        'price' => 2100
//    ]);
//    return $flight;
//});

/* Other Creation Methods */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), is_delayed  tinyint(1), arrival_time  time, created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
    // Retrieve flight by name, or create it if it doesn't exist...
//    $flight = Flight::firstOrCreate(['name' => 'Name Fourteen']);
//    return $flight;

    // Retrieve flight by name, or create it with the name, delayed, and arrival_time
//    $flight = Flight::firstOrCreate(
//        ['name' => 'Name Eight'],
//        ['is_delayed' => 1, 'arrival_time' => '11:30']
//    );
//    return $flight;

    // Retrieve by name, or instantiate...
//    $flight = Flight::firstOrNew(['Name' => 'Name Nine']);
//    return $flight->save();

    // Retrieve by name, or instantiate with the name, delayed, and arrival_time attributes...
//    $flight = Flight::firstOrNew(
//        ['name' => 'Name Ten'],
//        ['is_delayed' => 1, 'arrival_time' => '11:30']
//    );
//    return $flight->save();

//    $flight = Flight::updateOrCreate(
//        ['is_delayed' => 1, 'arrival_time' => '12:30'],
//        ['name' => 'Name Eleven']
//    );
//    return $flight;
//});

/* Deleting Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight = Flight::find(11);
//    $flight->delete();

//    Flight::destroy(10);
//    Flight::destroy(5, 6, 7);
//    Flight::destroy([5, 6, 7]);
//    Flight::destroy(collect([5, 6, 7]));

//    $deletedRows = Flight::where('active', 0)->delete();
//    return $deletedRows;
//});

/* Querying Soft Deleted Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), deleted_at  timestamp, created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flights = Flight::withTrashed()->where('active', 1)->get();
//    return $flights;

//    $flights = Flight::onlyTrashed()->where('active', 1)->get();
//    return $flights;

//    Flight::withTrashed()->restore();
//    Flight::withTrashed()->where('active', 1)->restore();
//    $flight = Flight::onlyTrashed();
//    $flight->forceDelete();
//});

/* Replicating Models */
/* Table: my_flights [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), from_address  varchar(255), to_address  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $flight_one = Flight::create([
//        'name' => 'Name One',
//        'from_address' => 'From Address One',
//        'to_address' => 'To Address One'
//    ]);
//    $flight_two = $flight_one->replicate()->fill([
//        'name' => 'Name Two'
//    ]);
//    $flight_two->save();
//});

/* Query Scopes - Global Scopes */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(200), age  int(11)] */
//Route::get('/', function () {
//    $users = User::all();
//    return $users;

//    $users = User::withoutGlobalScope(AgeScope::class)->get();
//    return $users;

//    $users = User::withoutGlobalScope('age')->get();
//    return $users;

    // Remove all of the global scopes...
//    $users = User::withoutGlobalScopes()->get();
//    return $users;

    // Remove some of the global scopes...
//    $users = User::withoutGlobalScopes([
//        AgeScope::class,  // FirstScope::class, SecondScope::class
//    ])->get();
//    return $users;
//});

/* Query Scopes - Local Scopes */
//Route::get('/', function () {
//    $users = User::popular()->active()->orderBy('created_at')->get();
//    return $users;

//    $users = User::popular()->orWhere(function (Builder $query) {
//        $query->active();
//    })->get();
//    return $users;

//    $users = User::popular()->orWhere->active()->get();
//    return $users;

//    $users = User::ofType('admin')->get();
//    return $users;
//});

