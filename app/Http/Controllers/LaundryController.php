<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\User;
use App\Models\Customer;
use App\Models\Type;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
     
    public function getLaundry(Laundry $laundry)
    {
        $dataLaundry = Laundry::with('Type', 'Costumer')->get();
        return view('laundry.laundries', compact('dataLaundry')); 
       
    }
    
    public function tambah()
    {  
          $dataCustomer = Customer::get();
          $dataType = Type::get();
          return view('laundry.add-laundries', compact('dataCustomer', 'dataType' ));
    }

    public function edit(Laundry $laundry)
    {
        return view('laundry.edit-laundries', compact('laundry'));
    }

    public function saveLaundry(Laundry $laundry, Request $laundryRequest)
    {
        $data = $laundryRequest->all();
        // ambil data type
        $dataType =Type::find($data['types_id']);
        $data['total_pay']=$dataType['rates'] * $data['heavy'];
        $data['proces'] = "PENDING";
        //membuat perhitungan bayar
       
        $laundry->create($data);
        return redirect(route('laundry.getLaundry'))->with('success', 'Data user berhasil ditambahkan');
    }
    public function deleteLaundry(Laundry $laundry)
    {
        $laundry->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
        
    }
    public function updateLaundry(Laundry $laundry, Request $laundryRequest)
    {
        $data = $laundryRequest->all();
        $laundry->update($data);
        return redirect(route('laundry.getLaundry'))->with('success', 'Data user berhasil diubah');
    }
    
}
