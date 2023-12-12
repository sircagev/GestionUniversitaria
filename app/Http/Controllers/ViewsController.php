<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ViewsController extends Controller
{
    public function landingView(){
        return view("landingpage");
    }

    public function loginView(){
        return view("auth.login");
    }

    public function signUpView(){
        return view("auth.signup");
    }

    public function dashboardView(){
        return view("dashboard");
    }

    public function professorView(){
        return view("pages.professors");
    }

    public function studentView(){
        return view("pages.students");
    }

    public function courseView(){
        return view("pages.courses");
    }

    public function registrationView(){
        return view("pages.registration");
    }

    public function settingsView(){
        return view("pages.settings");
    }
}
