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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function($route){
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