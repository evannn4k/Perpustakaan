<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\BookController as AdminBook;
use App\Http\Controllers\Admin\AuthorController as AdminAuthor;
use App\Http\Controllers\Admin\CategoryController as AdminCategory;
use App\Http\Controllers\Admin\HistoryController as AdminHistory;
use App\Http\Controllers\Admin\LoanController as AdminLoan;

use App\Http\Controllers\User\PageController as UserPage;
use App\Http\Controllers\Guest\PageController as GuestPage;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)
    ->group(function () {
        Route::get("/login", "login")->name("login")->middleware("guest");
        Route::post("/verify", "verify")->name('verify')->middleware("guest");

        Route::get("/register", "register")->name("register");

        Route::get("/logout", "logout")->name("logout");
    });

Route::controller(GuestPage::class)
    ->group(function () {
        Route::get("/", "index")->name("index");
    });

Route::prefix("admin")
    ->name("admin.")
    ->middleware("auth:admin")
    ->group(function () {

        Route::prefix("dashboard")
            ->name("dashboard.")
            ->controller(AdminDashboard::class)
            ->group(function () {
                Route::get("/", "dashboard")->name("index");
            });

        Route::prefix("user")
            ->name("user.")
            ->controller(AdminUser::class)
            ->group(function () {
                Route::get("/", "user")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
            });

        Route::prefix("book")
            ->name("book.")
            ->controller(AdminBook::class)
            ->group(function () {
                Route::get("/", "book")->name("index");
            });

        Route::prefix("author")
            ->name("author.")
            ->controller(AdminAuthor::class)
            ->group(function () {
                Route::get("/", "author")->name("index");
            });

        Route::prefix("category")
            ->name("category.")
            ->controller(AdminCategory::class)
            ->group(function () {
                Route::get("/", "category")->name("index");
            });

        Route::prefix("loan")
            ->name("loan.")
            ->controller(AdminLoan::class)
            ->group(function () {
                Route::get("/", "loan")->name("index");
            });

        Route::prefix("history")
            ->name("history.")
            ->controller(AdminHistory::class)
            ->group(function () {
                Route::get("/", "history")->name("index");
            });

            
    });

Route::prefix("user")
    ->name("user.")
    ->middleware("auth:user")
    ->group(function () {
        Route::controller(UserPage::class)
            ->group(function () {
                Route::get("/dashboard", "dashboard")->name("dashboard");
            });
    });
