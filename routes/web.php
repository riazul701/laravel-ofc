<?php

use Illuminate\Support\Facades\Route;
//use DB;
use App\User;
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

//Route::get('/', 'UserController@index');

/* Retrieving All Rows From A Table */
/* Table: users [id Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')->get();
//    foreach ($users as $user) {
//        echo $user->name . '<br />';
//    }
//});

/* Retrieving A Single Row / Column From A Table */
/* Table: users [id Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $user = DB::table('users')->where('name', 'Name One')->first();
//    echo $user->name;

//    $email = DB::table('users')->where('name', 'Name One')->value('email');
//    echo $email;

//    $user = DB::table('users')->find(3);
//    dd($user);
//});

/* Retrieving A List Of Column Values */
/* Table: roles [id  Primary  int(11)  AUTO_INCREMENT, title  varchar(255), name  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $titles = DB::table('roles')->pluck('title');
//    foreach ($titles as $title) {
//        echo $title . '<br />';
//    }

//    $roles = DB::table('roles')->pluck('title', 'name');
//    foreach ($roles as $name => $title) {
//        echo $title . '<br />';
//        echo $name . '<br />';
//    }
//});

/* Chunking Results */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), active  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    DB::table('users')->orderBy('id')->chunk(2, function ($users) {
//        foreach ($users as $user) {
//            echo $user->name . '<br />';
//        }
//    });

//    DB::table('users')->orderBy('id')->chunk(2, function ($users) {
//        // Process the records...
//        foreach ($users as $user) {
//            echo $user->name . '<br />';
//        }
//        return false;
//    });

//    DB::table('users')->where('active', false)->chunkById(2, function ($users) {
//        foreach ($users as $user) {
//            DB::table('users')->where('id', $user->id)->update(['active' => true]);
//        }
//    });
//});

/* Aggregates && Determining If Records Exist */
/* Table: orders [id  Primary  int(11)  AUTO_INCREMENT, description  varchar(255), finalized  tinyint(1), price  int(11), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $orders = DB::table('orders')->count();
//    echo $orders;

//    $price = DB::table('orders')->max('price');
//    echo $price;

//    $price = DB::table('orders')->where('finalized', 1)->avg('price');
//    echo $price;

//    return DB::table('orders')->where('finalized', 1)->exists();
//    return DB::table('orders')->where('finalized', 1)->doesntExist();
//});

/* Selects - Specifying A Select Clause */
/* Table: users [id  Primary 	int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), created_at timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')->select('name', 'email as user_email')->get();
//    return $users;

//    $users = DB::table('users')->distinct()->get();
//    return $users;

//    $users = DB::table('users')->distinct()->select('name')->get();
//    return $users;

//    $query = DB::table('users')->select('name');
//    $users = $query->addSelect('email')->get();
//    return $users;
//});

/* Raw Expressions */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), status  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')
//        ->select(DB::raw('count(*) as user_count, status'))
//        ->where('status', '<>', 1)
//        ->groupBy('status')
//        ->get();
//    return $users;
//});

/* Raw Methods */
/* Table: orders [id  Primary  int(11)  AUTO_INCREMENT, description  varchar(255), state  varchar(255), price  int(11), department  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $orders = DB::table('orders')->selectRaw('price * ? as price_with_tax', [1.0825])->get();
//    return $orders;

//    $orders = DB::table('orders')->whereRaw('price > IF(state = "TX", ?, 100)', [200])->get();
//    return $orders;

//    $orders = DB::table('orders')
//        ->select('department', DB::raw('SUM(price) as total_sales'))
//        ->groupBy('department')
//        ->havingRaw('SUM(price) > ?', [3000])
//        ->get();
//    return $orders;

//    $orders = DB::table('orders')->orderByRaw('updated_at - created_at DESC')->get();
//    return $orders;

//    $orders = DB::table('orders')->select('description', 'department')->groupByRaw('description, department')->get();
//    return $orders;
//});

/* Joins - Inner Join Clause */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255)] */
/* Table: contacts [id  Primary  int(11)  AUTO_INCREMENT, user_id  int(11), phone  varchar(20)] */
/* Table: orders [id  Primary  int(11)  AUTO_INCREMENT, user_id  int(11), price 	int(11)] */
//Route::get('/', function () {
//    $users = DB::table('users')
//        ->join('contacts', 'users.id', '=', 'contacts.user_id')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
//        ->select('users.*', 'contacts.phone', 'orders.price')
//        ->get();
//    return $users;
//});

