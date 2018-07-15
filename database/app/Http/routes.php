<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::post('/update-appointment/{id}', 'AppointmentController@updateAppointment');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['revalidate', 'auth']], function($route){
    Route::get('/update-appointment', 'AppointmentController@updateAppointment');

    $route->get('/footer_setup', 'FindDoctorController@footer_setup');
	$route->post('/add_footer_setup/add', 'FindDoctorController@add_footer_setup');
	// $route->post('/add_footer_setup/edit', 'FindDoctorController@edit_footer_setup');
	Route::post('/add_footer_setup/edit', 'FindDoctorController@edit_footer_setup');
	$route->post('/footer_setup_data', 'FindDoctorController@footer_setup_data');
	$route->delete('for_kpj_hospital_delete_selected', 'FindDoctorController@DeleteSelectedKPJHospitalList');
	$route->post('for_kpj_hospital_all_delete', 'FindDoctorController@DeleteAllKPJHospitalList');

    $route->get('/roles_setup', 'RoleController@rolesSetup');
    $route->post('/roles/store', 'RoleController@storeRole');
    $route->post('/roles/{id}/update', 'RoleController@updateRole');
    $route->post('/roles/{id}/delete', 'RoleController@deleteRole');
    $route->post('/roles/deleteSelected', 'RoleController@deleteSelected');
    $route->post('/roles/deleteAll', 'RoleController@deleteAll');

    $route->get('/access_listing', 'UserController@accessListing');
    $route->post('/users/store', 'UserController@storeUser');
    $route->post('/users/{id}/update', 'UserController@updateUser');
    $route->post('/users/{id}/delete', 'UserController@deleteUser');
    $route->post('/users/deleteSelected', 'UserController@deleteSelected');
    $route->post('/users/deleteAll', 'UserController@deleteAll');


    $route->get('/', 'IndexController@index');
	$route->get('/dashboard', 'IndexController@index');
	$route->get('/feedback_list', 'feedbackController@index');
	$route->get('/latest_news', 'IndexController@latest_news');
	$route->post('/latest_news/add', 'IndexController@latest_news_add');
	$route->post('/latest_news/{id}/edit', 'IndexController@latest_news_edit');
	$route->get('/newsletter', 'IndexController@newsletters');
	$route->post('/newsletters/add', 'IndexController@newsletters_add');
	$route->post('/newsletters/{id}/edit', 'IndexController@newsletters_edit');

	$route->get('/careers', 'IndexController@careers');
	$route->post('/careers/add', "IndexController@add_careers");
	$route->post('/careers/add_btn', "IndexController@add_careers");
	$route->post('/careers/edit', "IndexController@edit_career");
	$route->get('/applications', 'IndexController@applications');


	$route->post('/change_password', 'IndexController@change_password');
	$route->post('/change_avatar', 'IndexController@change_avatar');

	$route->get('/save_preview', 'IndexController@save_preview');
	$route->get('/save_line', 'IndexController@save_preview');
	$route->post('/save_preview', 'IndexController@save_preview');
	$route->post('/save_line', 'IndexController@save_preview');
	$route->post('/save_preview/{line}/save', 'IndexController@save_preview_line');
	$route->get('/action_delete_selected', 'IndexController@action_delete_selected');
	$route->get('/action_delete_file/{model}/{id}/{type}', "IndexController@action_delete_file");


	$route->get('/services_procedures', 'IndexController@services');
	$route->post('/services/add', 'IndexController@add_services');
	$route->get('/services/{id}', 'IndexController@show_service');
	$route->post('/services/{id}/edit', 'IndexController@edit_service');
	$route->post('/services/{id}/helpful_info', 'IndexController@add_helpful_info');
	$route->post('/services/{id}/helpful_info/edit/{hid}', 'IndexController@edit_helpful_info');
	$route->post('/services/{id}/add_details', 'IndexController@add_details_to_service');

	$route->get('screening_packages_list','IndexController@screening_packages');
	$route->post('screening_packages/add','IndexController@save_screening_packages');
	$route->post('screening_packages/{id}/edit', 'IndexController@edit_screening_packages');

	$route->get('promotion_packages_list','IndexController@promotion_packages');
	$route->post('promotion_packages/add','IndexController@save_promotion_packages');
	$route->post('promotion_packages/{id}/edit', 'IndexController@edit_promotion_packages');



	$route->get('/action_delete/{id}/{model}', 'IndexController@action_delete');

	$route->get('/health_calendar_list', 'IndexController@health_calender');
	$route->post('/health_calender_list/add', 'IndexController@health_calender_add');
	$route->get('/latest_events_list', 'IndexController@events_list');
	$route->post('/health_calender_list/{id}/edit', 'IndexController@health_calender_edit');


	$route->post('/events_list/add', 'IndexController@events_list_add');
	$route->post('/events_list/{id}/edit', 'IndexController@events_list_edit');


	$route->get('/kpj_advisor_series_list', 'IndexController@kpj_advisor_series_list');
	$route->post('/kpj/add', 'IndexController@kpj_advisor_series_list_add');
	$route->post('/kpj/add_category', 'IndexController@kpj_add_category');
	$route->get('/kpj/{id}', 'IndexController@kpj_show');
	$route->post('/kpj/{id}/edit', 'IndexController@kpj_edit');
	Route::post('/kpjs/{id}/edit', 'IndexController@kpjs_edit');
	$route->post('/kpjs/{id}/ed', 'IndexController@kpjs_edite');
	$route->get('/index_banner_list', 'IndexController@index_banner_list');
	$route->get('/index_page', 'IndexController@index_page');
	$route->post('/index_banner/add', 'IndexController@index_banner_add');
	$route->post('/index_banner/{id}/edit', 'IndexController@index_banner_edit');
	$route->get('/index_banner/update_display/{id}/{val}', 'IndexController@update_display_banner');


	$route->get('/reload', 'IndexController@reload');

	/* TODO: */
	$route->get('patients_visitors_list', 'PatientController@getPatientsVisitorsList');
	$route->post('for_patients_details_new', [ 'as'=>'for_patients_details_new', 'uses'=>'PatientController@store']);

	// Edit for patients
	$route->get('for_patients_edit/{id}', 'PatientController@edit');
	$route->post('for_patients_edit/{id}', 'PatientController@update');

	// Delete for patients route
        $route->get('for_patients_details_delete/{id}', ['as'=>'delete.patient.list','uses'=>'PatientController@getDeletePatientList']);
        $route->post('for_patients_details_delete/{id}', 'PatientController@deletePatientList');
        // Delete all patient list
	$route->post('for_patients_delete_all', 'PatientController@deleteAllPatientList');

	// Delete selected patient list
	$route->delete('for_patients_delete_selected', 'PatientController@DeleteSelectedPatientList');

	// Edit for patients details
	$route->get('for_patients_details_edit', 'PatientController@getForPatientsDetails_edit');
	//$route->get('for_patients_details_edit', 'PatientController@getForPatientsDetails_edit');

	// Add/Edit patient details route
	$route->get('patient_edit_details/{id}', 'PatientController@getGeneralDescription');
	$route->post('patient_edit_details/{id}', 'PatientController@postGeneralDescription');


	// room rate routes
	$route->post('room_rate',['as'=>'admin.room_rate.store', 'uses'=>'RoomRateController@store']);
	$route->post('room_rate/{id}',['as'=>'admin.room_rate.update', 'uses'=>'RoomRateController@update']);
	$route->delete('room_rate',['as'=>'admin.room_rate.destroy', 'uses'=>'RoomRateController@destroy']);

	$route->get('room_detail/{id}', 'RoomDetailController@show');
	$route->post('room_detail',['as'=>'admin.room_detail.store', 'uses'=>'RoomDetailController@store']);
	$route->post('room_detail/{id}',['as'=>'admin.room_detail.update', 'uses'=>'RoomDetailController@update']);
	$route->delete('room_detail/{id}',['as'=>'admin.room_detail.destroy', 'uses'=>'RoomDetailController@destroy']);
	$route->delete('room_detail_all',['as'=>'admin.room_detail.destroy_all', 'uses'=>'RoomDetailController@destroyAll']);


	$route->post('admission_deposit',['as'=>'admin.admission_deposit.store', 'uses'=>'AdmissionDepositController@store']);
	$route->post('admission_deposit/{id}',['as'=>'admin.admission_deposit.update', 'uses'=>'AdmissionDepositController@update']);
	$route->delete('admission_deposit/{id}',['as'=>'admin.admission_deposit.destroy', 'uses'=>'AdmissionDepositController@destroy']);
	$route->delete('admission_deposit_all',['as'=>'admin.admission_deposit.destroy_all', 'uses'=>'AdmissionDepositController@destroyAll']);


	// for visitor listing
	//$route->get('visitors_list', 'VisitorController@getVisitorsList');
	$route->post('for_visitors_details_new', [ 'as'=>'for_visitors_details_new', 'uses'=>'VisitorController@store']);
	// Edit for patients
	$route->get('for_visitors_edit/{id}', 'VisitorController@edit');
	$route->post('for_visitors_edit/{id}', 'VisitorController@update');
	// Delete for patients route
    $route->get('for_visitors_details_delete/{id}', ['as'=>'delete.visitor.list','uses'=>'VisitorController@getDeleteVisitorList']);
	$route->post('for_visitors_details_delete/{id}', 'VisitorController@deleteVisitorList');
	// Delete all patient list
	$route->post('for_visitors_delete_all', 'VisitorController@deleteAllVisitorList');
	// Delete selected patient list
	$route->delete('for_visitors_delete_selected', 'VisitorController@DeleteSelectedVisitorList');
	// Delete image for patient
	$route->post('for_visitors_delete_image/{id}', 'VisitorController@deleteIconVisitorImage');
	// Edit for patients details
	$route->get('for_visitors_details_edit', 'VisitorController@getForVisitorsDetails_edit');
	// end visitor listing

    $route->get('visitor_edit_details/{id}', 'VisitorController@getGeneralDescription');
    $route->post('visitor_edit_details/{id}', 'VisitorController@postGeneralDescription');


	$route->get('for_patients_ward_details', 'PatientController@getForPatientsWard_details');
	$route->get('for_visitors_details_edit', 'PatientController@getForVisitorsDetails_edit');
	$route->get('services_procedures_list', 'PatientController@getServicesProceduresList');





	$route->get('categories_list', 'MenuController@getCategoriesList');
	$route->post('category_list_change_position', 'MenuController@postChangeCategoriesListPosition');
	$route->post('category_list_edit_item', 'MenuController@postSaveCategoriesListChange');
	$route->delete('category_list_delete_item', 'MenuController@deleteCategoryListItem');
	$route->post('category_list_duplicate_item', 'MenuController@postCategoryListItemDuplicate');

	/*
	Find Doctor routes
	*/
	$route->get('find_doctor_list', 'FindDoctorController@getFindDoctorList');
	$route->get('find_doctor_new', 'FindDoctorController@getFindDoctorNew');
	$route->post('find_doctor_new', 'FindDoctorController@postFindDoctorNew');
	$route->get('find_doctor/{id}/edit', 'FindDoctorController@getFindDoctorEdit');
	$route->post('find_doctor/{id}/edit', 'FindDoctorController@postFindDoctorEdit');
	$route->get('find_doctor/{id}/mes/calendar/modal', 'FindDoctorController@datesmodal');
	$route->get('find_doctor/{id}/edit/calendar/modal', 'FindDoctorController@editschedulemodal');
	$route->get('find_doctor/{id}/mes/calendar', 'FindDoctorController@changemes');
	$route->get('find_doctor/{id}/admin/save/schedule', 'FindDoctorController@SaveSchedule');
	$route->get('doctor/{id}/delete-image', 'FindDoctorController@getDeleteDoctorImage');
	$route->get('patients_list', 'FindDoctorController@getPatientsList');
	$route->post('patient_add_new', 'FindDoctorController@postAddNewPatientAddNew');
	$route->post('patient_save_edit', 'FindDoctorController@postPatientSaveEdit');
	$route->get('patient/{id}/delete', 'FindDoctorController@getPatientDelete');
	$route->get('appointments_list', 'FindDoctorController@getAppointmentsList');

    $route->post('find_doctor/show/edit/popup', array('as' => 'find.doctor.edit.popup' ,'uses' => 'FindDoctorController@editPopup'));
	/**/
});

