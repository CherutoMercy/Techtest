<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Onboarding;

class OnboardingController extends Controller
{
public function highchart() {
		return view::make('welcome');
	}
}