/* Joins - Left Join / Right Join Clause */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255)] */
/* Table: posts [id  Primary  int(11)  AUTO_INCREMENT, user_id  int(11), title  varchar(255)] */
//Route::get('/', function () {
//    $users = DB::table('users')->leftJoin('posts', 'users.id', 'posts.user_id')->get();
//    return $users;

//    $users = DB::table('users')->rightJoin('posts', 'users.id', '=', 'posts.user_id')->get();
//    return $users;
//});

/* Joins - Cross Join Clause */
/* Table: colors [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255)] */
/* Table: sizes [id  Primary  int(11)  AUTO_INCREMENT, dimension  varchar(255)] */
//Route::get('/', function () {
//    $sizes = DB::table('sizes')->crossJoin('colors')->get();
//    return $sizes;
//});

/* Joins - Advanced Join Clauses */
/* Table: users [ 	id Primary 	int(11) AUTO_INCREMENT, name 	varchar(255)] */
/* Table: contacts [id  Primary  int(11)  AUTO_INCREMENT, user_id  int(11), phone  varchar(20)] */
//Route::get('/', function () {
//    $results = DB::table('users')->join('contacts', function ($join) {
//        $join->on('users.id', '=', 'contacts.user_id');
//    })->get();
//    return $results;

//    $results = DB::table('users')->join('contacts', function ($join) {
//        $join->on('users.id', '=', 'contacts.user_id')->where('contacts.user_id', '>', 1);
//    })->get();
//    return $results;
//});

/* Joins - Subquery Joins */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255)] */
/* Table: posts [id  Primary 	int(11)  AUTO_INCREMENT, user_id  int(11), title  varchar(255), is_published  tinyint(1), created_at  timestamp] */
//Route::get('/', function () {
//    $latestPosts = DB::table('posts')
//        ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
//        ->where('is_published', true)
//        ->groupBy('user_id');
//
//    $users = DB::table('users')
//        ->joinSub($latestPosts, 'latest_posts', function ($join) {
//            $join->on('users.id', '=', 'latest_posts.user_id');
//        })->get();
//    return $users;
//});

/* Unions */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, first_name 	varchar(255), last_name 	varchar(255)] */
//Route::get('/', function () {
//    $first = DB::table('users')
//        ->whereNull('first_name');
//    $users = DB::table('users')
//        ->whereNull('last_name')
//        ->union($first)
//        ->get();
//    return $users;
//});

/* Where Clauses */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255) , votes  int(11), status  tinyint(1), subscribed  tinyint(1), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')->where('votes', '=', 100)->get();
//    return $users;

//    $users = DB::table('users')->where('votes', 100)->get();
//    return $users;

//    $users = DB::table('users')->where('votes', '>=', 100)->get();
//    return $users;

//    $users = DB::table('users')->where('votes', '<>', 100)->get();
//    return $users;

//    $users = DB::table('users')->where('name', 'like', '%T%')->get();
//    return $users;

//    $users = DB::table('users')->where([
//        ['status', '=', '1'],
//        ['subscribed', '<>', '1']
//    ])->get();
//    return $users;

//    $users = DB::table('users')
//        ->where('votes', '>', 100)
//        ->orWhere('name', 'John')
//        ->get();
//    return $users;

//    $users = DB::table('users')
//        ->where('votes', '>', 100)
//        ->orWhere(function ($query) {
//            $query->where('name', 'Abigail')
//                ->where('votes', '>', 50);
//        })->get();
//    return $users;

//    $users = DB::table('users')->whereBetween('votes', [1, 100])->get();
//    return $users;

//    $users = DB::table('users')->whereNotBetween('votes', [1, 100])->get();
//    return $users;

//    $users = DB::table('users')->whereIn('id', [1, 2, 3])->get();
//    return $users;

