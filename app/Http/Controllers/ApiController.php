<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function accaunts(Request $request)
    {
        return view('accaunts');
    }
    public function accauntsAA(Request $request)
    {
        return view('accauntsAA');
    }
    public function accauntsAstellia(Request $request)
    {
        return view('accauntsAstellia');
    }
	public function accauntsBDO(Request $request)
    {
        return view('accauntsBDO');
    }
    public function accauntsLA(Request $request)
    {
        return view('accauntsLA');
    }
    public function accauntsWoW(Request $request)
    {
        return view('accauntsWoW');
    }
	public function ArcheAge(Request $request)
    {
        return view('ArcheAge');
    }
    public function Astellia(Request $request)
    {
        return view('Astellia');
    }
    public function BDO(Request $request)
    {
        return view('BDO');
    }
	 public function gold(Request $request)
    {
        return view('gold');
    }
	 public function help(Request $request)
    {
        return view('help');
    }
	 public function helpAstellia(Request $request)
    {
        return view('helpAstellia');
    } 
	public function helpWoW(Request $request)
    {
        return view('helpWoW');
    }
	 public function index(Request $request)
    {
        return view('index');
    }
	 public function items(Request $request)
    {
        return view('items');
    }
	 public function itemsAA(Request $request)
    {
        return view('itemsAA');
    }
	 public function itemsBDO(Request $request)
    {
        return view('itemsBDO');
    }
	 public function itemsLA(Request $request)
    {
        return view('itemsLA');
    }
	 public function korzina(Request $request)
    {
        return view('korzina');
    }
	 public function LA(Request $request)
    {
        return view('LA');
    }
	 public function WoW(Request $request)
    {
        return view('WoW');
    }
}
