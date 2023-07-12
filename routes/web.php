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

Route::get('test', function (){
    return App\Category::with('categoryChildren')->where('category_parent_id',0)->get();
});
//Front end
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::get('/cua-hang-cafe', 'HomeController@index1');
Route::get('/blog', 'HomeController@blog');
Route::get('/lien-he', 'HomeController@contact');
Route::get('/gioi-thieu', 'HomeController@about');
//danh muc san pham trang chu
Route::get('/cua-hang-cafe/{slug_category_product}', 'CategoryProductController@show_category_home');
Route::get('/chi-tiet-san-pham/{slug_product}','ProductController@details_product');

//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

//category product
Route::get('/add-category-product', 'CategoryProductController@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProductController@delete_category_product');

Route::get('/all-category-product', 'CategoryProductController@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductController@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProductController@active_category_product');

Route::post('/save-category-product', 'CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProductController@update_category_product');

//product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');


//Admin Blog
Route::get('/admin/blog_post', 'BlogController@admin_post');
Route::get('/admin/blog_tag', 'BlogController@admin_blog_tag');
Route::get('/admin/blog_category', 'BlogController@admin_blog_category');
Route::get('/admin/blog_post/add_post', 'BlogController@admin_add_post');
Route::get('/admin/blog_tag/add_blog_tag', 'BlogController@admin_add_blog_tag');
Route::get('/admin/blog_category/add_blog_category', 'BlogController@admin_add_blog_category');
Route::post('/admin/blog_post/add_post', 'BlogController@add_post');
Route::post('/admin/blog_tag/add_blog_tag', 'BlogController@add_blog_tag');
Route::post('/admin/blog_category/add_blog_category', 'BlogController@add_blog_category');

Route::get('/admin/blog_post/{id}/delete', 'BlogController@delete_blog_post');
Route::get('/admin/blog_post/{id}/edit', 'BlogController@edit_blog_post');
Route::post('/admin/blog_post/{id}/update', 'BlogController@update_blog_post');

Route::get('/admin/blog_tag/{id}/delete', 'BlogController@delete_blog_tag');
Route::get('/admin/blog_tag/{id}/edit', 'BlogController@edit_blog_tag');
Route::post('/admin/blog_tag/{id}/update', 'BlogController@update_blog_tag');

Route::get('/admin/blog_category/{id}/delete', 'BlogController@delete_blog_category');
Route::get('/admin/blog_category/{id}/edit', 'BlogController@edit_blog_category');
Route::post('/admin/blog_category/{id}/update', 'BlogController@update_blog_category');

//Blog
Route::get('/blog/{post}', 'BlogController@blog_details')->name('blog-details');
Route::get('/blog/tag/{tag}', 'BlogController@tag');
Route::get('/blog/category/{category}', 'BlogController@category');
Route::get('/blog', 'BlogController@search')->name('search');

//card
Route::post('/save-cart', 'CartController@save_cart');
Route::get('/gio-hang', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update-cart-quantity', 'CartController@update_cart_quantity');

//checkout
Route::get('/dang-nhap', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::get('/signup-checkout', 'CheckoutController@signup_checkout');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/order-place', 'CheckoutController@order_place');

//order
Route::get('/manage-order', 'OrderController@manage_order');
Route::get('/history-order', 'OrderController@history_order');
Route::get('/print-order/{checkout_code}', 'OrderController@print_order');
Route::get('/view-order/{order_code}', 'OrderController@view_order');
Route::get('/delete-order/{order_code}', 'OrderController@delete_order');
Route::get('/edit-order/{order_code}', 'OrderController@edit_order');
Route::post('/update-order/{order_code}', 'OrderController@update_order');

//gallery
Route::get('/add-gallery/{product_id}', 'GalleryController@add_gallery');
Route::post('/select-gallery', 'GalleryController@select_gallery');
Route::post('/insert-gallery/{pro_id}', 'GalleryController@insert_gallery');
Route::post('/update-gallery', 'GalleryController@update_gallery');
Route::post('/update-image-gallery', 'GalleryController@update_image_gallery');
Route::post('/delete-gallery', 'GalleryController@delete_gallery');

//banner
Route::get('/all-banner', 'BannerContronler@all_banner');
Route::get('/add-banner', 'BannerContronler@add_banner');
Route::post('/insert-banner', 'BannerContronler@insert_banner');
Route::get('/delete-banner/{banner_id}', 'BannerContronler@delete_banner');
