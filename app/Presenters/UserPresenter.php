<?php namespace Modelbook\Presenters;

use Illuminate\Support\Facades\Auth;
use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    /**
     * Generates current user Full name and Sure name
     * @return string
     */
    public function fullName()
    {
    return Auth::user()->user_firstname . ' ' . Auth::user()->user_lastname;
    }

    public function accountAge()
    {
    return Auth::user()->created_at->diffForHumans();
    }

}