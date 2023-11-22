<?php

declare(strict_types=1);

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Section\SectionEditScreen;
use App\Orchid\Screens\Section\SectionListScreen;
use App\Orchid\Screens\Service\ServiceEditScreen;
use App\Orchid\Screens\Service\ServiceListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\Work\WorkListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
/*Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');*/

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Users
Route::group(['prefix' => 'users'], function() {
    // Platform > System > Users
    Route::screen('/', UserListScreen::class)
        ->name('platform.systems.users')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users')));

    // Platform > System > Users > Create
    Route::screen('/create', UserEditScreen::class)
        ->name('platform.systems.users.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create')));


    // Platform > System > Users > User
    Route::screen('/{user}/edit', UserEditScreen::class)
        ->name('platform.systems.users.edit')
        ->breadcrumbs(fn (Trail $trail, $user) => $trail
            ->parent('platform.systems.users')
            ->push($user->name, route('platform.systems.users.edit', $user)));
});

// Roles
Route::group(['prefix' => 'roles'], function() {
    // Platform > System > Roles
    Route::screen('/', RoleListScreen::class)
        ->name('platform.systems.roles')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles')));

    // Platform > System > Roles > Create
    Route::screen('/create', RoleEditScreen::class)
        ->name('platform.systems.roles.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create')));

    // Platform > System > Roles > Role
    Route::screen('/{role}/edit', RoleEditScreen::class)
        ->name('platform.systems.roles.edit')
        ->breadcrumbs(fn (Trail $trail, $role) => $trail
            ->parent('platform.systems.roles')
            ->push($role->name, route('platform.systems.roles.edit', $role)));
});

// Services
Route::group(['prefix' => 'services'], function() {

    // Platform > System > Services
    Route::screen('/', ServiceListScreen::class)->name('platform.systems.services')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Services'), route('platform.systems.services')));


    // Platform > System > Services > Service > Create
    Route::screen('/create', ServiceEditScreen::class)
        ->name('platform.systems.services.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.systems.services')
            ->push(__('Create'), route('platform.systems.services.create')));

    // Platform > System > Services > Service
    Route::screen('/{service}/edit', ServiceEditScreen::class)
        ->name('platform.systems.services.edit')
        ->breadcrumbs(fn (Trail $trail, $service) => $trail
            ->parent('platform.systems.services')
            ->push($service->name, route('platform.systems.services.edit', $service)));

});

// Sections
Route::group(['prefix' => 'sections'], function() {

    // Platform > System > Sections
    Route::screen('/', SectionListScreen::class)->name('platform.systems.sections')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Sections'), route('platform.systems.sections')));

    // Platform > System > Sections > Section
    Route::screen('/{section}/edit', SectionEditScreen::class)
        ->name('platform.systems.sections.edit')
        ->breadcrumbs(fn (Trail $trail, $section) => $trail
            ->parent('platform.systems.sections')
            ->push($section->name, route('platform.systems.services.edit', $section)));;

});

// Sections
Route::group(['prefix' => 'work'], function() {

    // Platform > System > Works
    Route::screen('/', WorkListScreen::class)->name('platform.systems.works')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Works'), route('platform.systems.works')));
});
