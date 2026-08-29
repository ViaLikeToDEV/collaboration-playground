<?php

use App\Http\Controllers\AnomalyController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingManagementController;
use App\Http\Controllers\ChargebackController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SeatMapController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketValidationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home');
Route::view('/admin', 'admin.dashboard');

Route::prefix('auth')->group(function () {
    Route::post('register/customer', [AuthController::class, 'registerCustomer']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('set-password/{user}', fn () => 'Set password page')->name('auth.set-password');
});

Route::prefix('concerts')->group(function () {
    Route::get('search', [ConcertController::class, 'searchConcert']);
    Route::get('/', [ConcertController::class, 'getConcertList']);
    Route::get('{concert}', [ConcertController::class, 'getConcertDetail']);
    Route::post('/', [ConcertController::class, 'createConcert']);
    Route::put('{concert}', [ConcertController::class, 'updateConcert']);
});

Route::prefix('bookings')->group(function () {
    Route::post('/', [BookingController::class, 'createBooking']);
    Route::get('history', [BookingController::class, 'getBookingHistory']);
    Route::get('customer-contact', [BookingController::class, 'getCustomerContact']);
});

Route::post('/payments/process', [PaymentController::class, 'processPayment']);
Route::post('/payments/verify', [PaymentController::class, 'verifyPayment']);
Route::get('/tickets', [TicketController::class, 'getTickets']);

Route::prefix('users')->group(function () {
    Route::get('profile', [UserController::class, 'getProfile']);
    Route::put('profile', [UserController::class, 'updateProfile']);
    Route::put('change-password', [UserController::class, 'changePassword']);
});

Route::prefix('seat-map')->group(function () {
    Route::post('zone', [SeatMapController::class, 'createZone']);
    Route::put('zone/{zone}', [SeatMapController::class, 'updateZone']);
    Route::post('define', [SeatMapController::class, 'defineSeatMap']);
    Route::put('seat/{seat}', [SeatMapController::class, 'updateSeat']);
});

Route::prefix('reports')->group(function () {
    Route::get('monthly-sales', [ReportController::class, 'getMonthlySales']);
    Route::get('yearly-sales', [ReportController::class, 'getYearlySales']);
});

Route::prefix('staff')->group(function () {
    Route::post('/', [StaffController::class, 'createStaff']);
    Route::post('assign', [StaffController::class, 'assignStaffToConcert']);
    Route::post('unassign', [StaffController::class, 'unassignStaffFromConcert']);
    Route::get('concerts', [StaffController::class, 'getAssignedConcerts']);
});

Route::prefix('ticket-validation')->group(function () {
    Route::post('scan-qr', [TicketValidationController::class, 'scanTicketQR']);
    Route::post('validate-number', [TicketValidationController::class, 'validateTicketNumber']);
    Route::get('history', [TicketValidationController::class, 'getValidationHistory']);
});

Route::prefix('management/users')->group(function () {
    Route::get('/', [UserManagementController::class, 'getUsers']);
    Route::get('search', [UserManagementController::class, 'searchUser']);
    Route::post('ban', [UserManagementController::class, 'banUser']);
    Route::post('unban', [UserManagementController::class, 'unbanUser']);
    Route::post('change-organizer-company', [UserManagementController::class, 'changeOrganizerCompany']);
    Route::post('create-organizer', [UserManagementController::class, 'createOrganizer']);
    Route::post('create-admin', [UserManagementController::class, 'createAdmin']);
});

Route::prefix('management/bookings')->group(function () {
    Route::get('/', [BookingManagementController::class, 'getBookings']);
    Route::get('search', [BookingManagementController::class, 'searchBooking']);
    Route::get('seat-lock-history', [BookingManagementController::class, 'getSeatLockHistory']);
});

Route::prefix('audit-logs')->group(function () {
    Route::get('/', [AuditLogController::class, 'getLogs']);
    Route::get('search', [AuditLogController::class, 'searchLogs']);
});

Route::prefix('anomalies')->group(function () {
    Route::get('/', [AnomalyController::class, 'getAnomalies']);
    Route::get('{anomaly}', [AnomalyController::class, 'getAnomalyDetail']);
    Route::post('update-status', [AnomalyController::class, 'updateAnomalyStatus']);
    Route::post('execute-action', [AnomalyController::class, 'executeAction']);
});

Route::prefix('chargebacks')->group(function () {
    Route::get('/', [ChargebackController::class, 'getChargebacks']);
    Route::post('update-status', [ChargebackController::class, 'updateChargebackStatus']);
    Route::post('sync-provider', [ChargebackController::class, 'syncChargebackFromProvider']);
});
