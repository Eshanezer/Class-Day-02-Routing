<?php

use Illuminate\Support\Facades\Route;

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

// BASIC ROUTING

Route::get('/', function () {  // welcome url
     return 'Hi, Developers ! Welcome to DG LK !';
});

Route::get('/home' , function (){
   return 'Welcome to DG LK Home Page !';
});

Route::get('/contact' , function (){
    return redirect()->route('user-user-profile');
});
Route::get('/user' , function (){
    return redirect()->route('user-profile'); // route name redirect
});

// 6 Methods
Route::get('/admin/dashboard' , function (){  // method - GET
   return view('welcome');
     //return  redirect('member/free/u/0/profile'); // url redirect
});

Route::post('/admin/dashboard' , function (){  // method - POST
    return view('welcome');
});

Route::put('/admin/dashboard' , function (){  // method - PUT
    return view('welcome');
});

Route::patch('/admin/dashboard' , function (){  // method - PATCH
    return view('welcome');
});

Route::delete('/admin/dashboard' , function (){  // method - DELETE
    return view('welcome');
});

Route::options('/admin/dashboard' , function (){  // method - OPTIONS
    return view('welcome');
});

// Available Router Methods

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

Route::get('user/developer',function (){
    return 'Hi Eshan D Wijesinghe';
});

// Named Routing
Route::get('member/free/u/0/profile', function (){
   return 'User Profile';
})->name('user-user-profile');

Route::get('member/sliver/asdasdasbdasdasd/asdasdasdsad86as4d5asdsadas/Eshanezer', function (){
    return 'User Profile';
})->name('user-profile');

// facebook.com/Eshanezer - user-profile
// facebook.com/member/Eshanezer
// facebook.com/member/gold/Eshanezer
// facebook.com/member/sliver/Eshanezer

// Redirect Routes
//     return redirect()->route('user-profile'); // route name redirect
//     return  redirect('member/free/u/0/profile'); // url redirect
//
// Route::redirect('/user2', 'member/free/u/0/profile');
// Route::redirect('/here', '/there', 301);  // 301 - permanently redirect / 302 - temporarily
//Route::permanentRedirect('/here','/there');

//Grouped Routing

// guest/profile  guest/profile/bio  guest/profile/chat
//member/profile   member/profile/bio  member/profile/chat

// Guest

//Route::get('/gust/profile' , function (){
//    return 'G P !';
//});

//Route::get('/gust/profile/bio' , function (){
//    return 'G P B!';
//});
//
//Route::get('/gust/profile/chat' , function (){
//    return 'G P C!';
//});
//Route::get('/gust/profile/photo' , function (){
//    return 'G P C!';
//});

Route::prefix('guest/u/profile')->group(function (){
    Route::get('/' , function (){
        return 'G P !';
    });
    Route::get('/chat' , function (){
            return 'G P C!';
    });
    Route::get('/bio' , function (){
        return 'G P B!';
    });
    Route::get('/photo' , function (){
        return 'G P P!';
    });
});

Route::prefix('guest/u/profile')->group(function (){
    Route::get('/chat' , function (){
        return 'G P C!';
    });
});

// profile/user/admin chat/user/admin - suffixes
