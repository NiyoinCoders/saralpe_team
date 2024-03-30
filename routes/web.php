<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AepsController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiuserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BillPaymentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CashfreePaymentController;
use App\Http\Controllers\CcardbillController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\DmtController;
use App\Http\Controllers\EkycRegistrationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FastagController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LicbillController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoginHistoryController;
use App\Http\Controllers\NewregisterController;
use App\Http\Controllers\NsdlpanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\RechargeApiController;

use App\Http\Controllers\RechargePlanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\SuperDistributorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebkycController;
use App\Http\Controllers\AndroidApiController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\CompanyBankController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\ServicesController;
use App\Mail\UserOTPMail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/send-email', function () {
    $email = 'testin@gmail.com';
    $data = new stdClass();
    $data->name = 'Ali';
    $data->otp = '759846';
    dispatch(new App\Jobs\UserOTPMailJob($email, $data));
    dd('done');
    // Mail::to($email)->send(new UserOTPMail($data));
});

Route::post('user-verify', [LoginController::class, 'verify'])->name('user-verify');
Route::post('verify-otp', [LoginController::class, 'verifyOTP'])->name('verify-otp');

// Route::get('migrate', function () {
//     /* php artisan migrate */
//     Artisan::call('migrate');
//     dd("Done");
// });
// Route::get("/aeps", [AepsController::])

Route::get('/comp', function () {
    chdir('../../A');
    $output = shell_exec('php composer update');
    echo "<pre>$output</pre>";
});

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('singup', [NewregisterController::class, 'singup'])->name('singup');
Route::post('optverify', [NewregisterController::class, 'optverify'])->name('signup.optverify');

Route::get('/redpay_register/{user_type?}', function ($user_type = 'Retailer') {
    return view('auth.register_type');
});

Route::get('/testurl', function () {
    return view('bus.testurl');
});

