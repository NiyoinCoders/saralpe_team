<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BillPaymentController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoginHistoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\SuperDistributorController;
use App\Http\Controllers\UserController;
use App\Mail\CallBackMail;
use App\Models\JWT;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashfreePaymentController;
use App\Http\Controllers\DmtController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\RechargePlanController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AepsController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NsdlpanController;

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


// Route::get('migrate', function () {
//     /* php artisan migrate */
//     Artisan::call('migrate');
//     dd("Done");
// });
// Route::get("/aeps", [AepsController::])

Route::get('/', function () {
    return view("auth.login");
});
Route::group(["middleware" => "PreventBackHistory"], function () {
    Auth::routes();
});

Route::get('near-places', [LocationController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('complete-profile', [UserController::class, 'complete_user'])->name('complete-user.complete');


//Admin Routs

Route::group(["prefix" => "admin", "middleware" => ["isAdmin", "auth", "PreventBackHistory"]], function () {

    Route::get("dashboard", [AdminController::class, 'index'])->name("admin.dashboard");
    Route::get("user-login-history", [LoginHistoryController::class, 'index'])->name("login-history.index");
    Route::get("users", [UserController::class, 'index'])->name("all-user.index");
    Route::get("pending-users", [UserController::class, 'pending_user'])->name("pending-user.pending");
    Route::post("pending_user", [UserController::class, 'pending_user_update'])->name("pending-user.update");
    // Products Start
    Route::get("all-products", [ProductsController::class, 'index'])->name("all-product.index");
    Route::get("add-product", [ProductsController::class, 'create'])->name("all-product.create");
    Route::post("store-product", [ProductsController::class, 'store'])->name("all-product.store");
    Route::get("destroy-product/{id}", [ProductsController::class, 'destroy'])->name("all-product.destroy");
    Route::get("status-product/{id}/{status}", [ProductsController::class, 'status'])->name("all-product.status");
    // Products End
    // Invoice Start
    Route::get("all-invoice", [InvoiceController::class, 'index'])->name("all-invoice.index");
    Route::get("user-invoice-view/{invoice_number}", [InvoiceController::class, 'invoice_view'])->name("user-invoice.view");
    Route::post("invoice-status", [InvoiceController::class, 'invoice_status'])->name("invoice.status");
    // Invoice End
    // Recharge Plan Start
    Route::group(["prefix" => "recharge-plan"], function () {
        Route::get('destroy/{id}', [RechargePlanController::class, 'destroy'])->name("recharge-plan.destroy");
        Route::get('index', [RechargePlanController::class, 'index'])->name("recharge-plan.index");
        Route::get('create', [RechargePlanController::class, 'create'])->name("recharge-plan.create");
        Route::post('store', [RechargePlanController::class, 'store'])->name("recharge-plan.store");
    });
    // Recharge Plan End
});


//retailer Routs start

Route::group(["prefix" => "retailer", "middleware" => ["isRetailer", "auth", "PreventBackHistory"]], function () {
    Route::get("dashboard", [RetailerController::class, 'index'])->name("retailer.dashboard");
    Route::get("all-product", [ProductsController::class, 'view'])->name("all-product.view");
    Route::get("aeps", [AepsController::class, 'index'])->name("aeps");
    Route::get("aeps/pay", [AepsController::class, 'aepspay'])->name("aeps.pay");
    Route::get("product-detail/{link}", [ProductsController::class, 'details'])->name("product.detail");


    // Cart Start
    Route::get("add-to-cart", [CartsController::class, 'index'])->name("cart.index");
    Route::post("cart-update", [CartsController::class, 'update'])->name("cart.update");
    Route::get("checkout", [CartsController::class, 'checkout'])->name("cart.checkout");
    Route::get("destroy-cart/{id}", [CartsController::class, 'destroy'])->name("cart.destroy");
    Route::post("invoice-create", [InvoiceController::class, 'store'])->name("invoice.create");
    Route::get("thank-you", [InvoiceController::class, 'order_success'])->name("cart.thank-you");
    Route::get("invoice", [InvoiceController::class, 'index'])->name("invoice.index");
    Route::get("invoice-view/{invoice_number}", [InvoiceController::class, 'invoice_view'])->name("invoice.view");
    // Cart End

   //start loan
    Route::group(["prefix" => "loan"], function () {
        Route::get('view', [LoanController::class, 'index'])->name("loan.view");
        Route::get('personal', [LoanController::class, 'personal'])->name("loan.personal");
        Route::get('business', [LoanController::class, 'business'])->name("loan.business");
        Route::get('gold', [LoanController::class, 'gold'])->name("loan.gold");
        Route::get('home-salary-employee', [LoanController::class, 'home_salary_employed'])->name("loan.home-salary-employee");
        Route::get('home-self-employee', [LoanController::class, 'home_self_employed'])->name("loan.home-self-employee");
        Route::get('property-salary-employee', [LoanController::class, 'property_salary_employed'])->name("loan.property-salary-employee");
        Route::get('property-self-employee', [LoanController::class, 'property_self_employed'])->name("loan.property-self-employee");
    });
    // loan end

    // bus

    Route::group(["prefix" => "Bus"], function () {
        Route::get('index', [BusController::class, 'index'])->name("bus.index");
        Route::get('details', [BusController::class, 'details'])->name("bus.details");
        Route::get('bus', [BusController::class, 'bus'])->name("bus.bus");
        Route::get('bus_search', [BusController::class, 'bus_search'])->name("bus.bus_search");
    });

    // Recharge Start
    Route::group(["prefix" => "recharge"], function () {
        Route::get('prepaid', [RechargeController::class, 'prepaid'])->name("recharge.prepaid");
        Route::get('dth', [RechargeController::class, 'dth'])->name("recharge.dth");
    });
    // Recharge End

    // DMT Start
    Route::group(["prefix" => "dmt"], function () {
        Route::get('money-transfer-details', [DmtController::class, 'index'])->name("dmt.index1");
        Route::get('money-transfer-details/{phone}', [DmtController::class, 'index'])->name("dmt.index");
        Route::post('query-remmiter', [DmtController::class, 'query_remmiter'])->name("dmt.query-remmiter");
        Route::get('register-remmiter/{phone}', [DmtController::class, 'register_remmiter'])->name("dmt.register-remmiter");
        Route::post('register-store-remmiter', [DmtController::class, 'store_register_remmiter'])->name("dmt.register-store-remmiter");
        Route::post('register-store-beneficiary', [DmtController::class, 'store_register_beneficiary'])->name("dmt.register-store-beneficiary");
        Route::get('money-transfer', [DmtController::class, 'create'])->name("dmt.remmiter");
        Route::get('money-transfer-confirm', [DmtController::class, 'confirm'])->name("dmt.confirm");
        Route::get('beneficiary-delete/{id}/{phone}', [DmtController::class, 'beneficiary_delete'])->name("dmt.beneficiary-delete");
        Route::get('beneficiary-delete/{id}', [DmtController::class, 'beneficiary_status'])->name("dmt.beneficiary-status");
    });
    // DMT End

    Route::group(["prefix" =>"bbps"], function (){
        Route::get("/electricity-bill", [BillPaymentController::class, 'electricity_bill'])->name("bbps.electricity_bill");
        Route::get("/mobile-postpaid", [BillPaymentController::class, 'mobile_postpaid'])->name("bbps.mobile_postpaid");
        Route::get("/gas", [BillPaymentController::class, 'gas'])->name("bbps.gas");
        Route::get("/water", [BillPaymentController::class, 'water'])->name("bbps.water");
        Route::get("/broad-band", [BillPaymentController::class, 'broad_band'])->name("bbps.broad_band");
        Route::get("/landline", [BillPaymentController::class, 'landline'])->name("bbps.landline");
        Route::get("/indurance", [BillPaymentController::class, 'indurance'])->name("bbps.indurance");
        Route::get("/fastag", [BillPaymentController::class, 'fastag'])->name("bbps.fastag");
        Route::get("/loan", [BillPaymentController::class, 'loan'])->name("bbps.loan");
        Route::get("/creditcard", [BillPaymentController::class, 'creditcard'])->name("bbps.creditcard");
        Route::get("/rentpayment", [BillPaymentController::class, 'rentpayment'])->name("bbps.rentpayment");



    });

    Route::group(["prefix" =>"report"], function (){
        Route::get("/allreport", [ReportController::class, 'index'])->name("report.allreport");

    });

    Route::group(["prefix" =>"nsdl"], function (){
        Route::get("/applypan", [NsdlpanController::class, 'index'])->name("nsdlpan.nsdlpan");
        Route::get("/panlist", [NsdlpanController::class, 'nsdlpanlist'])->name("nsdlpan.nsdlpanlist");
        Route::get("/pansubmit", [NsdlpanController::class, 'panstore'])->name("nsdlpan.panstore");
    });


});

//wallet Routs euyfu

        Route::get("/demo", [BillPaymentController::class, 'demo'])->name("bbps.demo");
        Route::get("/matm", [BillPaymentController::class, 'matm'])->name("bbps.matm");
        Route::get("/payment-request", [BillPaymentController::class, 'paymentrequest'])->name("paymentrequest");

//Employee Routs


Route::group(["prefix" => "employee", "middleware" => ["isEmployee", "auth", "PreventBackHistory"]], function () {
    Route::get("dashboard", [EmployeeController::class, 'index'])->name("employee.dashboard");
});


//Distributor Routs
Route::group(["prefix" => "distributor", "middleware" => ["isDistributor", "auth", "PreventBackHistory"]], function () {
    Route::get("dashboard", [DistributorController::class, 'index'])->name("distributor.dashboard");
});

//Superdistributor

Route::group(["prefix" => "superdistributor", "middleware" => ["isSuperDistributor", "auth", "PreventBackHistory"]], function () {
    Route::get("dashboard", [SuperDistributorController::class, 'index'])->name("superdistributor.dashboard");
});

//cashfree payment Gatway
Route::get('cashfree/payments/create', [CashfreePaymentController::class, 'create'])->name('cashfree.callback');
Route::post('cashfree/payments/store', [CashfreePaymentController::class, 'store'])->name('cashfree.store');
Route::any('cashfree/payments/success', [CashfreePaymentController::class, 'success'])->name('cashfree.success');

//qr-code genrate
Route::get('/qrcode', function () {
    return QrCode::size(200)->generate('rahulsingh');
});
Route::get('/color-qr-code', function () {
    return QrCode::size(200)->backgroundColor(255, 55, 0)->generate('Webappfix.com');
});
Route::get('/qr-code-with-image', function () {
    $image = QrCode::format('png')
        ->merge('https://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
        ->size(200)
        ->errorCorrection('H')
        ->generate('Webappfix Qr Laravel Tutorial Example');
    return response($image)->header('Content-type', 'image/png');
});
Route::get('/qr-code-with-image', function () {
    $image = QrCode::format('png')
        ->merge('https://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
        ->size(200)
        ->errorCorrection('H')
        ->generate('Webappfix Qr Laravel Tutorial Example');
    return response($image)->header('Content-type', 'image/png');
});


Route::get('/addwallet-route', [RechargeController::class, 'deposit'])->name('addwallet.route');

Route::post('/users/edit/{id}/', [UserController::class, 'Update'])->name('users.edit');

Route::get('delete/{id}', [UserController::class,'destroy']);

Route::post('/edit/{id}/', [ProductsController::class, 'Update'])->name('product.edit');


Route::get('/kyc/{id}',[ApiController::class,'kyc'])->name('kyc.id');
Route::get('retailer/abc/',[ApiController::class,'indexx']);

// Route::get('getDropdownOptions', [ApiController::class,'testapid']);


Route::get('/apiform', function () {
    return view("apiform");
});

Route::get('/paybill', function () {
    return view("paybill");
});

Route::get('/status', function () {
    return view("status");
});

Route::get('/account', function () {
    return view("account");
});

Route::get('/payout', function () {
    return view("payout");
});

Route::get('/filterdata', function () {
    return view("filterdata");
});



//b2c
Route::group(["prefix" =>"b2c"], function (){
    Route::get('/index', function () {
        return view("b2c.index");
    })->name('index');
    Route::get('/recharge-bill-dth', function () {
        return view("b2c.recharge-bill-dth");
    });
    Route::get('/recharge-bill-datacard', function () {
        return view("b2c.recharge-bill-datacard");
    });
    Route::get('/recharge-bill-broadband', function () {
        return view("b2c.recharge-bill-broadband");
    });
    Route::get('/recharge-bill-landline', function () {
        return view("b2c.recharge-bill-landline");
    });
    Route::get('/recharge-bill-cabletv', function () {
        return view("b2c.recharge-bill-cabletv");
    });
    Route::get('/recharge-bill-electricity', function () {
        return view("b2c.recharge-bill-electricity");
    });
    Route::get('/recharge-bill-metro', function () {
        return view("b2c.recharge-bill-metro");
    });
    Route::get('/recharge-bill-gas', function () {
        return view("b2c.recharge-bill-gas");
    });
    Route::get('/recharge-bill-water', function () {
        return view("b2c.recharge-bill-water");
    });

    Route::get('/recharge-plans', function () {
        return view("b2c.recharge-plans");
    });

    Route::get('/recharge-payment', function () {
        return view("b2c.recharge-payment");
    });

    Route::get('/recharge-payment-success', function () {
        return view("b2c.recharge-payment-success");
    });

    Route::get('/recharge-order', function () {
        return view("b2c.recharge-order");
    });

    Route::get('/recharge-order-summary', function () {
        return view("b2c.recharge-order-summary");
    });

    Route::get('/recharge-invoice', function () {
        return view("b2c.recharge-invoice");
    });
    Route::get('/signup', function () {
        return view("b2c.signup");
    });
    Route::get('/support', function () {
        return view("b2c.support");
    });
    Route::get('/profile', function () {
        return view("b2c.profile");
    });
    Route::get('/profile-cards', function () {
        return view("b2c.profile-cards");
    });
    Route::get('/profile-favourites', function () {
        return view("b2c.profile-favourites");
    });
    Route::get('/profile-notifications', function () {
        return view("b2c.profile-notifications");
    });
    Route::get('/profile-orders-history', function () {
        return view("b2c.profile-orders-history");
    });
    Route::get('/profile-password', function () {
        return view("b2c.profile-password");
    });
    Route::get('/payment', function () {
        return view("b2c.payment");
    });
    Route::get('/otp', function () {
        return view("b2c.otp");
    });
    Route::get('/login', function () {
        return view("b2c.login");
    });
    Route::get('/forget-password', function () {
        return view("b2c.forget-password");
    });
    Route::get('/faq', function () {
        return view("b2c.faq");
    });
    Route::get('/contact-us', function () {
        return view("b2c.contact-us");
    });
    Route::get('/coming-soon', function () {
        return view("b2c.coming-soon");
    });
    Route::get('/about-us', function () {
        return view("b2c.about-us");
    });
    Route::get('/booking-bus-confirm-details', function () {
        return view("b2c.booking-bus-confirm-details");
    });
    Route::get('/booking-bus-invoice', function () {
        return view("b2c.booking-bus-invoice");
    });
    Route::get('/booking-bus-list', function () {
        return view("b2c.booking-bus-list");
    });
    Route::get('/booking-bus', function () {
        return view("b2c.booking-bus");
    });
    Route::get('/booking-flights', function () {
        return view("b2c.booking-flights");
    });
});
