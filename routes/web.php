<?php

use App\Console\Commands\favouritePropertyCron;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\PropertiesController;

use App\Http\Controllers\OurCommunityController;

use App\Http\Controllers\PropertyDetailsController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\AgentController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\Blog;

use App\Http\Controllers\BlogCategory;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\WalletController;
use App\Models\pagecontent;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//Forum Routes
use App\Http\Controllers\ForumCategoryController;
use App\Http\Controllers\ForumThreadController;
use App\Http\Controllers\ForumCommentController;



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

    // User Copntroller routes
    Route::post('/new-user',[UserController::class, 'newUser'])->name('newUser');
    Route::post('/user-login',[UserController::class, 'userLogin'])->name('userLogin');
    Route::post('/agent/auth',[UserController::class, 'auth'])->name('UserAuth');
    Route::get('/agent/logout',[UserController::class, 'logout'])->name('userLogout');
   // Route::get('/agent/dashboard',[UserController::class, 'dashboard'])->name('userDashboard')
    //->middleware(['auth', 'verified','agentGuard']);
    Route::get('/user/register',[UserController::class, 'registerUser'])->name('userRegister');
    Route::post('/user/new',[UserController::class, 'simpleUser'])->name('addUser');
    Route::post('/agent/add-team',[UserController::class, 'agentTeam'])->name('agentTeam')->middleware('agentGuard');
    Route::get('/agent/notification',[UserController::class, 'notification'])->name('userNotification')->middleware('agentGuard');
    Route::post('/agent/update',[UserController::class, 'updateAgent'])->name('UserUpdate')->middleware('agentGuard');
    Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
    Route::post('/contact-store',[PagesController::class, 'contactStore'])->name('contactStore');
    Route::post('/schedule-tour',[PagesController::class, 'scheduleTour'])->name('scheduleTour');
    Route::get('/agent/profile',[UserController::class, 'profile'])->name('userProfile')->middleware('agentGuard');
    Route::get('/user/dashboard',[UserController::class, 'userdashboard'])->name('userSimpleDashboard')
    ->middleware(['auth', 'verified','userGuard']);
    Route::post('/user/complaint',[UserController::class, 'userComplaint'])->name('userComplaint')->middleware('userGuard');
    Route::post('/user/update',[UserController::class, 'updateuser'])->name('simpleUserUpdate')->middleware('userGuard');
    Route::post('/update-profile-image',[UserController::class, 'updateProfileImage'])->name('updateProfileImage');
    Route::get('/user/setupassword/{id}',[UserController::class, 'setuppassword'])->name('setupPassword');
    Route::post('/user/new-password',[UserController::class, 'newpassword'])->name('newPassword');
    Route::get('/arisdashboard', [UserController::class, 'arisdashboard'])->name('arisdashboard');
    Route::get('/delete-property', [UserController::class, 'deleteUserListing'])->name('delete-property');
    Auth::routes(['verify' => true]);
    Route::get('/email/verify', function () {
        return view('auth.verify');
    })->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/login');
    })->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    Route::post('/reset-password',[UserController::class, 'resetPassword'])->name('resetpassword');
    // ------Ends Here --------- //



    // PROPERTIES CONTROLLER ROUTES
    Route::get('/', [PropertiesController::class, 'index'])->name('mainHome');
    Route::get('/home', [PropertiesController::class, 'index'])->name('home');
    Route::get('/all-properties', [PropertiesController::class, 'OurCommunity'])->name('home.our-community');
    Route::get('/property-detail/{id}', [PropertiesController::class, 'PropertyDetail'])->name('home.property-detail');
    Route::get('/edit_property/{property}', [PropertiesController::class, 'propertyEdit'])->name('propertyEdit')
    ->middleware(['auth', 'verified']);
    Route::post('/save_property', [PropertiesController::class, 'storeProperty'])->name('storeProperty');
    Route::get('/propertysort', [PropertiesController::class, 'PropertySort'])->name('home.sortproperty');
    Route::match(['get', 'post'], '/search', [PropertiesController::class, 'PropertySearch'])->name('search');
    Route::match(['get', 'post'], '/getproperties', [PropertiesController::class, 'getproperties'])->name('getproperties');
    Route::get('/fair-housing-eop', [PropertiesController::class, 'FAirHousing']);
    Route::get('/homes-privacy-notice', [PropertiesController::class, 'PrivacyNotice']);
    Route::get('/terms-of-use', [PropertiesController::class, 'Terms']);
    Route::get('licensing', [PropertiesController::class, 'licensing'])->name('Licensing');
    Route::get('ada-accessiblity', [PropertiesController::class, 'ada_accessiblity'])->name('ada.accessiblity');
    Route::get('/find-an-agent', [PropertiesController::class, 'Findagent'])->name('find-an-agent');
    Route::get('/real-estate-agent', [PropertiesController::class, 'Realestateagent'])->name('real-estate-agent');
    Route::get('/real-estate-agent-detail/{id}', [PropertiesController::class, 'Realestateagentdetail'])->name('real-estate-agent-detail');
    Route::get('/real-estate', [PropertiesController::class, 'Realestate'])->name('real-estate');
    Route::get('/aris-career', [PropertiesController::class, 'Ariscareer'])->name('aris-career');
    Route::get('/apply-job', [PropertiesController::class, 'Applyjob'])->name('apply-job');
    Route::post('/property-store', [PropertiesController::class, 'PropertyStore'])->name('home.property-store');
    Route::get('/property-listing', [PropertiesController::class, 'PropertyListing'])
    ->name('home.property-listing')
    ->middleware(['auth', 'verified']);
    Route::get('/agent-resource-center', [PropertiesController::class, 'Agentresourcecenter'])->name('agent-resource-center');
    Route::get('/agent-resource-center-detail', [PropertiesController::class, 'Agentresourcecenterdetail'])->name('agent-resource-center-detail');
    Route::get('/agent-about-homeloan', [PropertiesController::class, 'Agentabouthomeloan'])->name('agent-about-homeloan');
    Route::get('/buy-with-aris', [PropertiesController::class, 'Buywitharis'])->name('buy-with-aris');
    Route::get('/sell-with-aris', [PropertiesController::class, 'Sellwitharis'])->name('sell-with-aris');
    Route::get('/my-home-worth', [PropertiesController::class, 'Myhomeworth'])->name('my-home-worth');
    Route::get('/my-home-worth-detail', [PropertiesController::class, 'Myhomeworthdetail'])->name('my-home-worth-detail');
    Route::get('/property-listing', [PropertiesController::class, 'PropertyListing'])
    ->name('home.property-listing')
    ->middleware(['auth', 'verified']);
    Route::post('/add-property-lead',[PropertiesController::class, 'StorePropertyLeads'])->name('store_property_lead');
    Route::get('/sellaris-homeworth', [PropertiesController::class, 'Sellarishomeworth'])->name('sellaris-homeworth');
    Route::get('/selling-guide', [PropertiesController::class, 'Sellingguide'])->name('selling-guide');
    Route::get('/home-buying-guide', [PropertiesController::class, 'Homebuyingguide'])->name('home-buying-guide');
    Route::get('/home-sale-proceeds-calculator', [PropertiesController::class, 'Homesaleproceedscalculator'])->name('home-sale-proceeds-calculator');
    Route::get('/mortgage-calculator', [PropertiesController::class, 'Mortgagecalculator'])->name('mortgage-calculator');
    Route::get('/partner-agent', [PropertiesController::class, 'Partneragent'])->name('partner-agent');
    Route::get('/refinance-calculator', [PropertiesController::class, 'Refinancecalculator'])->name('refinance-calculator');
    Route::get('/amortization-calculator', [PropertiesController::class, 'Amortizationcalculator'])->name('amortization-calculator');
    Route::get('/affordability-calculator', [PropertiesController::class, 'Affordabilitycalculator'])->name('affordability-calculator');
    Route::get('/mortgage-learning', [PropertiesController::class, 'Mortgagelearning'])->name('mortgage-learning');
    Route::get('/lender-resource', [PropertiesController::class, 'Lenderresource'])->name('lender-resource');
    Route::get('/lender-directory', [PropertiesController::class, 'Lenderdirectory'])->name('lender-directory');
    Route::get('/mortgage-rates', [PropertiesController::class, 'Mortgagerates'])->name('mortgage-rates');
    Route::get('/refinance-rates', [PropertiesController::class, 'Refinancerates'])->name('refinance-rates');
    Route::get('/lender-profile', [PropertiesController::class, 'Lenderprofile'])->name('lender-profile');
    Route::get('/lender-profile-02', [PropertiesController::class, 'Lenderprofile2'])->name('lender-profile-02');
    Route::get('/lender-profile-03', [PropertiesController::class, 'Lenderprofile3'])->name('lender-profile-03');
    Route::get('/lender-profile-04', [PropertiesController::class, 'Lenderprofile4'])->name('lender-profile-04');
    Route::get('/lender-profile-05', [PropertiesController::class, 'Lenderprofile5'])->name('lender-profile-05');
    Route::get('/lender-profile-06', [PropertiesController::class, 'Lenderprofile6'])->name('lender-profile-06');
    Route::get('/mortgage-rate-list', [PropertiesController::class, 'Mortgageratelist'])->name('mortgage-rate-list');
    Route::get('/why-choose-aris', [PropertiesController::class, 'Whychoosearis'])->name('why-choose-aris');
    Route::get('/first-time-homebuyer', [PropertiesController::class, 'Firsttimehomebuyer'])->name('first-time-homebuyer');
    Route::get('/housing-market-update', [PropertiesController::class, 'Housingmarketupdate'])->name('housing-market-update');
    Route::get('/todays-mortgage-rates', [PropertiesController::class, 'todaysmortgagerates'])->name('todays-mortgage-rates');
    Route::get('/mortgage-or-buy', [PropertiesController::class, 'mortgagebuy'])->name('mortgage-or-buy');
    Route::get('/aris-market-update', [PropertiesController::class, 'arismarketupdate'])->name('aris-market-update');
    Route::get('/current-home-owner', [PropertiesController::class, 'Currenthomeowner'])->name('current-home-owner');
    Route::get('/home-values', [PropertiesController::class, 'homeValues'])->name('home-values');
    Route::get('/forum', [PropertiesController::class, 'forum'])->name('forum');
    Route::get('/rent', [PropertiesController::class, 'rent'])->name('rent');
    Route::get('/current-home-owner', [PropertiesController::class, 'Currenthomeowner'])->name('current-home-owner');
    Route::get('/home-buying-guide', [PropertiesController::class, 'Homebuyingguide'])->name('home-buying-guide');
    Route::get('/compare-my-option', [PropertiesController::class, 'comparemyoption'])->name('compare-my-option');
    Route::get('/arismarketupdatenews-01', [PropertiesController::class, 'arismarketupdatenews1'])->name('arismarketupdatenews-01');
    Route::get('/arismarketupdatenews-02', [PropertiesController::class, 'arismarketupdatenews2'])->name('arismarketupdatenews-02');
    Route::get('/arismarketupdatenews-03', [PropertiesController::class, 'arismarketupdatenews3'])->name('arismarketupdatenews-03');
    Route::get('/arismarketupdatenews-04', [PropertiesController::class, 'arismarketupdatenews4'])->name('arismarketupdatenews-04');
    Route::get('/arismarketupdatenews-05', [PropertiesController::class, 'arismarketupdatenews5'])->name('arismarketupdatenews-05');
    Route::get('/arismarketupdatenews-06', [PropertiesController::class, 'arismarketupdatenews6'])->name('arismarketupdatenews-06');
    Route::get('/arismarketupdatenews-07', [PropertiesController::class, 'arismarketupdatenews7'])->name('arismarketupdatenews-07');
    Route::get('/arismarketupdatenews-08', [PropertiesController::class, 'arismarketupdatenews8'])->name('arismarketupdatenews-08');
    Route::get('/arismarketupdatenews-09', [PropertiesController::class, 'arismarketupdatenews9'])->name('arismarketupdatenews-09');
    Route::get('/agent-resource-center-01', [PropertiesController::class, 'agentresourcecenter1'])->name('agent-resource-center-01');
    Route::get('/agent-resource-center-02', [PropertiesController::class, 'agentresourcecenter2'])->name('agent-resource-center-02');
    Route::get('/agent-resource-center-03', [PropertiesController::class, 'agentresourcecenter3'])->name('agent-resource-center-03');
    Route::get('/agent-resource-center-04', [PropertiesController::class, 'agentresourcecenter4'])->name('agent-resource-center-04');
    Route::get('/agent-resource-center-05', [PropertiesController::class, 'agentresourcecenter5'])->name('agent-resource-center-05');
    Route::get('/agent-resource-center-06', [PropertiesController::class, 'agentresourcecenter6'])->name('agent-resource-center-06');
    Route::get('/agent-resource-center-07', [PropertiesController::class, 'agentresourcecenter7'])->name('agent-resource-center-07');
    Route::get('/agent-resource-center-08', [PropertiesController::class, 'agentresourcecenter8'])->name('agent-resource-center-08');
    Route::get('/agent-resource-center-09', [PropertiesController::class, 'agentresourcecenter9'])->name('agent-resource-center-09');
    Route::get('/alternative-analysis-01', [PropertiesController::class, 'alternativeanalysis1'])->name('alternative-analysis-01');
    Route::get('/alternative-analysis-02', [PropertiesController::class, 'alternativeanalysis2'])->name('alternative-analysis-02');
    Route::get('/alternative-analysis-03', [PropertiesController::class, 'alternativeanalysis3'])->name('alternative-analysis-03');
    Route::get('/alternative-analysis-04', [PropertiesController::class, 'alternativeanalysis4'])->name('alternative-analysis-04');
    Route::get('/alternative-analysis-05', [PropertiesController::class, 'alternativeanalysis5'])->name('alternative-analysis-05');
    Route::get('/alternative-analysis-06', [PropertiesController::class, 'alternativeanalysis6'])->name('alternative-analysis-06');
    Route::post('/add-to-favourite',[PropertiesController::class,'favouriteProperty'])->name('addToFavourite')->middleware('auth');
    Route::get('/delete-favourite',[PropertiesController::class,'deleteFavourite'])->name('deleteFavourite')->middleware('auth');
    Route::get('/skzfav',[PropertiesController::class,'skzfav'])->name('skzaddToFavourite')->middleware('auth');
    Route::post('/share-listing',[PropertiesController::class,'shareListing'])->name('shareListing')->middleware('auth');
    Route::post('/share', [PropertiesController::class, 'share'])->name('share');
    Route::post('/newsletter', [PropertiesController::class, 'newsletter'])->name('newsletter');
    Route::post('/notification-update',[PropertiesController::class, 'notificationUpdate'])->name('notificationUpdate');
    Route::get('/schoolsubrating',[PropertiesController::class, 'schoolSubrating'])->name('schoolSubrating');

    // ------Ends Here ------//

    //CMS Routes------------------------------------------------------------------------------------------------------------
    Route::post('/savecontent', [CmsController::class, 'savecontent'])->name('savecontent');
    Route::post('/savetwocontent', [CmsController::class, 'savetwocontent'])->name('savetwocontent');
    Route::post('/savethreecontent', [CmsController::class, 'savethreecontent'])->name('savethreecontent');
    Route::post('/savefourcontent', [CmsController::class, 'savefourcontent'])->name('savefourcontent');
    Route::post('/savefivecontent', [CmsController::class, 'savefivecontent'])->name('savefivecontent');
    Route::post('/savesixcontent', [CmsController::class, 'savesixcontent'])->name('savesixcontent');
    Route::post('/savesevencontent', [CmsController::class, 'savesevencontent'])->name('savesevencontent');
    Route::post('/saveeightcontent', [CmsController::class, 'saveeightcontent'])->name('saveeightcontent');
    Route::post('/savninecontent', [CmsController::class, 'savninecontent'])->name('savninecontent');
    Route::post('/savetencontent', [CmsController::class, 'savetencontent'])->name('savetencontent');
    Route::post('/saveelevencontent', [CmsController::class, 'saveelevencontent'])->name('saveelevencontent');
    Route::post('/savetwelvecontent', [CmsController::class, 'savetwelvecontent'])->name('savetwelvecontent');
    Route::post('/savethirteencontent', [CmsController::class, 'savethirteencontent'])->name('savethirteencontent');
    Route::post('/savefourteencontent', [CmsController::class, 'savefourteencontent'])->name('savefourteencontent');
    Route::post('/savenineteencontent', [CmsController::class, 'savenineteencontent'])->name('savenineteencontent');
    Route::get('cms-system',[CmsController::class, 'Buywitharis'])->name('cms-system')->middleware('adminGuard');;
    Route::get('why-choose',[CmsController::class, 'whychoose'])->name('why-choose')->middleware('adminGuard');;
    Route::get('buying-guide',[CmsController::class, 'buyingguide'])->name('buying-guide')->middleware('adminGuard');;
    Route::get('first-time',[CmsController::class, 'firsttime'])->name('first-time')->middleware('adminGuard');;
    Route::get('current-owner',[CmsController::class, 'currenthomeowner'])->name('current-owner')->middleware('adminGuard');
    Route::get('360',[CmsController::class, 'value360'])->name('360')->middleware('adminGuard');;
    Route::get('home-val',[CmsController::class, 'homevalue'])->name('home-val')->middleware('adminGuard');;
    Route::get('sell-with',[CmsController::class, 'sellwith'])->name('sell-with')->middleware('adminGuard');;
    Route::get('comparative',[CmsController::class, 'comparativeanalysis'])->name('comparative')->middleware('adminGuard');
    Route::get('sell-guide',[CmsController::class, 'sellguide'])->name('sell-guide')->middleware('adminGuard');;
    Route::get('selling-worth',[CmsController::class, 'sellingworth'])->name('selling-worth')->middleware('adminGuard');
    Route::get('mortgage-r',[CmsController::class, 'mortgagerate'])->name('mortgage-r')->middleware('adminGuard');;
    Route::get('about-home-loan',[CmsController::class, 'about_home_loan'])->name('about-home-loan')->middleware('adminGuard');
    Route::get('Mortgage-Learning-Center',[CmsController::class, 'Mortgage_Learning_Center'])->name('Mortgage-Learning-Center')->middleware('adminGuard');
    Route::get('lender-resource-l',[CmsController::class, 'lender_resource'])->name('lender-resource-l')->middleware('adminGuard');
    Route::get('agent-find',[CmsController::class, 'agent_find'])->name('agent-find')->middleware('adminGuard');
    Route::get('etate-real',[CmsController::class, 'state_real'])->name('etate-real')->middleware('adminGuard');
    Route::get('resource-center',[CmsController::class, 'resource_center'])->name('resource-center')->middleware('adminGuard');
    Route::get('market-update',[CmsController::class, 'market_update'])->name('market-update')->middleware('adminGuard');
    Route::get('today-mortgage-rates',[CmsController::class, 'mortgage_rates'])->name('today-mortgage-rates')->middleware('adminGuard');
    Route::get('mortgage-buy',[CmsController::class, 'mortgage_buy'])->name('mortgage-buy')->middleware('adminGuard');
    Route::get('cms-index',[CmsController::class, 'cms_index'])->name('cms-index')->middleware('adminGuard');
    Route::get('instruction',[CmsController::class, 'instruction'])->name('instruction')->middleware('adminGuard');

    //----------------------------------------------------------------------------------------------------------------------



    // Agent Controller Routes
    Route::post('/add-lead',[AgentController::class, 'addLead'])->name('add_leads');
    Route::post('/add-reviews', [AgentController::class, 'addReviews'])->name('addReviews');

    // -------Ends Here


    // Admin routes here
    Route::get('/admin/login',[AdminController::class, 'login'])->name('adminLogin');
    Route::post('/admin/auth',[AdminController::class, 'auth'])->name('adminAuth');
    Route::get('/admin',[AdminController::class, 'index'])->name('adminHome')->middleware('adminGuard');
    Route::get('/admin/home',[AdminController::class, 'home'])->name('adminHomeNew')->middleware('adminGuard');
    Route::get('/admin/reviews',[AdminController::class, 'reviewsagent'])->name('reviewsagent')->middleware('adminGuard');
    Route::get('/admin/reviewslist/{user}',[AdminController::class, 'agentreviewslist'])->name('agentreviewslist')->middleware('adminGuard');
    Route::get('/admin/agent-leads/{id}',[AdminController::class, 'agentLeads'])->name('agentLeads')->middleware('adminGuard');
    Route::get('/admin/verifyreview',[AdminController::class, 'verifyReview'])->name('verifyReview')->middleware('adminGuard');
    Route::get('/admin/newsletter',[AdminController::class, 'newsletter'])->name('newsletterAdmin')->middleware('adminGuard');
    Route::get('/admin/notification',[AdminController::class, 'allNotifications'])->name('allNotifications')->middleware('adminGuard');
    Route::get('/admin/logout',[AdminController::class, 'logout'])->name('adminLogout');
    Route::get('/admin/properties',[AdminController::class, 'properties'])->name('adminProperties')->middleware('adminGuard');
    Route::get('/admin/featured-properties',[AdminController::class, 'featuredPro'])->name('adminFeaturedProperties')->middleware('adminGuard');
    Route::get('/admin/properties/{property}',[AdminController::class, 'propertyinner'])->name('propertyinner')->middleware('adminGuard');
    Route::get('/admin/more-info/{property}',[AdminController::class, 'moreInfo'])->name('moreInfo')->middleware('adminGuard');
    Route::get('/admin/agent-inquiries',[AdminController::class, 'agentinquiries'])->name('agentInquiries')->middleware('adminGuard');
    Route::get('/admin/agent-onboard',[AdminController::class, 'agentonboard'])->name('agentOnboard')->middleware('adminGuard');
    Route::get('/admin/seth-queries',[AdminController::class, 'sethqueries'])->name('sethqueries')->middleware('adminGuard');
    Route::get('/admin/property_tour_scheduled',[AdminController::class, 'property_tour_scheduled'])->name('property_tour_scheduled')->middleware('adminGuard');
    Route::get('/admin/leader-inquiries',[AdminController::class, 'leaderinquiries'])->name('leaderinquiries')->middleware('adminGuard');
    Route::get('/admin/leader-onboard',[AdminController::class, 'leaderboard'])->name('leaderboard')->middleware('adminGuard');
    Route::get('/admin/leader-leads',[AdminController::class, 'leaderleads'])->name('leaderleads')->middleware('adminGuard');
    Route::get('/admin/loan-inquiries',[AdminController::class, 'loaninquiries'])->name('loaninquiries')->middleware('adminGuard');
    Route::get('/admin/loan-officers',[AdminController::class, 'loanofficers'])->name('loanOfficers')->middleware('adminGuard');
    Route::get('/admin/loan-leads',[AdminController::class, 'loanleads'])->name('loanleads')->middleware('adminGuard');
    Route::get('/admin/user-signed-up',[AdminController::class, 'usersignedup'])->name('usersignedup')->middleware('adminGuard');
    Route::get('/admin/user-signed-up/{users}',[AdminController::class, 'singleuser'])->name('usersignedupInner')->middleware('adminGuard');
    Route::get('/admin/reviews-leader',[AdminController::class, 'reviewsleader'])->name('reviewsleader')->middleware('adminGuard');
    Route::get('/admin/reviews-loan-officer',[AdminController::class, 'reviewsloanofficer'])->name('reviewsloanofficer')->middleware('adminGuard');
    Route::get('/admin/buying-guide',[AdminController::class, 'buyingguide'])->name('buyingguide')->middleware('adminGuard');
    Route::get('/admin/selling-guide',[AdminController::class, 'sellingguide'])->name('sellingguide')->middleware('adminGuard');
    Route::get('/admin/buying-leads',[AdminController::class, 'buyingleads'])->name('buyingleads')->middleware('adminGuard');
    Route::get('/admin/leads',[AdminController::class, 'sellingleads'])->name('sellingleads')->middleware('adminGuard');
    Route::get('/admin/finance',[AdminController::class, 'finance'])->name('finance')->middleware('adminGuard');
    Route::get('/admin/tickets',[AdminController::class, 'tickets'])->name('tickets')->middleware('adminGuard');
    Route::get('/admin/ticket-info/{complaint}',[AdminController::class, 'ticketInfo'])->name('ticketInfo')->middleware('adminGuard');
    Route::post('/admin/ticket-update/',[AdminController::class, 'ticketUpdate'])->name('ticketupdate')->middleware('adminGuard');
    Route::get('/admin/approve-agent/{users}',[AdminController::class, 'approveAgent'])->name('approveAgent')->middleware('adminGuard');
    Route::get('/admin/approve-sfl-user/{users}',[AdminController::class, 'approvesflusers'])->name('approvesflusers')->middleware('adminGuard');
    Route::get('/admin/tour-schedule',[AdminController::class, 'tourSchedule'])->name('tour-schedule')->middleware('adminGuard');
    Route::get('/admin/contact-form',[AdminController::class, 'contactForm'])->name('contact-form')->middleware('adminGuard');
    Route::get('/admin/suggestion-form',[AdminController::class, 'suggestionForm'])->name('suggestion-form')->middleware('adminGuard');
    Route::get('/admin/advice-form',[AdminController::class, 'adviceForm'])->name('advice-form')->middleware('adminGuard');
    Route::get('/admin/acceptlisting/{property}',[AdminController::class,'acceptlisting'])->middleware('adminGuard');
    Route::get('/admin/leads-info/{leads}',[AdminController::class, 'leadsInfo'])->name('leadsInfo')->middleware('adminGuard');

    // -----End Here



    // Other  Controller Routes
    Route::post('/suggestions',[PagesController::class, 'suggestionStore'])->name('suggestion');
    Route::post('/adivice',[PagesController::class, 'adviceStore'])->name('advice');
    Route::get('/textemailses',[HomeController::class,'textemailses']);
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/user/dashboard/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook');
    Route::get('/user/dashboard/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
    Route::post('/agent/create-charge', [PaymentController::class, 'stripePayment'])->name('stripe.create-charge');
    Route::post('/wallet/purchase-lead', [WalletController::class, 'store_debit'])->name('purchaseLead');


    //Home Controller
    Route::get('/houseCanary',[HomeController::class, 'houseCanary'])
    ->name('house-canary');
    Route::get('/estimation/{hnumber}/{address}/{zip}',[HomeController::class, 'whatismyhomeworth'])->name('whatismyhomeworth');
    Route::get('/nwmlsapis',[HomeController::class, 'nwmlsapis'])->name('nwmlsapis');
    Route::get('/textingsameer',[HomeController::class, 'textingsameer'])->name('textingsameer');
    Route::get('/prepareUrls/{nextUrl}/{type}',[HomeController::class, 'prepareUrls'])->name('prepareUrls');
    Route::get('/firstEntry/{type}',[HomeController::class, 'firstEntry'])->name('firstEntry');
    Route::get('/testingAutomation',[HomeController::class, 'testingAutomation'])->name('testingAutomation');
    Route::get('/MlsInsertProperty',[HomeController::class, 'MlsInsertProperty'])->name('MlsInsertProperty');
    Route::get('/s3chck',[HomeController::class, 's3chck'])->name('s3chck');
    Route::get('/checkcannary',[HomeController::class, 'checkcannary'])->name('checkcannary');
    Route::get('/s3images',[HomeController::class, 'imageupload'])->name('s3-image');
    Route::post('/s3-image-uplaod',[HomeController::class, 's3ImageUpload'])->name('s3-upload');
    Route::get('/askprimeagent',[HomeController::class, 'askprimeagent'])->name('askprimeagent');
    Route::get('/debugproperty',[HomeController::class, 'debugproperty'])->name('debugproperty');
    Route::post('/askquestion',[HomeController::class, 'askquestion'])->name('askquestion');
    Route::post('/schedule',[HomeController::class, 'schedule'])->name('schedule');
    Route::get('/open-house',[HomeController::class, 'liveData'])->name('liveData');

    //Ends Here

    // Blog Controller
    Route::get('/admin/new-blog-category',[BlogCategory::class,'create'])->name('newBlogCategory')->middleware('adminGuard');
    Route::post('/admin/add-blog-category',[BlogCategory::class,'store'])->name('addBlogCategory')->middleware('adminGuard');
    Route::post('/admin/update-blog-category/{blogCategories}',[BlogCategory::class,'update'])->name('updateBlogCategory')->middleware('adminGuard');
    Route::get('/admin/blog-categories',[BlogCategory::class,'blogcategories'])->name('blogCategory')->middleware('adminGuard');
    Route::get('/admin/edit-blog-category/{blogCategories}',[BlogCategory::class,'edit'])->middleware('adminGuard');
    Route::get('/admin/delete-blog-category/{blogCategories}',[BlogCategory::class,'destroy'])->middleware('adminGuard');
    Route::get('/admin/restore-blog-category/{id}',[BlogCategory::class,'restoreBlogCategory'])->middleware('adminGuard');
    Route::get('/admin/new-blog',[Blog::class,'create'])->name('newBlog')->middleware('adminGuard');
    Route::post('/admin/add-blog',[Blog::class,'store'])->name('addBlog')->middleware('adminGuard');
    Route::post('/admin/update-blog/{blogs}',[Blog::class,'update'])->name('updateBlog')->middleware('adminGuard');
    Route::get('/admin/blogs',[Blog::class,'blogs'])->name('blogs')->middleware('adminGuard');
    Route::get('/admin/edit-blog/{blogs}',[Blog::class,'edit'])->middleware('adminGuard');
    Route::get('/admin/delete-blog/{blogs}',[Blog::class,'destroy'])->middleware('adminGuard');
    Route::get('/admin/delete-blog/{blogs}',[Blog::class,'destroy'])->middleware('adminGuard');
    Route::get('/admin/restore-blog/{id}',[Blog::class,'restoreBlog'])->middleware('adminGuard');
    Route::get('/blog',[Blog::class,'index'])->name('blog');
    Route::get('/blog/{blogs:b_slug}',[Blog::class,'show']);
    Route::get('/home-buying-guide/{blogs:b_slug}',[Blog::class,'homebuyingguide']);
    Route::get('/selling-guide/{blogs:b_slug}',[Blog::class,'homesellingguide']);
    Route::get('/present-mortgage-rates/{blogs:b_slug}',[Blog::class,'presentmortagerates']);
    Route::get('/mortgage-or-buy/{blogs:b_slug}',[Blog::class,'mortgageorbuy']);
    Route::get('/aris-market-update/{blogs:b_slug}',[Blog::class,'arismarketupdatedynmic']);
    Route::get('/mortgage-learning/{blogs:b_slug}',[Blog::class,'mortgageLearning']);
    Route::get('/lender-resource/{blogs:b_slug}',[Blog::class,'lenderResource']);
    // Ends Here




    //Forum Module Routes
    Route::get('/categories', [ForumCategoryController::class, 'index'])->name('forum.categories')->middleware('auth');;
    Route::get('/categories/{category}', [ForumCategoryController::class, 'show'])->name('forum.categories.show')->middleware('auth');
    Route::get('/threads/create/{category}', [ForumThreadController::class, 'create'])->name('forum.threads.create')->middleware('auth');;
    Route::post('/threads/store', [ForumThreadController::class, 'store'])->name('forum.threads.store')->middleware('auth');;
    Route::get('/threads/{thread}', [ForumThreadController::class, 'show'])->name('forum.threads.show')->middleware('auth');;
    Route::post('/comments/store', [ForumCommentController::class, 'store'])->name('forum.comments.store')->middleware('auth');;
    // Ends Here

    //Buy Down Calculator
    Route::get('/buyDown-calculator', [PropertiesController::class, 'buyDown'])->name('buyDown-calculator');

    Route::get('/run-cron', function () {
    // Run the LogCron command UserController
    Artisan::call('log:cron');
    return 'Cron job executed.';
    });

    Route::get('/tour-checkout', [PropertiesController::class, 'tourCheckout'])->name('tourCheckout');
    Route::get('/tour-booking', [PropertiesController::class, 'tourBooking'])->name('tourBooking');
    Route::post('/save-search', [PropertiesController::class, 'saveSearch'])->name('saveSearch');
    Route::get('/places-api', [PropertiesController::class, 'places'])->name('places');
    Route::delete('/delete-saved-search/{id}',[UserController::class, 'deleteSearch'])->name('delete-saved-search');

    Route::fallback(function () {
        return view('errors.404');
    });

    Route::get('/agent/dashboard', [AgentController::class, 'hamzaDashboard'])->name('hamzaDashboard')->middleware(['auth', 'verified','agentGuard']);;
    Route::get('/hamza-userdashboard', [AgentController::class, 'hamzaUserDashboard'])->name('hamzaUserDashboard');
