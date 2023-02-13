<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phonebook;

class PhonebookController extends Controller
{
    public function index(){
        $data = Phonebook::all();
        return view('phonebook.index',['phonebooks'=>$data]);
    }
}