//    $users = DB::table('users')->whereNotIn('id', [1, 2, 3])->get();
//    return $users;

//    $users = DB::table('users')->whereNull('updated_at')->get();
//    return $users;

//    $users = DB::table('users')->whereNotNull('updated_at')->get();
//    return $users;

//    $users = DB::table('users')->whereDate('created_at', '2016-12-31')->get();
//    return $users;

//    $users = DB::table('users')->whereMonth('created_at', '12')->get();
//    return $users;

//    $users = DB::table('users')->whereDay('created_at', 31)->get();
//    return $users;

//    $users = DB::table('users')->whereYear('created_at', '2016')->get();
//    return $users;

//    $users = DB::table('users')->whereTime('created_at', '11:20:45')->get();
//    return $users;

//    $users = DB::table('users')->whereColumn('status', 'subscribed')->get();
//    return $users;

//    $users = DB::table('users')->whereColumn('updated_at', '>', 'created_at')->get();
//    return $users;

//    $users = DB::table('users')->whereColumn([
//        ['status', '=', 'subscribed'],
//        ['updated_at', '>', 'created_at']
//    ])->get();
//    return $users;
//});

/* Parameter Grouping */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), votes  int(11), title  varchar(255), created_at  timestamp, updated_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')
//        ->where('name', '=', 'John')
//        ->where(function ($query) {
//            $query->where('votes', '>', 100)
//                ->orWhere('title', '=', 'Admin');
//        })->get();
//    return $users;
//});

/* Where Exists Clauses */
/* Table: users [id Primary 	int(11) AUTO_INCREMENT, name 	varchar(255)] */
/* Table: orders [id  Primary  int(11)  AUTO_INCREMENT, user_id  int(11), title  varchar(255)] */
//Route::get('/', function () {
//    $users = DB::table('users')
//        ->whereExists(function ($query) {
//            $query->select(DB::raw(1))
//                ->from('orders')
//                ->whereRaw('orders.user_id = users.id');
//        })->get();
//    return $users;
//});

/* Subquery Where Clauses */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255)] */
/* Table: membership [id  Primary 	int(11)  AUTO_INCREMENT, user_id  int(11), type 	varchar(255), start_date  date] */
//Route::get('/', function () {
//    $users = User::where(function ($query) {
//        $query->select('type')
//            ->from('membership')
//            ->whereColumn('user_id', 'users.id')
//            ->orderByDesc('start_date')
//            ->limit(1);
//    }, 'Pro')->get();
//    return $users;
//});

/* JSON Where Clauses */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), options  longtext, preferences  longtext] */
//Route::get('/', function () {
//    $language = array(
//        'language' => 'en'
//    );
//    $language_json = json_encode($language);
//    DB::table('users')->insert([
//        'name' => 'Name One',
//        'options' => $language_json
//    ]);

//    $users = DB::table('users')
//        ->where('options->language', 'en')
//        ->get();
//    return $users;

//    $preference = array(
//        'dining' => array(
//            'meal' => 'salad'
//        )
//    );
//    $preference_json = json_encode($preference);
//    DB::table('users')->insert([
//        'name' => 'Name Two',
//        'preferences' => $preference_json
//    ]);

//    $users = DB::table('users')
//        ->where('preferences->dining->meal', 'salad')
//        ->get();
//    return $users;

//    $users = DB::table('users')
//        ->whereJsonContains('options->language', 'en')
//        ->get();
//    return $users;

//    $language = array(
//        'language' => array('en', 'de')
//    );
//    $language_json = json_encode($language);
//    DB::table('users')->insert([
//        'name' => 'Name Three',
//        'options' => $language_json
//    ]);

//    $users = DB::table('users')
//        ->whereJsonContains('options->language', ['en', 'de'])
//        ->get();
//    return $users;

//    $language = array(
//        'language' => ''
//    );
//    $language_json = json_encode($language);
//    DB::table('users')->insert([
//        'name' => 'Name Four',
//        'options' => $language_json
//    ]);

//    $users = DB::table('users')
//        ->whereJsonLength('options->language', 0)
//        ->get();
//    return $users;

