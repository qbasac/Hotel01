<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;
use App\Http\Controllers\Admin\SliderHomeController as AdminSliderHomeController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BlogCommentsController as AdminBlogCommentsController;
use App\Http\Controllers\Admin\PricesController as AdminPricesController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\EventOrganizerController as AdminEventOrganizerController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ContactFormController as AdminContactFormController;





use App\Http\Controllers\RoomController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\RoomReservationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ContactoController;





Route::post('upload-images', [AdminServicesController::class, 'handleImages'])->name('upload-images');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/',[HomeController::class, 'index'])->name('index');

Auth::routes(['register' => false]);

// Route::middleware(['auth'])->group(function () {
  Route::resource('/dashboard', DashboardController::class);

  Route::resource('/usuario', UserController::class);
  Route::get('/profile',[UserController::class, 'profile'])->name('profile');
  Route::post('/profile-update',[UserController::class, 'profileUpdate'])->name('profile.update');

  Route::resource('about', AboutController::class);
  Route::resource('/testimonial', TestimonialController::class);

  Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('/room', AdminRoomController::class);
    Route::post('room/show-section-offer/{offers}', [AdminRoomController::class, 'ShowSectionOffer'])->name('room.ShowSectionOffer');

    Route::post('room/update-is-active/{room}', [AdminRoomController::class, 'updateIsActive'])->name('room.updateIsActive');
    Route::resource('/home-slider', AdminSliderHomeController::class);
    Route::post('home-slider/update-is-active/{slider}', [AdminSliderHomeController::class, 'updateIsActive'])->name('home-slider.updateIsActive');
    Route::post('home-slider/show-section-slider/{slider}', [AdminSliderHomeController::class, 'ShowSectionSlider'])->name('home-slider.ShowSectionSlider');

    Route::resource('/services', AdminServicesController::class);
    Route::post('services/update-is-active/{services}', [AdminServicesController::class, 'updateIsActive'])->name('services.updateIsActive');
    Route::post('services/show-section-services/{services}', [AdminServicesController::class, 'ShowSectionServices'])->name('services.ShowSectionServices');

    Route::resource('/gallery', AdminGalleryController::class);
    Route::post('gallery/update-is-active/{gallery}', [AdminGalleryController::class, 'updateIsActive'])->name('gallery.updateIsActive');
    Route::post('gallery/show-section-gallery/{gallery}', [AdminGalleryController::class, 'ShowSectionGallery'])->name('gallery.ShowSectionGallery');

    Route::resource('/blog', AdminBlogController::class);
    Route::post('blog/update-is-active/{blog}', [AdminBlogController::class, 'updateIsActive'])->name('blog.updateIsActive');
    Route::post('blog/show-section-blog/{blog}', [AdminBlogController::class, 'ShowSectionBlog'])->name('blog.ShowSectionBlog');

    Route::resource('/blog-comments', AdminBlogCommentsController::class);
    Route::post('blog-comments/update-is-active/{comments}', [AdminBlogCommentsController::class, 'updateIsActive'])->name('blog-comments.updateIsActive');

    Route::resource('/prices', AdminPricesController::class);
    Route::post('prices/update-is-active/{prices}', [AdminPricesController::class, 'updateIsActive'])->name('prices.updateIsActive');
    Route::post('prices/show-section-prices/{prices}', [AdminPricesController::class, 'ShowSectionPrices'])->name('prices.ShowSectionPrices');

    Route::resource('/brands', AdminBrandController::class);
    Route::post('brands/update-is-active/{brands}', [AdminBrandController::class, 'updateIsActive'])->name('brands.updateIsActive');
    Route::post('brands/show-section-brands/{brands}', [AdminBrandController::class, 'ShowSectionBrands'])->name('brands.ShowSectionBrands');

    Route::resource('/events', AdminEventController::class);
    Route::post('events/update-is-active/{events}', [AdminEventController::class, 'updateIsActive'])->name('events.updateIsActive');
    Route::get('event-detail/{id}', [AdminEventController::class, 'eventDetail'])->name('event-detail');

    Route::resource('/event-organizer', AdminEventOrganizerController::class);
    Route::post('organizer/update-is-active/{organizer}', [AdminEventOrganizerController::class, 'updateIsActive'])->name('organizer.updateIsActive');

    Route::resource('/contact', AdminContactController::class);
    Route::resource('/contact-form', AdminContactFormController::class);

  });

 //frontend

  Route::resource('/room', RoomController::class);
  Route::resource('/room-reservation', RoomReservationController::class);

  Route::post('reservation/update-is-active/{room_reservation}', [RoomReservationController::class, 'updateIsActive'])->name('reservation.updateIsActive');
  Route::post('usuario/update-is-active/{usuario}', [UserController::class, 'updateIsActive'])->name('usuario.updateIsActive');
  Route::post('testimonial/update-is-active/{testimonial}', [TestimonialController::class, 'updateIsActive'])->name('testimonial.updateIsActive');
  Route::post('about/show-section-testimonial/{testimonial}', [TestimonialController::class, 'ShowSectionTestimonial'])->name('testimonial.ShowSectionTestimonial');
  Route::post('about/show-section-staff/{staff}', [UserController::class, 'ShowSectionStaff'])->name('staff.ShowSectionStaff');

  // Route::post('room/update-is-active/{room}', [AdminRoomController::class, 'updateIsActive'])->name('room.updateIsActive');

