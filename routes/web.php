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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home1', function() {
//     return view('clients.homepage');
// });
// register Course
Route::get('/registercustom', 'Auth\RegisterController@registercustom')->name('registercustom');
Route::post('/registerSubmit', 'Auth\RegisterController@registerSubmit')->name('registerSubmit');
// Login Facebook
Route::get('auth/facebook', 'RegisterCustomController@redirectToProvider')->name('facebook.login') ;
Route::get('auth/facebook/callback', 'RegisterCustomController@handleProviderCallback');

Route::group(['middleware' => 'locale'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
        Route::get('dashboard', 'HomeController@index')->name('home');
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::post('/editprofile', 'UserController@editprofile')->name('editprofile');

        Route::group(['prefix' => 'admin'], function() {
            
            Route::get('/datatable/{id}', 'UserController@UserDatatable')->name('datatables.user');
            Route::post('/add/{id}', 'UserController@add')->name('addUser');
            Route::post('/changestatus', 'UserController@changestatus')->name('changestatus');
            Route::post('/changePassword', 'UserController@changePassword')->name('changePassword');

            Route::group(['prefix' => 'teachers'], function() {
                Route::get('/', 'UserController@teacher');
                Route::get('teacher-info/{id}', 'UserController@teacherInfo')->name('teacher-info');
            });

            Route::prefix('/students')->group(function() {
                Route::get('/', 'UserController@student');
            });
            Route::get('/showUser/{id}', 'UserController@showUser')->name('showUser');
            Route::prefix('/classes')->group(function() {
                Route::get('/', 'ClassesController@index');
                Route::get('/ClassesDatatable/{status}', 'ClassesController@classesDatatable')->name('classesDatatable');
                Route::get('/studentClassDatatable/{user_id}', 'ClassesController@studentClassDatatable')->name('studentClassDatatable');
                Route::get('/teacherClassDatatable/{user_id}/{status}', 'ClassesController@teacherClassDatatable')->name('teacherClassDatatable');
                Route::post('/addClass', 'ClassesController@addclass')->name('addClass');
                Route::post('/addLesson', 'ClassesController@addLesson')->name('addLesson');
                Route::get('datatablesAdddetail/{classId}', 'ClassesController@datatablesAdddetail')->name('datatables.addDetaiClass');
                Route::post('/addStudentToClass', 'ClassesController@addStudentToClass')->name('addStudentToClass');
                // 'ClassInforController@index'
                Route::get('/classDetail/{id}', 'ClassInforController@index')->name('classDetail');
                Route::get('/classDetailDatatable/{id}', 'ClassInforController@classDetailDatatable')->name('classDetailDatatable');
                // edit content of lession: document, exercise, name ...
                Route::get('/editLession/{class_id}/{lesson_id}', 'ClassInforController@editLession')->name('editLession');
                Route::post('/editinfo', 'ClassInforController@editinfo')->name('editinfo');
                Route::post('/editlessionDocument', 'ClassInforController@editlessionDocument')->name('editlessionDocument');
                Route::post('/editlessionExercise', 'ClassInforController@editlessionExercise')->name('editlessionExercise');

                 Route::post('/addlessionDocument', 'ClassInforController@addlessionDocument')->name('addlessionDocument');
                Route::post('/addlessionExercise', 'ClassInforController@addlessionExercise')->name('addlessionExercise');

                Route::get('/ShowLession/{class_id}/{lesson_id}', 'ClassInforController@ShowLession')->name('ShowLession');
                Route::get('/ShowExercise/{class_id}/{lesson_id}', 'ClassInforController@ShowExercise')->name('ShowExercise');
                Route::get('/download-pdf/{class_id}/{lesson_id}', 'ClassInforController@downloadPDF')->name('downloadPDF');
                // submit exercise for student.
                Route::post('/submitExercise', 'HomeworkController@submitExercise')->name('submitExercise');
                Route::post('/showHomework', 'HomeworkController@showHomework')->name('showHomework');
                // marking
                Route::get('/showmarkingLession/{class_id}/{lesson_id}', 'HomeworkController@showmarkingLession')->name('showmarkingLession');
                Route::get('/markingLession/{class_id}/{lesson_id}/{user_id}', 'HomeworkController@markingLession')->name('markingLession');
                Route::post('/submitMarking', 'HomeworkController@submitMarking')->name('submitMarking');
            });

            // list register
            Route::get('/registerList', 'RegisterCustomController@registerList');
            Route::get('/registerDatatable/{status}', 'RegisterCustomController@registerDatatable')->name('registerDatatable');
            Route::prefix('course')->name('course.')->group(function() {
                Route::get('/', 'CourseController@index');
                Route::get('/datatable', 'CourseController@datatable')->name('datatable');
                Route::post('/add', 'CourseController@create')->name('add');
                Route::get('/show/{id}', 'CourseController@show')->name('show');
                Route::post('/update/{id}', 'CourseController@update')->name('update');
                Route::post('/delete', 'CourseController@destroy')->name('delete');
            });

            Route::prefix('/permission')->name('permission.')->group(function() {
                $ctl = 'PermissionController';
                Route::get('/', 'PermissionController@index');
                Route::get('/datatable', 'PermissionController@datatable')->name('datatable');
                Route::get('/datatableRole', 'PermissionController@datatableRole')->name('datatableRole');
                Route::get('/datatablePermissionRole', 'PermissionController@datatablePermissionRole')->name('datatablePermissionRole');
                Route::post('/store', 'PermissionController@store')->name('add');
                Route::get('/edit/{id}', 'PermissionController@edit')->name('edit');
                Route::post('/update', 'PermissionController@update')->name('update');
                Route::get('/role/edit/{id}', 'PermissionController@roleEdit')->name('roleedit');
                Route::post('/role/update', 'PermissionController@roleUpdate')->name('roleupdate');
                Route::get('/permissionRoleEdit/{id}', 'PermissionController@permissionRoleEdit')->name('permissionRoleEdit');
                Route::post('/permissionRoleUpdatee', $ctl . '@permissionRoleUpdatee')->name('permissionRoleUpdatee');
                Route::get('/Capquyen', $ctl . '@addVip')->name('addVip');
                Route::get('/Capquyen/datatable/{lang_id}', $ctl . '@addVipDatatable')->name('addVipDatatable');
                Route::post('/changeRole', $ctl . '@changeRole')->name('changeRole');
            });
        });

        Route::prefix('/documents')->group(function() {
            Route::get('/theory', 'DocumentController@index');
            Route::get('/theoryDatatable', 'DocumentController@theoryDatatable')->name('theoryDatatable');
            Route::post('/addTheory', 'DocumentController@create')->name('addDocument');
            Route::get('/showTheory/{id}', 'DocumentController@show')->name('showDocument');
            Route::get('/editTheory/{id}', 'DocumentController@edit')->name('editDocument');
            Route::post('/updateTheory/{id}', 'DocumentController@update')->name('updateDocument');
            Route::post('/deleteTheory/{id}', 'DocumentController@destroy')->name('deleteDocument');

            Route::get('/exercise', 'ExerciseController@index');
            Route::get('/exerciseDatatable', 'ExerciseController@exerciseDatatable')->name('exerciseDatatable');
            Route::post('/addExercise', 'ExerciseController@create')->name('addExercise');
            Route::get('/showExercise/{id}', 'ExerciseController@show')->name('showExercise');
            Route::get('/editExercise/{id}', 'ExerciseController@edit')->name('editExercise');
            Route::post('/updateExercise/{id}', 'ExerciseController@update')->name('updateExercise');
            Route::post('/deleteExercise/{id}', 'ExerciseController@destroy')->name('deleteExercise');
            Route::post('/importData', 'ExerciseController@importData')->name('importData');
        });

        // Route::get('permission', 'PermissionController@index');
        // Route::get('permissionDatatable', 'PermissionController@permissionDatatable');
    });
});

Route::post('reset-passwords', 'ResetPasswordController@sendMail')->name('request-resetpass');
Route::post('reset-password/{token}', 'ResetPasswordController@reset')->name('put-resetpass');
Route::get('reset-password', 'ResetPasswordController@formResetPass');
route::get('home-page', function() {
    return view('clients.homepage');
});

// Route::group(['name' => 'client.'], function() {
    $ctl = 'Client\HomeController';
    Route::get('/', $ctl . '@index')->name('client.home');
    Route::get('/course-infor/{slug}', $ctl . '@courseInfor')->name('client.course.infor');
    Route::get('/course/', $ctl . '@course')->name('client.course');
    Route::get('/teacher', $ctl . '@teacher')->name('client.teacher');
    Route::get('/mycourse', $ctl . '@mycourse')->name('client.mycourse');
// });