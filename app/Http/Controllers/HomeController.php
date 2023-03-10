<?php

namespace App\Http\Controllers;

use App\Models\petitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function product()
    {
        $products = petitem::orderBy('id','desc')->get();
        return view('product',compact('products'));
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }
    public function AddPetitems()
    {
        return view('Admin.AddPetItems');
    }
    public function addItems(Request $req)
    {

        $req->validate([
            'item' => 'required',
            'price' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);
        $itemTable = new petitem();
        $itemTable->item = $req->item;
        $itemTable->Price = $req->price;
        $itemTable->type = $req->type;
        $image = $req->file('image');
        $foodimage = $image->getClientOriginalName();
        $path = $image->move('public/images/', $foodimage);
        $itemTable->foodimg = $path;
        $itemTable->save();
        return back();
    }
    public function Listofitems()
    {
        $data = petitem::all();
        return view('Admin.Listofpetitems', compact('data'));
    }
    public function deleteitem($id)
    {
        petitem::find($id)->delete();
        return back();
    }
    public function edititem($id)
    {
        $edit = petitem::find($id);
        return view('Admin.edititem', compact('edit'));
    }
    public function edited(Request $req)
    {
        $req->validate([
            'item' => 'required',
            'price' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);
        $itemTable = petitem::find($req->id);
        $itemTable->item = $req->item;
        $itemTable->Price = $req->price;
        $itemTable->type = $req->type;
        $image = $req->file('image');
        $foodimage = $image->getClientOriginalName();
        $path = $image->move('public/images/', $foodimage);
        $itemTable->foodimg = $path;
        $itemTable->save();
        return redirect()->route('Listofitems');
    }



}