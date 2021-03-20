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

Auth::routes();

Route::group(['namespace'=>'FrontEnd'], function(){
     Route::get('/', 'FrontEndController@index');
     Route::get('/about', 'FrontEndController@about');
     Route::get('/our-rooms', 'FrontEndController@rooms');
     Route::get('/room-details/{id}/{slug}', 'FrontEndController@roomdetails');
     Route::get('/resturant', 'FrontEndController@resturant');
     Route::get('/banquet-hall', 'FrontEndController@banquethall');
     Route::get('/gallery', 'FrontEndController@gallery');
     Route::get('/blog', 'FrontEndController@blog');
     Route::get('/blog-details/{slug}/{id}', 'FrontEndController@blogdetails');
     Route::get('/contact-us', 'FrontEndController@contact');
     Route::get('/offer', 'FrontEndController@offer');
     Route::get('/book-now', 'FrontEndController@booknow');

     Route::get('/missionvision', 'FrontEndController@missionvision');
     Route::get('/affiliation', 'FrontEndController@affiliation');
	 Route::get('/company-profile', 'FrontEndController@companyprofile');

     Route::get('/our-service/{slug}/{id}', 'FrontEndController@service');
     Route::get('/all-works/', 'FrontEndController@allworks');
     Route::get('/works/{id}/{slug}', 'FrontEndController@works');
     Route::get('/works/details/{id}/{slug}', 'FrontEndController@worksdetails');

     Route::get('/all-pricing/', 'FrontEndController@allpricing');
     Route::get('/pricing/{id}/{slug}', 'FrontEndController@pricing');

});

Route::post('/visitor/contact','visitorcontactController@visitorcontact');
Route::post('/visitor/homebooking','visitorcontactController@visitorhomebooking');
Route::post('/visitor/booknow','visitorcontactController@visitorbooknow');
Route::post('/request/proposal','visitorcontactController@requestproposal');

Route::post('/visitor/subscribe','visitorcontactController@visitorsubscribe');

