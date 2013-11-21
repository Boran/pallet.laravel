<?php

class PalletController extends BaseController {
    protected $pallet;

    /*
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        //$name = Input::get('name');
        $user = new User();
//        echo Form::model($user, array('route' => array('user.update', $user->id)));

        echo Form::open(array('url' => 'foo/bar',));

        $outdirweb='./';
        $this->pallet = new Pallet($outdirweb);

        return View::make('pallet', array('pallet' => $this->pallet));
    }
    public function makePallet()
    {
        $this->pallet->makePallet();
    }
}