Route::get('/', 'IndexController@index');
Route::get('/about-us', 'IndexController@about_us');
Route::get('/contact_us', "IndexController@contact_us");
Route::get('/find_doctor', "IndexController@find_doctor");
Route::get('/doctors/{id}/profile', "IndexController@doctor_profile");
Route::get('/latest_events', "IndexController@latest_events");
Route::get('/events/{id}', "IndexController@show_events");
Route::get('/latest_events/{id}', "IndexController@show_events");
Route::get('/latest_news', "IndexController@latest_news");
Route::get('/news/{id}', "IndexController@show_news");
Route::get('/latest_news/{id}', "IndexController@show_news");
Route::post('/subscribe', 'IndexController@subscribe');

Route::get('/faq', "IndexController@faq");
Route::get('/gp_partners', "IndexController@gp_partners");
Route::get('/health_calendar', "IndexController@health_calendar");
Route::get('/health_calendar/archives', "IndexController@health_calendar_archives");
Route::get('/health_calendar/{id}', "IndexController@health_calendar_show");


Route::get('/login', "LoginController@login");
Route::get('/auth/login', "LoginController@login");
Route::get('/forgot_password', "LoginController@forgot_password");
Route::post('/reset_password', "LoginController@reset_password");
Route::get('/reset_password/{link}', 'LoginController@reset_link');
Route::post('/reset_link', 'LoginController@reset_link_password');
Route::post('/signin', "LoginController@signin");


