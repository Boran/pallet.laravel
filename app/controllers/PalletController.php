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
        //$user = new User();
//        echo Form::model($user, array('route' => array('user.update', $user->id)));
        //echo Form::open(array('url' => 'foo/bar',));

        $outdirweb='./';
        $this->pallet = new Pallet($outdirweb);
        return View::make('pallet', array('pallet' => $this->pallet));
    }
    public function makePallet()
    {
        // does $pallet still exist?
        $outdirweb='./';
        $this->pallet = new Pallet($outdirweb);
        //Log::info(print_r($this->pallet, true));
        $this->pallet->rollwidth_mm = Input::get('rollwidth_mm');
        Log::info('makePallet got rollwidth_mm=' .  $this->pallet->rollwidth_mm);

        //todo: have to load all form elements into $pallet submitted manually??

        $input = Input::all();
        Log::info('makePallet got ', $input,);

        //$this->pallet->drawPallet();  // todo later

        // send for pallet spec fo display again
        return View::make('pallet', array('pallet' => $this->pallet));
    }
}