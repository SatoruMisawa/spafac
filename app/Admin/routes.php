<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('addresses', AddressController::class);
    $router->resource('amenities', AmenityController::class);
    $router->resource('applies', ApplyController::class);
    $router->resource('bank_accounts', BankAccountController::class);
    $router->resource('days', DayController::class);
    $router->resource('facilities', FacilityController::class);
    $router->resource('facility_kinds', FacilityKindController::class);
    $router->resource('key_deliveries', KeyDeliveryController::class);
    $router->resource('message_templates', MessageTemplateController::class);
    $router->resource('options', OptionController::class);
    $router->resource('plans', PlanController::class);
    $router->resource('prefectures', PrefectureController::class);
    $router->resource('preorder_deadlines', PreorderDeadlineController::class);
    $router->resource('preorder_periods', PreorderPeriodController::class);
    $router->resource('providers', ProviderController::class);
    $router->resource('reservations', ReservationController::class);
    $router->resource('schedules', ScheduleController::class);
    $router->resource('space_attachments', SpaceAttachmentController::class);
    $router->resource('spaces', SpaceController::class);
    $router->resource('space_images', SpaceImageController::class);
    $router->resource('space_usages', SpaceUsageController::class);
    $router->resource('stripe_charges', StripeChargeController::class);
    $router->resource('stripe_users', StripeUserController::class);
    $router->resource('testers', TesterController::class);
    $router->resource('users', UserController::class);
    $router->resource('user_provider', UserProviderController::class);

});