//front end
Route::get('/articles', "IndexController@articles_per_doctor");
Route::get('/articlesDetails', "IndexController@articlesDetails");
//Route::get('/articles_by_doctors', "IndexController@articles_per_doctor1");

Route::get('/articles/{id}', "IndexController@show_article");
Route::get('/careers', "IndexController@careers");
Route::get('/careers/{id}', "IndexController@job_application");
Route::post('/careers/{id}/apply', 'IndexController@save_application');

Route::get('/patient_transfer', "IndexController@patient_transfer");


Route::get('/services_procedures', "IndexController@services");
Route::get('/services_procedures/{id}', "IndexController@show_service");


Route::get('/privacy_policy', 'IndexController@privacy');
Route::get('/terms_of_use', 'IndexController@terms');
Route::post('/feedback', 'IndexController@post_feedback');


Route::get('/screening_packages', 'IndexController@screening_packages');
Route::get('/screening_packages/{id}', 'IndexController@screening_packages_details');
Route::get('/promotion_packages', 'IndexController@promotion_packages');
Route::get('/promotion_packages/{id}', 'IndexController@promotion_packages_details');

Route::get('/patients_visitors', 'IndexController@patients_visitors');
Route::get('/patients_visitors_detail', 'IndexController@patients_visitors_detail');

