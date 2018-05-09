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
    // return view('welcome');
    return redirect('/index');
})->name('staticpage');
/*Route::get('admin', function () {
    return redirect('/admin/default/jqadm/search/dashboard?lang=zh_CN');
});*/

Auth::routes();


//index
Route::get('/index', 'IndexController@index')->name('index');

//about
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/aixuebang', 'AboutController@aixuebang')->name('aixuebang');
Route::get('/gangyueaoyuwenjiaoyuyanjiuyuan', 'AboutController@gangyueaoyuwenjiaoyuyanjiuyuan')->name('gangyueaoyuwenjiaoyuyanjiuyuan');
Route::get('/xianggangyinghuazazhishe', 'AboutController@xianggangyinghuazazhishe')->name('xianggangyinghuazazhishe');
Route::get('/zhonghuajichujiaoyuyanjiuyuan', 'AboutController@zhonghuajichujiaoyuyanjiuyuan')->name('zhonghuajichujiaoyuyanjiuyuan');

//gongyi
Route::get('/gongyi', 'GongyiController@gongyi')->name('gongyi');
Route::get('/langdujia', 'GongyiController@langdujia')->name('langdujia');
Route::get('/piaoliuping', 'GongyiController@piaoliuping')->name('piaoliuping');
Route::get('/qianxiaobairijingdiansongdu', 'GongyiController@qianxiaobairijingdiansongdu')->name('qianxiaobairijingdiansongdu');
Route::get('/zhengwen', 'GongyiController@zhengwen')->name('zhengwen');

//contact
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/chengshihehuoren', 'ContactController@chengshihehuoren')->name('chengshihehuoren');
Route::get('/zhaoxiannashi', 'ContactController@zhaoxiannashi')->name('zhaoxiannashi');

//jiamenghezuo
Route::get('/jiamenghezuo', 'JiamenghezuoController@jiamenghezuo')->name('jiamenghezuo');