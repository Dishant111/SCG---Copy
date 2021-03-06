<?php

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
// General routes
Route::get('/', function () {

    return view('page.welcome');
})->name('welcome')->middleware('authValidate');
Route::get('userlogin', 'page\pageController@loginPage')->name('loginPage')->middleware('authValidate');
Route::post('userlogin', 'loginController@login')->name('login');

// Student
Route::middleware('checkStudent')->group(function () {
    Route::get('/student/dashboard/{name}', 'student\studentController@dashboard')->name('studentDashBoard');
    Route::get('/student/profile/{name}', 'student\studentController@profile')->name('studentProfile');
    Route::get('/student/test/{name}', 'student\studentController@testPage')->name('testPage');

    Route::get('/student/personalitytest/{name}', 'student\studentController@perTestPage')->name('perTestPage');
    Route::post('/student/personalitytest/{name}', 'student\studentController@perTest')->name('perTest');

    Route::get('/student/skilltest/{name}', 'student\studentController@skillTestPage')->name('skillTestPage');
    Route::post('/student/skilltest/{name}', 'student\studentController@skillTest')->name('skillTest');

    Route::get('/student/recommandation/{name}', 'student\studentController@recommandations')->name('recommandations');
    Route::get('/studentlogout', 'student\studentController@logout')->name('studentLogout');
});

// Teacher
Route::middleware('checkTeacher')->group(function () {
    Route::get('/teacher/dashboard/{name}', function () {
        return view('user.teacher.dashboard');
    })->name('teacherDashBoard');
    // create student
    Route::get('/teacher/{name}/StudentCreate', 'teacher\teacherController@createStudentPage'
    )->name('createStudentPage');
    Route::post('/teacher/{name}/StudentCreate', 'teacher\teacherController@createStudent')->name('createStudent');
    Route::get('/teacher/{name}/parent', function () {
        return view('user.teacher.createParent');
    })->name('createParentPage');
    Route::post('/teacher/{name}/parent', 'teacher\teacherController@createParent')->name('createParent');
    Route::get('teacher/{name}/student/update', function () {
        return view('user.teacher.updateStudent');
    })->name('updateStudentForm');
    Route::get('teacher/{name}/parent/update', function () {
        return view('user.teacher.updateParent');
    })->name('updateParentForm');
    Route::patch('teacher/{name}/student/update', 'teacher\teacherController@updateStudent')->name('updateStudent');
    Route::patch('teacher/{name}/parent/update', 'teacher\teacherController@updateParent')->name('updateParent');
    Route::get('teacherLogout', 'teacher\teacherController@logout')->name('teacherLogout');
    Route::get('teacher/{name}/examform', function () {
        return view('user.teacher.examform');
    })->name('examfrom');

    Route::get('teacher/{name}/academic', 'teacher\teacherController@academic')->name('academic');
    Route::post('teacher/{name}/academic', function (Request $request) {
        // dd($request->student_id);
        // dd($request->all());
        \Session::flash('student', $request->except(['_token']));

        return redirect(route('result', ['name' => Auth::guard('teacher')->user()->fname]));
    })->name('academic');

    Route::get('teacher/{name}/result', 'teacher\teacherController@result')->name('result');
    Route::post('teacher/result', 'teacher\teacherController@addResult')->name('addResult');
    // validate fatch or ajax

    Route::post('/validation/getstudentData', 'ajaxController@getStudent');
    Route::post('/validation/getstudentProfile', 'ajaxController@getStudentProfile');
    Route::post('/validation/getstudentAcademic', 'ajaxController@getStudentAcademic');
    Route::post('/validation/getparentData', 'ajaxController@getParent');
    Route::post('/formdata/getStreamyear', 'ajaxController@getStreamYear');
    Route::post('/formdata/getSubject', 'ajaxController@getSubject');

});
// Parent
Route::middleware('checkParents')->group(function () {
    Route::get('/parent/dashboard/{name}', 'parent\parentController@dashBoard')->name('parentDashBoard');
    Route::get('/parent/profile/{name}', 'parent\parentController@profile')->name('parentProfile');
    Route::get('/parent/career/{child}', 'parent\parentController@childRecommandation')->name('childProfile');
    Route::get('/parent/acedemic/{child}', 'parent\parentController@acedemic')->name('childAcedemic');
    Route::get('parentLogout', 'parent\parentController@logout')->name('parentLogout');
});
// admin
Route::middleware('checkAdmin')->group(function () {
    Route::get('admin/dashboard', 'admin\adminController@dashboard')->name('adminDashboard');
    Route::get('adminLogout', 'admin\adminController@logout')->name('adminLogout');
    Route::get('/admin/createteacher', function () {
        return view('user\admin\createTeacher');
    })->name('createTeacherPage');
    Route::post('createTeacher', 'admin\adminController@createTeacher')->name('createTeacher');
});


Route::get('adminlogin', 'admin\adminController@loginPage')->name('adminLoginPage');
Route::post('adminlogin', 'admin\adminController@login')->name('adminLogin');
Route::get('/addPersonalityQuestion', function () {
    return view('user.admin.addPersonality');
})->name('addPersonalityPage');
Route::post('/addPersonalityQuestion', 'admin\adminController@addPersonality')->name('addPersonality');

// // validation data for ajax
// Route::post('/validation/getstudentData', 'ajaxController@getStudent');
// Route::post('/validation/getparentData', 'ajaxController@getParent');
// Route::post('/validation/getstudentData', 'ajaxController@getStudent');