Route::get('/kpj_advisor_series', 'IndexController@kpj_advisor_series');
Route::get('/kpj_advisor_series/{id}', 'IndexController@kpj_advisor_series_show');


Route::get('/search', 'IndexController@search');
Route::get("/logout", 'IndexController@logout');
Route::get('/load_more', 'IndexController@load_more');


Route::get('/latest_news/archives/{date}', 'IndexController@latest_news_archives');
Route::get('/latest_events/archives/{date}', 'IndexController@latest_events_archives');
Route::get('/load_dates/{date}', 'IndexController@load_dates');

Route::get('/email', 'IndexController@email');
Route::post('/saveimage', 'IndexController@saveimage');

Route::get('/make-appointment/{doctor_id?}', 'AppointmentController@getStepOne');
Route::get('/make-appointment/{appointment_id}/step-two', 'AppointmentController@getStepTwo');
Route::get('/appointment-confirmation/{appointment_id}', 'AppointmentController@getConfirmation');
Route::post('/make-appointment', 'AppointmentController@postNext');
Route::post('/book-appointment', 'AppointmentController@postBook');



Route::get('/patient/login',[
    'as'=> 'patient_login',
    'uses' =>'Patient\Login@loginForm']);
Route::post('/patient/login','Patient\Login@index');
Route::get('/patient/registration','Patient\Login@registration');
Route::get('/patient/activate_account/{confirmationCode}', 'Patient\Login@actionActivateAccount');
Route::post('/patient/reset_password', 'Patient\Login@passwordReset');
Route::get('/patient/resend_confirmation/{email}', 'Patient\Login@resendConfirmation');

Route::post('/patient/register','Patient\Login@register');
Route::group(['prefix'=>'patient', 'namespace'=>'Patient', 'middleware'=>['revalidate']], function($route){ //, 'auth'
	$route->get('logout', 'Login@logout');
	$route->get('dashboard', 'Dashboard@index');
	$route->get('appointment', 'AppointmentController@index');
    $route->get('/cancel_appointment/{id}', 'AppointmentController@cancel');
    $route->get('/active_appointment/{id}', 'AppointmentController@active');
    $route->get('/change_data_appointment/{id}', 'AppointmentController@changeDate');
    $route->post('/changeDate', 'AppointmentController@postChangeDate');

    $route->get('appointment/{id}/details', 'Dashboard@getAppointmentDetails');

	$route->get('account', 'AccountController@index');
	$route->post('account', 'AccountController@update');
	$route->post('reset-password', 'AccountController@resetPassword');
});

Route::get('/ggs',function(){
	$user = \App\User::find(7);
	$user->password = bcrypt('1234567890-=');
	$user->save();

	return redirect()->to('/make-appointment/1');
});