Route::post('message/visitor/to/publisher','EmailController@publisherEmail');
 Route::group(['namespace'=>'Customer','prefix'=>'customer'], function(){
 // customer oparation

});


 Route::group(['as'=>'superadmin.', 'prefix'=>'superadmin', 'namespace'=>'Superadmin','middleware'=>[ 'auth', 'superadmin']], function(){

 // superadmin dashboard
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

 // User route here
    Route::get('/user/create','UserController@create');
    Route::post('/user/store','UserController@store');
    Route::get('/user/manage','UserController@manage');
    Route::get('/user/edit/{id}','UserController@edit');
    Route::post('/user/update','UserController@update');
    Route::post('/user/inactive','UserController@inactive');
    Route::post('/user/active','UserController@active');
    Route::post('/user/delete','UserController@destroy');
});


Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth', 'admin']], function(){

 // admin dashboard
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

 	// Logo route here
    Route::get('/logo/create','LogoController@create');
    Route::post('/logo/store','LogoController@store');
    Route::get('/logo/manage','LogoController@manage');
    Route::get('/logo/edit/{id}','LogoController@edit');
    Route::post('/logo/update','LogoController@update');
    Route::post('/logo/inactive','LogoController@inactive');
    Route::post('/logo/active','LogoController@active');
    Route::post('/logo/delete','LogoController@destroy');

    // Slider route here
    Route::get('/slider/create','SliderController@create');
    Route::post('/slider/store','SliderController@store');
    Route::get('/slider/manage','SliderController@manage');
    Route::get('/slider/edit/{id}','SliderController@edit');
    Route::post('/slider/update','SliderController@update');
    Route::post('/slider/inactive','SliderController@inactive');
    Route::post('/slider/active','SliderController@active');
    Route::post('/slider/delete','SliderController@destroy');

    // Gallery route here
    Route::get('/gallery/create','GalleryController@create');
    Route::post('/gallery/store','GalleryController@store');
    Route::get('/gallery/manage','GalleryController@manage');
    Route::get('/gallery/edit/{id}','GalleryController@edit');
    Route::post('/gallery/update','GalleryController@update');
    Route::post('/gallery/inactive','GalleryController@inactive');
    Route::post('/gallery/active','GalleryController@active');
    Route::post('/gallery/delete','GalleryController@destroy');

    // Special Menu route here
    Route::get('/specialmenu/create','SpecialmenuController@create');
    Route::post('/specialmenu/store','SpecialmenuController@store');
    Route::get('/specialmenu/manage','SpecialmenuController@manage');
    Route::get('/specialmenu/edit/{id}','SpecialmenuController@edit');
    Route::post('/specialmenu/update','SpecialmenuController@update');
    Route::post('/specialmenu/inactive','SpecialmenuController@inactive');
    Route::post('/specialmenu/active','SpecialmenuController@active');
    Route::post('/specialmenu/delete','SpecialmenuController@destroy');

    // Banquet Hall some photos route here
    Route::get('/banquetphotos/create','BanquetphotosController@create');
    Route::post('/banquetphotos/store','BanquetphotosController@store');
    Route::get('/banquetphotos/manage','BanquetphotosController@manage');
    Route::get('/banquetphotos/edit/{id}','BanquetphotosController@edit');
    Route::post('/banquetphotos/update','BanquetphotosController@update');
    Route::post('/banquetphotos/inactive','BanquetphotosController@inactive');
    Route::post('/banquetphotos/active','BanquetphotosController@active');
    Route::post('/banquetphotos/delete','BanquetphotosController@destroy');

    // Banquet Hall some photos route here
    Route::get('/banquetvideo/create','BanquetvideoController@create');
    Route::post('/banquetvideo/store','BanquetvideoController@store');
    Route::get('/banquetvideo/manage','BanquetvideoController@manage');
    Route::get('/banquetvideo/edit/{id}','BanquetvideoController@edit');
    Route::post('/banquetvideo/update','BanquetvideoController@update');
    Route::post('/banquetvideo/inactive','BanquetvideoController@inactive');
    Route::post('/banquetvideo/active','BanquetvideoController@active');
    Route::post('/banquetvideo/delete','BanquetvideoController@destroy');

    // Contact Info some photos route here
    Route::get('/contactinfo/create','ContactinfoController@create');
    Route::post('/contactinfo/store','ContactinfoController@store');
    Route::get('/contactinfo/manage','ContactinfoController@manage');
    Route::get('/contactinfo/edit/{id}','ContactinfoController@edit');
    Route::post('/contactinfo/update','ContactinfoController@update');
    Route::post('/contactinfo/inactive','ContactinfoController@inactive');
    Route::post('/contactinfo/active','ContactinfoController@active');
    Route::post('/contactinfo/delete','ContactinfoController@destroy');

    // About route here
    Route::get('/about/create','AboutController@create');
    Route::post('/about/store','AboutController@store');
    Route::get('/about/manage','AboutController@manage');
    Route::get('/about/edit/{id}','AboutController@edit');
    Route::post('/about/update','AboutController@update');
    Route::post('/about/inactive','AboutController@inactive');
    Route::post('/about/active','AboutController@active');
    Route::post('/about/delete','AboutController@destroy');

    // Missionvission route here
    Route::get('/missionvision/create','MissionvisionController@create');
    Route::post('/missionvision/store','MissionvisionController@store');
    Route::get('/missionvision/manage','MissionvisionController@manage');
    Route::get('/missionvision/edit/{id}','MissionvisionController@edit');
    Route::post('/missionvision/update','MissionvisionController@update');
    Route::post('/missionvision/inactive','MissionvisionController@inactive');
    Route::post('/missionvision/active','MissionvisionController@active');
    Route::post('/missionvision/delete','MissionvisionController@destroy');

    // Missionvission route here
    Route::get('/affiliation/create','AffiliationController@create');
    Route::post('/affiliation/store','AffiliationController@store');
    Route::get('/affiliation/manage','AffiliationController@manage');
    Route::get('/affiliation/edit/{id}','AffiliationController@edit');
    Route::post('/affiliation/update','AffiliationController@update');
    Route::post('/affiliation/inactive','AffiliationController@inactive');
    Route::post('/affiliation/active','AffiliationController@active');
    Route::post('/affiliation/delete','AffiliationController@destroy');

     // Testimonial route here
    Route::get('/testimonial/create','TestimonialController@create');
    Route::post('/testimonial/store','TestimonialController@store');
    Route::get('/testimonial/manage','TestimonialController@manage');
    Route::get('/testimonial/edit/{id}','TestimonialController@edit');
    Route::post('/testimonial/update','TestimonialController@update');
    Route::post('/testimonial/inactive','TestimonialController@inactive');
    Route::post('/testimonial/active','TestimonialController@active');
    Route::post('/testimonial/delete','TestimonialController@destroy');



    // category route
    Route::get('/service/category/create','ServiceCategoryController@create');
    Route::post('/service/category/store','ServiceCategoryController@store');
    Route::get('/service/category/manage','ServiceCategoryController@manage');
    Route::get('/service/category/edit/{id}','ServiceCategoryController@edit');
    Route::post('/service/category/update','ServiceCategoryController@update');
    Route::post('/service/category/inactive','ServiceCategoryController@inactive');
    Route::post('/service/category/active','ServiceCategoryController@active');

    // Client Logo route here
    Route::get('/clientlogo/create','ClientlogoController@create');
    Route::post('/clientlogo/store','ClientlogoController@store');
    Route::get('/clientlogo/manage','ClientlogoController@manage');
    Route::get('/clientlogo/edit/{id}','ClientlogoController@edit');
    Route::post('/clientlogo/update','ClientlogoController@update');
    Route::post('/clientlogo/inactive','ClientlogoController@inactive');
    Route::post('/clientlogo/active','ClientlogoController@active');
    Route::post('/clientlogo/delete','ClientlogoController@destroy');

    // Profile Pdf route here
    Route::get('/profilepdf/create','ProfilepdfController@create');
    Route::post('/profilepdf/store','ProfilepdfController@store');
    Route::get('/profilepdf/manage','ProfilepdfController@manage');
    Route::get('/profilepdf/edit/{id}','ProfilepdfController@edit');
    Route::post('/profilepdf/update','ProfilepdfController@update');
    Route::post('/profilepdf/inactive','ProfilepdfController@inactive');
    Route::post('/profilepdf/active','ProfilepdfController@active');
    Route::post('/profilepdf/delete','ProfilepdfController@destroy');

    // Works Category route here
    Route::get('/workscategory/create','WorkscategoryController@create');
    Route::post('/workscategory/store','WorkscategoryController@store');
    Route::get('/workscategory/manage','WorkscategoryController@manage');
    Route::get('/workscategory/edit/{id}','WorkscategoryController@edit');
    Route::post('/workscategory/update','WorkscategoryController@update');
    Route::post('/workscategory/inactive','WorkscategoryController@inactive');
    Route::post('/workscategory/active','WorkscategoryController@active');
    Route::post('/workscategory/delete','WorkscategoryController@destroy');

    // Works route here
    Route::get('/works/create','WorksController@create');
    Route::post('/works/store','WorksController@store');
    Route::get('/works/manage','WorksController@manage');
    Route::get('/works/edit/{id}','WorksController@edit');
    Route::post('/works/update','WorksController@update');
    Route::post('/works/inactive','WorksController@inactive');
    Route::post('/works/active','WorksController@active');
    Route::post('/works/delete','WorksController@destroy');

    // Blog route here
    Route::get('/blogcategory/create','BlogcategoryController@create');
    Route::post('/blogcategory/store','BlogcategoryController@store');
    Route::get('/blogcategory/manage','BlogcategoryController@manage');
    Route::get('/blogcategory/edit/{id}','BlogcategoryController@edit');
    Route::post('/blogcategory/update','BlogcategoryController@update');
    Route::post('/blogcategory/inactive','BlogcategoryController@inactive');
    Route::post('/blogcategory/active','BlogcategoryController@active');
    Route::post('/blogcategory/delete','BlogcategoryController@destroy');

    // Blog route here
    Route::get('/blog/create','BlogController@create');
    Route::post('/blog/store','BlogController@store');
    Route::get('/blog/manage','BlogController@manage');
    Route::get('/blog/edit/{id}','BlogController@edit');
    Route::post('/blog/update','BlogController@update');
    Route::post('/blog/inactive','BlogController@inactive');
    Route::post('/blog/active','BlogController@active');
    Route::post('/blog/delete','BlogController@destroy');

    // Packages Category route here
    Route::get('/packagecategory/create','PackagecategoryController@create');
    Route::post('/packagecategory/store','PackagecategoryController@store');
    Route::get('/packagecategory/manage','PackagecategoryController@manage');
    Route::get('/packagecategory/edit/{id}','PackagecategoryController@edit');
    Route::post('/packagecategory/update','PackagecategoryController@update');
    Route::post('/packagecategory/inactive','PackagecategoryController@inactive');
    Route::post('/packagecategory/active','PackagecategoryController@active');
    Route::post('/packagecategory/delete','PackagecategoryController@destroy');
    

    // Packages Category route here
    Route::get('/package/create','PackageController@create');
    Route::post('/package/store','PackageController@store');
    Route::get('/package/manage','PackageController@manage');
    Route::get('/package/edit/{id}','PackageController@edit');
    Route::post('/package/update','PackageController@update');
    Route::post('/package/inactive','PackageController@inactive');
    Route::post('/package/active','PackageController@active');
    Route::post('/package/delete','PackageController@destroy');
    Route::get('package/image/delete/{id}','PackageController@packageimgdel');

    //Special Packages Category route here
    Route::get('/specialpackage/create','SpecialpackageController@create');
    Route::post('/specialpackage/store','SpecialpackageController@store');
    Route::get('/specialpackage/manage','SpecialpackageController@manage');
    Route::get('/specialpackage/edit/{id}','SpecialpackageController@edit');
    Route::post('/specialpackage/update','SpecialpackageController@update');
    Route::post('/specialpackage/inactive','SpecialpackageController@inactive');
    Route::post('/specialpackage/active','SpecialpackageController@active');
    Route::post('/specialpackage/delete','SpecialpackageController@destroy');
    
     //Room service route here
    Route::get('roomservice/create','RoomserviceController@create');
    Route::post('roomservice/store','RoomserviceController@store');
    Route::get('roomservice/manage','RoomserviceController@manage');
    Route::get('roomservice/edit/{id}','RoomserviceController@edit');
    Route::post('roomservice/update','RoomserviceController@update');
    Route::post('roomservice/inactive','RoomserviceController@inactive');
    Route::post('roomservice/active','RoomserviceController@active');
    Route::post('roomservice/delete','RoomserviceController@destroy');

   

});


Route::group(['as'=>'editor.', 'prefix'=>'editor', 'namespace'=>'Editor','middleware'=>['auth', 'editor']], function(){
 // editor dashboard
 	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
    // Logo route here
    Route::get('/service/create','ServicePostController@create');
    Route::post('/service/store','ServicePostController@store');
    Route::get('/service/manage','ServicePostController@manage');
    Route::get('/service/edit/{id}','ServicePostController@edit');
    Route::post('/service/update','ServicePostController@update');
    Route::post('/service/inactive','ServicePostController@inactive');
    Route::post('/service/active','ServicePostController@active');
    Route::post('/service/delete','ServicePostController@destroy');


});

 Route::group(['namespace'=>'Reports'], function(){
	// Repost functon
    Route::get('/editor/customer/list','ReportsController@customerlist');
});
 Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'author','middleware'=>['auth', 'author']], function(){
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