// });

// frontend
Route::get('/nosotros', [AboutUsController::class, 'index'])->name('nosotros');
Route::get('/habitacion-detalle', [RoomController::class,  'roomDetail'])->name('habitacion-detalle');


// Route::resource('/home', HomeController::class);
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::resource('/room-search', HomeController::class);

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/habitacion', [RoomController::class,  'index'])->name('habitacion');

Route::resource('/habitacion', RoomController::class);
Route::get('/pequeño-blog', [BlogController::class, 'blogsmall'])->name('pequeño-blog');
Route::resource('/blog', BlogController::class);

Route::get('/evento-pequeño', [EventosController::class, 'eventSmall'])->name('evento-pequeño');
Route::get('/detalle-evento/{id}', [EventosController::class, 'eventDetail'])->name('detalle-evento');

Route::get('galeria-simple', [GaleriaController::class, 'galeriaSimple'])->name('galeria-simple');

Route::get('/contacto', [ContactoController::class, 'contact'])->name('contacto');
Route::resource('/contact-form', ContactoController::class);

// Route::get('/blog-detail', [BlogController::class, 'blog-detail'])->name('pequeño-blog');



// Route::get('habitacion-detalle', 'HabitacionesController@roomDetail')->name('habitacion-detalle');
// Route::get('habitacion-lista', 'HabitacionesController@roomList')->name('habitacion-lista');
// Route::get('habitacion', 'HabitacionesController@room')->name('habitacion');

// Route::get('/detalle-blog', 'BlogController@blogDetail')->name('detalle-blog');
// Route::get('/grande-blog', 'BlogController@blogLarge')->name('grande-blog');
// Route::get('/lista-blog', 'BlogController@blogList')->name('lista-blog');
// Route::get('/mediano-blog', 'BlogController@blogmedium')->name('mediano-blog');
// Route::get('/pequeño-blog', 'BlogController@blogsmall')->name('pequeño-blog');
// Route::get('/lateral-blog', 'BlogController@blogSiderbar')->name('lateral-blog');

// Route::get('/comingsoon-paginas', 'PaginasController@paginasComingsoon')->name('comingsoon-paginas');
// Route::get('/404', 'PaginasController@paginas404')->name('404');
// Route::get('/inscribase-pagina', 'PaginasController@paginasSignup')->name('inscribase-pagina');
// Route::get('/personal-pagina', 'PaginasController@paginasStaff')->name('personal-pagina');
// Route::get('/acceso-pagina', 'PaginasController@paginasLogin')->name('acceso-pagina');


// Route::get('/contacto', 'ContactoController@contact')->name('contacto');


// Route::get('galeria-maposteria', 'GaleriaController@galeriaMaposteria')->name('galeria-maposteria');
// Route::get('galeria-simple', 'GaleriaController@galeriaSimple')->name('galeria-simple');


// Route::get('/inicio','IndexController@indexBackend')->name('inicio');

// Route::get('/pagina-inicio','PageController@pagesStarter')->name('pagina-inicio');