//    $users = DB::table('users')
//        ->whereJsonLength('options->language', '>', 1)
//        ->get();
//    return $users;
//});

/* Ordering, Grouping, Limit & Offset */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), account_id  int(11), created_at  timestamp] */
//Route::get('/', function () {
//    $users = DB::table('users')->orderBy('name', 'desc')->get();
//    return $users;

//    $users = DB::table('users')->latest()->first();
//    dd($users);

//    $randomUser = DB::table('users')->inRandomOrder()->first();
//    dd($randomUser);

//    $query = DB::table('users')->orderBy('name');
//    $unorderedUsers = $query->reorder()->get();
//    return $unorderedUsers;

//    $query = DB::table('users')->orderBy('name');
//    $usersOrderedByEmail = $query->reorder('email', 'desc')->get();
//    return $usersOrderedByEmail;

//    $users = DB::table('users')
//        ->groupBy('account_id')
//        ->having('account_id', '>', 100)
//        ->get();
//    return $users;

//    $users = DB::table('users')
//        ->groupBy('name', 'email')
//        ->having('account_id', '>', 100)
//        ->get();
//    return $users;

//    $users = DB::table('users')->skip(1)->take(2)->get();
//    return $users;

//    $users = DB::table('users')->offset(1)->limit(2)->get();
//    return $users;
//});

/* Conditional Clauses */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, role_id  int(11), name 	varchar(255), email  varchar(255)] */
//Route::get('/{role?}', function ($role) {
//    $users = DB::table('users')
//        ->when($role, function ($query, $role) {
//        return $query->where('role_id', $role);
//    })->get();
//    return $users;

//    $sortBy = null;
//    $sortBy = 'email';
//    $users = DB::table('users')
//        ->when($sortBy, function ($query, $sortBy) {
//            return $query->orderBy($sortBy);
//        }, function ($query) {
//            return $query->orderBy('name');
//        })->get();
//    return $users;
//});

/* Inserts */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), votes  int(11)] */
//Route::get('/', function () {
//    DB::table('users')->insert([
//        'email' => 'john@example.com',
//        'votes' => 0
//    ]);

//    DB::table('users')->insert([
//        ['email' => 'taylor@example.com', 'votes' => 0],
//        ['email' => 'dayle@example.com', 'votes' => 0]
//    ]);

//    $id = DB::table('users')->insertGetId(
//        ['email' => 'john@example.com', 'votes' => 0]
//    );
//    echo $id;
//});

/* Updates */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), votes  int(11), options  longtext] */
//Route::get('/', function () {
//    $affected = DB::table('users')->where('id', 1)->update(['votes' => 1]);
//    return $affected;

//    DB::table('users')
//        ->updateOrInsert(
//            ['email' => 'john@example.com', 'name' => 'John'],
//            ['votes' => 2]
//        );

//    $options = array('enabled' => false);
//    $options_json = json_encode($options);
//    DB::table('users')->insert(['options' => $options_json]);

//    $affected = DB::table('users')->where('id', 1)->update(['options->enabled' => true]);

//    DB::table('users')->increment('votes');
//    DB::table('users')->increment('votes', 5);
//    DB::table('users')->decrement('votes');
//    DB::table('users')->decrement('votes', 5);
//    DB::table('users')->increment('votes', 1, ['name' => 'John']);
//});

/* Table: users */
/*  Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), votes  int(11)] */
//Route::get('/', function () {
//    DB::table('users')->delete();
//    DB::table('users')->where('votes', '>', 100)->delete();
//    DB::table('users')->truncate();
//});

/* Pessimistic Locking */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), email  varchar(255), votes  int(11)] */
//Route::get('/', function () {
//    DB::table('users')->where('votes', '>', 100)->sharedLock()->get();
//    DB::table('users')->where('votes', '>', 100)->lockForUpdate()->get();
//});

/* Debugging */
/* Table: users [id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255),  	email  varchar(255), votes  int(11)] */
//Route::get('/', function () {
//    DB::table('users')->where('votes', '>', 100)->dd();
//    DB::table('users')->where('votes', '>', 100)->dump();
//});