Route::group(['middleware' => 'PreventBackHistory'], function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('complete-profile', [UserControllemobile-postpaidr::class, 'complete_user'])->name('complete-user.complete');

// b2b routes
Route::group(['prefix' => 'b2b'], function () {
    // retailer Routs start
    Route::group(['prefix' => 'retailer', 'middleware' => ['isRetailer', 'auth', 'PreventBackHistory']], function () {
        Route::get('dashboard', [RetailerController::class, 'index'])->name('retailer.dashboard');
        Route::get('aeps', [AepsController::class, 'index'])->name('aeps');
        Route::get('aeps/pay', [AepsController::class, 'aepspay'])->name('aeps.pay');
        Route::post('withdrawal', [AepsController::class, 'withdrawal'])->name('withdrawal');
        Route::post('balanceEnquiry', [AepsController::class, 'balanceEnquiry'])->name('balanceEnquiry');
        Route::post('miniStatement', [AepsController::class, 'miniStatement'])->name('miniStatement');
        Route::post('apesservies', [AepsController::class, 'apesservies'])->name('apesservies');

        // Cart Start
        Route::get('product-detail/{link}', [ProductsController::class, 'details'])->name('product.detail');
        Route::get('all-product', [ProductsController::class, 'view'])->name('all-product.view');
        Route::get('add-to-cart', [CartsController::class, 'index'])->name('cart.index');
        Route::post('cart-update', [CartsController::class, 'update'])->name('cart.update');
        Route::get('checkout', [CartsController::class, 'checkout'])->name('cart.checkout');
        Route::get('destroy-cart/{id}', [CartsController::class, 'destroy'])->name('cart.destroy');
        Route::post('invoice-create', [InvoiceController::class, 'store'])->name('invoice.create');
        Route::get('thank-you', [InvoiceController::class, 'order_success'])->name('cart.thank-you');
        Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');
        Route::get('invoice-view/{invoice_number}', [InvoiceController::class, 'invoice_view'])->name('invoice.view');
        // Cart End
        Route::get('retailer/services', [HomeController::class, 'services'])->name('retailer.services');
        // start loan
        Route::group(['prefix' => 'loan'], function () {
            Route::get('view', [LoanController::class, 'index'])->name('loan.view');
            Route::get('personal', [LoanController::class, 'personal'])->name('loan.personal');
            Route::get('business', [LoanController::class, 'business'])->name('loan.business');
            Route::get('gold', [LoanController::class, 'gold'])->name('loan.gold');
            Route::get('home-salary-employee', [LoanController::class, 'home_salary_employed'])->name('loan.home-salary-employee');
            Route::get('home-self-employee', [LoanController::class, 'home_self_employed'])->name('loan.home-self-employee');
            Route::get('property-salary-employee', [LoanController::class, 'property_salary_employed'])->name('loan.property-salary-employee');
            Route::get('property-self-employee', [LoanController::class, 'property_self_employed'])->name('loan.property-self-employee');
        });
        // loan end

        // bus
        Route::group(['prefix' => 'Bus'], function () {
            Route::get('index', [BusController::class, 'index'])->name('bus.index');
            Route::post('availabletrips', [BusController::class, 'availabletrips'])->name('bus.availabletrips');
            Route::get('details/{id}', [BusController::class, 'details']);
            Route::get('bus', [BusController::class, 'bus'])->name('bus.bus');
            Route::get('bus_search', [BusController::class, 'bus_search'])->name('bus.bus_search');
            // link based booking
            Route::post('busurlcreate', [BusController::class, 'busurl'])->name('bus.url');
            Route::get('busclick', [BusController::class, 'bus_form'])->name('bus.bus_form');
        });

        // Recharge Start
        Route::group(['prefix' => 'recharge'], function () {
            Route::get('prepaid', [RechargeApiController::class, 'prepaid'])->name('recharge.prepaid');
            Route::get('dth', [RechargeApiController::class, 'dth'])->name('recharge.dth');
            // Route::get('rechargemobile', [RechargeApiController::class, 'doRecharge'])->name("recharge.prepaid-store");
            Route::post('submit-form', [RechargeApiController::class, 'doRechargeprepaid'])->name('submit-form');
            Route::post('dth-form', [RechargeApiController::class, 'doRechargedth'])->name('dth-form');
            Route::get('status', [RechargeApiController::class, 'status']);
            Route::get('import_excel', [RechargeApiController::class, 'import_excel'])->name('import_excel');
            Route::post('status1', [RechargeApiController::class, 'status1'])->name('rech-status');
            Route::post('data-import',[RechargeApiController::class,'import'])->name('data.import');
        });

        // Recharge End

        // DMT Start
        Route::group(['prefix' => 'dmt'], function () {
            Route::get('money-transfer-details', [DmtController::class, 'index'])->name('dmt.index1');
            Route::get('money-transfer-details/{phone}', [DmtController::class, 'index'])->name('dmt.index');
            Route::post('query-remmiter', [DmtController::class, 'query_remmiter'])->name('dmt.query-remmiter');
            Route::get('register-remmiter/{phone}', [DmtController::class, 'register_remmiter'])->name('dmt.register-remmiter');
            Route::post('register-store-remmiter', [DmtController::class, 'store_register_remmiter'])->name('dmt.register-store-remmiter');
            Route::post('register-store-beneficiary', [DmtController::class, 'store_register_beneficiary'])->name('dmt.register-store-beneficiary');
            Route::get('money-transfer', [DmtController::class, 'create'])->name('dmt.remmiter');
            Route::get('money-transfer-confirm', [DmtController::class, 'confirm'])->name('dmt.confirm');
            Route::get('beneficiary-delete/{id}/{phone}', [DmtController::class, 'beneficiary_delete'])->name('dmt.beneficiary-delete');
            Route::get('beneficiary-delete/{id}', [DmtController::class, 'beneficiary_status'])->name('dmt.beneficiary-status');
            Route::post('transact', [DmtController::class, 'dotransact'])->name('dmt.transact');
            Route::get('refund-index', [DmtController::class, 'dmtrefund'])->name('dmt.dmtrefund');
            Route::post('refund-otp', [DmtController::class, 'dmtrefundotp'])->name('dmt.dmtrefundotp');
            Route::post('refund-check', [DmtController::class, 'dmtrefundcheck'])->name('dmt.dmtrefundcheck');
        });
        // DMT End

        Route::group(['prefix' => 'bbps'], function () {
            Route::get('/electricity-bill', [BillPaymentController::class, 'electricity_bill'])->name('bbps.electricity_bill');
            Route::get('/mobile-postpaid', [BillPaymentController::class, 'mobile_postpaid'])->name('bbps.mobile_postpaid');
            Route::get('/gas', [BillPaymentController::class, 'gas'])->name('bbps.gas');
            Route::get('/water', [BillPaymentController::class, 'water'])->name('bbps.water');
            Route::get('/broad-band', [BillPaymentController::class, 'broad_band'])->name('bbps.broad_band');
            Route::get('/landline', [BillPaymentController::class, 'landline'])->name('bbps.landline');
            Route::get('/indurance', [BillPaymentController::class, 'indurance'])->name('bbps.indurance');
            Route::get('/fastag', [BillPaymentController::class, 'fastag'])->name('bbps.fastag');
            Route::get('/loan', [BillPaymentController::class, 'loan'])->name('bbps.loan');
            Route::get('/creditcard', [BillPaymentController::class, 'creditcard'])->name('bbps.creditcard');
            Route::get('/rentpayment', [BillPaymentController::class, 'rentpayment'])->name('bbps.rentpayment');
            Route::get('/gas-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('gas-bill');
            Route::get('/water-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('water-bill');
            Route::get('/boardband-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('boardband-bill');
            Route::get('/landline-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('landline-bill');
            Route::get('/insurance-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('insurance-bill');
            Route::get('/fastag-bill', [BillPaymentController::class, 'bbpsbillpayment'])->name('fastag-bill');
            Route::post('/process-data', [BillPaymentController::class, 'fetchbillsdetails'])->name('ajax.process');
            Route::post('/getopratordata-data', [ApiController::class, 'getoperatorlist'])->name('ajax.getopratordata');
            Route::post('/getplans-data', [ApiController::class, 'getplansapi'])->name('ajax.getplans');
            Route::post('/getcircles-data', [ApiController::class, 'getcirclelist'])->name('ajax.getcircles');
            Route::post('/billpayelectricity', [BillPaymentController::class, 'paybills'])->name('billpayelectricity');
            Route::post('/getid', [BillPaymentController::class, 'getdisplaynameregx'])->name('getid');
            Route::post('/paybill', [BillPaymentController::class, 'paybill'])->name('paybill');
        });

        Route::group(['prefix' => 'report'], function () {
            Route::get('/allreport', [ReportController::class, 'index'])->name('report.allreport');
            Route::get('/filterdata', [ReportController::class, 'filterdata'])->name('filterdata');
        });

        Route::group(['prefix' => 'ccardbill'], function () {
            Route::get('/ccardbill', [CcardbillController::class, 'ccardbill'])->name('ccardbill');
            Route::get('/ccardbillpay', [CcardbillController::class, 'ccardbillpay'])->name('ccardbillpay.paybill');
            Route::post('/ccardbillpost', [CcardbillController::class, 'ccardbillpost'])->name('ccardbillpost');
            Route::post('/ccardbillfinal', [CcardbillController::class, 'ccardbillfinal1'])->name('ccardbillfinal1');
        });

        Route::group(['prefix' => 'licbill'], function () {
            Route::get('/lic', [LicbillController::class, 'lic'])->name('licbillpay.lic');
            Route::get('/licpay', [LicbillController::class, 'licbillpay'])->name('licbillpay.paybill');
        });

        Route::group(['prefix' => 'cms'], function () {
            Route::get('/airtelcms', [CmsController::class, 'airtelcms'])->name('cms.airtel');
            Route::get('/airtelcms2', [CmsController::class, 'airtelcms2'])->name('cms.airtel2');
            Route::get('/finocms', [CmsController::class, 'finocms'])->name('cms.fino');
        });

        Route::group(['prefix' => 'nsdl'], function () {
            Route::get('/applypan', [NsdlpanController::class, 'index'])->name('nsdlpan.nsdlpan');
            Route::get('/panlist', [NsdlpanController::class, 'nsdlpanlist'])->name('nsdlpan.nsdlpanlist');
            Route::get('/pansubmit', [NsdlpanController::class, 'panstore'])->name('pansubmit.panstore');
            Route::get('/callapi/{id}', [NsdlpanController::class, 'nsdlpancallapi']);
            Route::get('/nsdplpanstransstatus/{id}', [NsdlpanController::class, 'nsdlpancallapitransstatus']);
            Route::get('/testkit', [NsdlpanController::class, 'testkit']);
        });
        Route::group(['prefix' => 'mywallet'], function () {
            Route::get('cashfree/payments/create', [CashfreePaymentController::class, 'create'])->name('cashfree.callback');
            Route::post('cashfree/payments/store', [CashfreePaymentController::class, 'store'])->name('cashfree.store');
            Route::any('cashfree/payments/success', [CashfreePaymentController::class, 'success'])->name('cashfree.success');
            Route::get('/addwallet-route', [RechargeController::class, 'deposit'])->name('addwallet.route');
        });
        Route::group(['prefix' => 'payout'], function () {
            Route::get('cashfree/payments/create', [CashfreePaymentController::class, 'create'])->name('cashfree.callback');
            Route::post('cashfree/payments/store', [CashfreePaymentController::class, 'store'])->name('cashfree.store');
            Route::any('cashfree/payments/success', [CashfreePaymentController::class, 'success'])->name('cashfree.success');
            Route::get('/addwallet-route', [RechargeController::class, 'deposit'])->name('addwallet.route');
        });

        // FasTag
        Route::group(['prefix' => 'fastag'], function () {
            Route::get('/', [FastagController::class, 'index'])->name('fastag');
            Route::post('/getdispalyname', [FastagController::class, 'getdispalyname'])->name('getdispalyname');
            route::post('/fetchconsumerdetails', [FastagController::class, 'fetchconsumerdetails'])->name('fetchconsumerdetails');
            route::post('/recharge', [FastagController::class, 'recharge'])->name('recharge');
        });
    });

    // wallet Routs euyfu
    Route::get('/demo', [BillPaymentController::class, 'demo'])->name('bbps.demo');
    Route::get('/matm', [BillPaymentController::class, 'matm'])->name('bbps.matm');
    Route::get('/payment-request', [BillPaymentController::class, 'paymentrequest'])->name('paymentrequest');
    // Employee Routs

    Route::group(['prefix' => 'employee', 'middleware' => ['isEmployee', 'auth', 'PreventBackHistory']], function () {
        Route::get('dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
    });

    // Distributor Routs
    Route::group(['prefix' => 'distributor', 'middleware' => ['isDistributor', 'auth', 'PreventBackHistory']], function () {
        Route::get('dashboard', [DistributorController::class, 'index'])->name('distributor.dashboard');
        Route::get('recharge-utility-report', [DistributorController::class, 'recharge'])->name('distributor.recharge-utility-report');
        Route::get('payout-report', [DistributorController::class, 'payout_report'])->name('distributor.payout-report');
        Route::get('ledger-report', [DistributorController::class, 'ledger_report'])->name('distributor.ledger-report');
        Route::get('top-distributer', [DistributorController::class, 'top_distributer'])->name('distributor.top-distributer');
        Route::get('top-retailer', [DistributorController::class, 'top_retailer'])->name('distributor.top-retailer');
        Route::get('day-book', [DistributorController::class, 'day_book'])->name('distributor.day-book');
        Route::get('balance-transfer-report', [DistributorController::class, 'balance_transfer_report'])->name('distributor.balance-transfer-report');
        Route::get('my-creadit-book', [DistributorController::class, 'my_creadit_book'])->name('distributor.my-creadit-book');
        Route::get('payment-credit-debit', [DistributorController::class, 'payment_credit_debit'])->name('distributor.payment-credit-debit');
        Route::get('payment-request', [DistributorController::class, 'payment_request'])->name('distributor.payment-request');
        Route::get('bank-information', [DistributorController::class, 'bank_information'])->name('distributor.bank-information');
        Route::get('login-history', [DistributorController::class, 'login_history'])->name('distributor.login-history');
        Route::get('alert-settings', [DistributorController::class, 'alert_settings'])->name('distributor.alert-settings');
        Route::get('my-distributors', [DistributorController::class, 'my_distributors'])->name('distributor.my-distributors');
        Route::get('my-downline', [DistributorController::class, 'my_downline'])->name('distributor.my-downline');
        Route::get('distributor-slab', [DistributorController::class, 'distributor_slab'])->name('distributor.distributor-slab');
        Route::get('retailer-slab', [DistributorController::class, 'retailer_slab'])->name('distributor.retailer-slab');
        Route::get('collection-book', [DistributorController::class, 'collection_book'])->name('distributor.collection-book');
        Route::get('credit-book', [DistributorController::class, 'credit_book'])->name('distributor.credit-book');
        Route::get('gst-invoicing', [DistributorController::class, 'gst_invoicing'])->name('distributor.gst-invoicing');
        Route::get('P-L-statement', [DistributorController::class, 'P_L_statement'])->name('distributor.P-L-statement');
        Route::get('number-lookup', [DistributorController::class, 'number_lookup'])->name('distributor.number-lookup');
    });

    // Superdistributor

    Route::group(['prefix' => 'superdistributor', 'middleware' => ['isSuperDistributor', 'auth', 'PreventBackHistory']], function () {
        Route::get('dashboard', [SuperDistributorController::class, 'index'])->name('superdistributor.dashboard');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('user-login-history', [LoginHistoryController::class, 'index'])->name('login-history.index');

        Route::get('pending-users', [UserController::class, 'pending_user'])->name('pending-user.pending');
        Route::post('pending_user', [UserController::class, 'pending_user_update'])->name('pending-user.update');

        // users manage 
        // Route::get('users', [UserController::class, 'index'])->name('all-user.index');


        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');


        Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.delete');
        Route::get('users/{id}', [UserController::class, 'card'])->name('users.card');
        Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::post('userchangeStatus', [UserController::class, 'userchangeStatus'])->name('userchangeStatus');
        Route::post('userFilter', [UserController::class, 'userFilter'])->name('userFilter');
        // Route::get('add_Users', [UserController::class, 'add_Users'])->name('add_Users');
        // commision manage 
        Route::get('commision_slots', [HomeController::class, 'commision_slots'])->name('commision_slots');
        Route::get('commision_slots_add', [HomeController::class, 'commision_slots_add'])->name('commision_slots_add');
        Route::post('add_Commission', [CommissionController::class, 'add_Commission'])->name('add_Commission');
        Route::get('index_Commission', [CommissionController::class, 'list_Commission'])->name('index_Commission');
        Route::get('edit_Commission/{id}', [CommissionController::class, 'edit_Commission'])->name('edit_Commission');
        Route::post('update_Commission', [CommissionController::class, 'update_Commission'])->name('update_Commission');
        Route::get('delete_Commission/{id}', [CommissionController::class, 'delete_Commission'])->name('delete_Commission');
        Route::post('CommissionStatusChange', [CommissionController::class, 'CommissionStatusChange'])->name('CommissionStatusChange');

        // company bank
        Route::get('banks', [CompanyBankController::class, 'index'])->name('banks.index');
        Route::post('banks', [CompanyBankController::class, 'store'])->name('banks.store');
        Route::get('banks/create', [CompanyBankController::class, 'create'])->name('banks.create');
        Route::get('banks/{id}', [CompanyBankController::class, 'edit'])->name('banks.edit');
        Route::put('banks/{id}', [CompanyBankController::class, 'update'])->name('banks.update');
        Route::post('CompanychangeStatus', [CompanyBankController::class, 'CompanychangeStatus'])->name('CompanychangeStatus');
        Route::get('banklist', [CompanyBankController::class, 'banklist'])->name('banklist');

        // fund
        Route::get('fund_request', [HomeController::class, 'fund_request'])->name('fund_request');
        Route::get('fund_transfer', [HomeController::class, 'fund_transfer'])->name('fund_transfer');
        Route::get('all_fund_transfer', [HomeController::class, 'all_fund_transfer'])->name('all_fund_transfer');


        // manage services start
        Route::get('services', [HomeController::class, 'services'])->name('services');
        Route::get('manage_services', [HomeController::class, 'manage_services'])->name('manage_services');
        Route::post('add_service', [ServicesController::class, 'add_service'])->name('add_service');
        Route::get('get_services', [ServicesController::class, 'get_services'])->name('get_services');
        Route::post('edit_service', [ServicesController::class, 'edit_service'])->name('edit_service');
        Route::get('Fetch_serviceByID', [ServicesController::class, 'Fetch_serviceByID'])->name('Fetch_serviceByID');
        Route::post('serviceStatusChange', [ServicesController::class, 'serviceStatusChange'])->name('serviceStatusChange');
        Route::get('Delete_serviceByID', [ServicesController::class, 'Delete_serviceByID'])->name('Delete_serviceByID');

        // manage services end


        ////////////Ticket mange ////////////////////////

        Route::get('ticket', [HomeController::class, 'ticket'])->name('ticket');
        Route::get('raise_ticket', [HomeController::class, 'raise_ticket'])->name('raise_ticket');

        // Products Start

        Route::get('all-products', [ProductsController::class, 'index'])->name('all-product.index');
        Route::get('add-product', [ProductsController::class, 'create'])->name('all-product.create');
        Route::post('store-product', [ProductsController::class, 'store'])->name('all-product.store');
        Route::get('destroy-product/{id}', [ProductsController::class, 'destroy'])->name('all-product.destroy');
        Route::get('status-product/{id}/{status}', [ProductsController::class, 'status'])->name('all-product.status');
        // Products End
        // Invoice Start
        Route::get('all-invoice', [InvoiceController::class, 'index'])->name('all-invoice.index');
        Route::get('user-invoice-view/{invoice_number}', [InvoiceController::class, 'invoice_view'])->name('user-invoice.view');
        Route::post('invoice-status', [InvoiceController::class, 'invoice_status'])->name('invoice.status');
        // Invoice End

        // Plans Start
        Route::get('add-plans', [PlanController::class, 'index'])->name('plans.index');
        Route::get('list-plans', [PlanController::class, 'plans_list'])->name('plans.plans');
        Route::post('add-plan', [PlanController::class, 'add_plan'])->name('add-plan');
        Route::post('edit_plan', [PlanController::class, 'edit_plan'])->name('edit_plan');
        Route::get('get_plans', [PlanController::class, 'get_plans'])->name('get_plans');
        Route::get('Fetch_planByID', [PlanController::class, 'Fetch_planByID'])->name('Fetch_planByID');
        Route::post('planStatusChange', [PlanController::class, 'planStatusChange'])->name('planStatusChange');
        Route::get('Delete_planByID', [PlanController::class, 'Delete_planByID'])->name('Delete_planByID');

        // Plans End

        // whatsapi
        Route::get('api', [AdminController::class, 'api'])->name('admin.api');
        Route::get('wallet', [AdminController::class, 'wallet'])->name('wallet');

        Route::post('apistore', [AdminController::class, 'apistore'])->name('admin.apistore');
        Route::get('apidestroy/{id}', [AdminController::class, 'apidestroy'])->name('admin.apidestroy');

        // Recharge Plan Start
        Route::group(['prefix' => 'recharge-plan'], function () {
            Route::get('destroy/{id}', [RechargePlanController::class, 'destroy'])->name('recharge-plan.destroy');
            Route::get('index', [RechargePlanController::class, 'index'])->name('recharge-plan.index');
            Route::get('create', [RechargePlanController::class, 'create'])->name('recharge-plan.create');
            Route::post('store', [RechargePlanController::class, 'store'])->name('recharge-plan.store');
        });
        // Recharge Plan End
    });

    // distribotor route strat
    Route::group(['prefix' => 'distributor'], function () {
        Route::get('dashboard', [DistributorController::class, 'index'])->name('distributor.dashboard');
        Route::get('bclistadd', [DistributorController::class, 'bclistadd'])->name('distributor.bclistadd');
    });

    // apiuser route strat
    Route::group(['prefix' => 'apiuser'], function () {
        Route::get('dashboard', [ApiuserController::class, 'index'])->name('apiuser.dashboard');
        Route::get('rechargeutility', [ApiuserController::class, 'rechargeutility'])->name('apiuser.rechargeutility');
        Route::get('payoutreport', [ApiuserController::class, 'payoutreport'])->name('apiuser.payoutreport');
        Route::get('refundreport', [ApiuserController::class, 'refundreport'])->name('apiuser.refundreport');
        Route::get('ledger_report', [ApiuserController::class, 'ledger_report'])->name('apiuser.ledger_report');
        Route::get('day_book', [ApiuserController::class, 'day_book'])->name('apiuser.day_book');
        Route::get('dispute_report', [ApiuserController::class, 'dispute_report'])->name('apiuser.dispute_report');
        Route::get('payment_credit_debit_report', [ApiuserController::class, 'payment_credit_debit_report'])->name('apiuser.payment_credit_debit_report');
        Route::get('payment_request', [ApiuserController::class, 'payment_request'])->name('apiuser.payment_request');
        Route::get('bank_information', [ApiuserController::class, 'bank_information'])->name('apiuser.bank_information');
        Route::get('login_history', [ApiuserController::class, 'login_history'])->name('apiuser.login_history');
        Route::get('ip_callback_setting', [ApiuserController::class, 'ip_callback_setting'])->name('apiuser.ip_callback_setting');
        Route::get('alert_setting', [ApiuserController::class, 'alert_setting'])->name('apiuser.alert_setting');
        Route::get('gst_invoicing', [ApiuserController::class, 'gst_invoicing'])->name('apiuser.gst_invoicing');
        Route::get('mycreditbook', [ApiuserController::class, 'mycreditbook'])->name('apiuser.mycreditbook');
        Route::get('bbps_outlet', [ApiuserController::class, 'bbps_outlet'])->name('apiuser.bbps_outlet');
        Route::get('bbps_complaints', [ApiuserController::class, 'bbps_complaints'])->name('apiuser.bbps_complaints');
    });
});

Route::get('/profile', function () {
    return view('userkyc.profile');
})->name('profile');

// cashfree payment Gatway

// qr-code genrate
// Route::get('/qrcode', function () {
//     return QrCode::size(200)->generate('rahulsingh');
// });

// Route::get('/color-qr-code', function () {
//     return QrCode::size(200)->backgroundColor(255, 55, 0)->generate('Webappfix.com');
// });

// Route::get('/qr-code-with-image', function () {
//     $image = QrCode::format('png')
//         ->merge('https://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
//         ->size(200)
//         ->errorCorrection('H')
//         ->generate('Webappfix Qr Laravel Tutorial Example');
//     return response($image)->header('Content-type', 'image/png');
// });

// Route::get('/qr-code-with-image', function () {
//     $image = QrCode::format('png')
//         ->merge('https://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
//         ->size(200)
//         ->errorCorrection('H')
//         ->generate('Webappfix Qr Laravel Tutorial Example');
//     return response($image)->header('Content-type', 'image/png');
// });





Route::post('/edit/{id}/', [ProductsController::class, 'Update'])->name('product.edit');

Route::get('/kyc/{id}', [ApiController::class, 'kyc'])->name('kyc.id');

Route::get('/ekyc', [EkycRegistrationController::class, 'index'])->name('ekyc');

Route::get('/ekycexport', [EkycRegistrationController::class, 'ekycdata']);

Route::get('exportexel', [EkycRegistrationController::class, 'export'])->name('exportexel');

Route::post('showarray', [EkycRegistrationController::class, 'showarray'])->name('showarray');

Route::post('ekycpost', [EkycRegistrationController::class, 'ekycpost'])->name('ekycpost');

Route::get('getdata', [EkycRegistrationController::class, 'getdata'])->name('getdata');

Route::get('/profile', function () {
    return view('userkyc.profile');
})->name('profile');

Route::get('/testpage', function () {
    return view('bill-payment.lic-bill');
});

Route::get('webkyc', [WebkycController::class, 'webkyc'])->name('webkyc');

Route::get('ping1', function () {
    $partnerId = env('PAY_SPRINT_PARTNERID');
    $environment = env('PAY_SPRINT_ENVIORMENT');
    $aesEncryptionKey = env('PAY_SPRINT_AES_ENCRYPTION_KEY');
    $aesEncryptionIV = env('PAY_SPRINT_AES_ENCRYPTION_IV');
    $jwtKey = env('JWT_SECRET');
    $authorisedKey = env('PAY_SPRINT_AUTHORISED_KEY');
    $apiUrl = env('PAY_SPRINT_API_URL');

    // build the headers
    $headers = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
    $headers_encoded = base64_encode($headers);

    // build the payload
    $payload = json_encode(['timestamp' => time(), 'partnerId' => $partnerId, 'reqid' => time() . rand(111, 999)]);
    $payload_encoded = base64_encode($payload);

    // build the signature
    $key = $jwtKey;
    $signature = hash_hmac('sha256', $headers_encoded . '.' . $payload_encoded, $key, true);
    $signature_encoded = base64_encode($signature);

    // build and return the token
    return $token = "$headers_encoded.$payload_encoded.$signature_encoded";
});

Route::get('ping', function () {
    $service = 'bus/generateurl';
    //  recharge/recharge/dorecharge

    $body = [
        'refid' => 62902852223,
        'redirect_url' => 'http://127.0.0.1:8000/retailer/licbill/lic',
    ];

    return $res = json_decode(ApiController::post($service, $body));
    //  $res->getBody();
});

Route::get('apitest', function () {
    return view('testapiform');
});

Route::get('opraterlist', function () {
    $service = 'bill-payment/bill/getoperator';
    //  recharge/recharge/dorecharge

    $body = [
        'mode' => 'online',
    ];

    return $res = json_decode(ApiController::post($service, $body));
});

Route::get('fetchConsumerDetails', function () {
    $service = 'fastag/Fastag/fetchConsumerDetails';
    $body = [
        'operator' => 314,
        'canumber' => 'DL12CB4685',
    ];

    return $res = json_decode(ApiController::post($service, $body));
});

Route::get('bus', function () {
    $service = 'bus/ticket/availabletrips';
    $body = '{"source_id":32665,"destination_id":39238,"date_of_journey":"2023-08-10"}';
    $body = json_decode($body);

    return $res = json_decode(ApiController::post($service, $body));
});
