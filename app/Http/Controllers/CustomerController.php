<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function getCustomer(Customer $customer)
    {
        $dataCustomer = $customer->get();
        // $dataUser = $user->where('id', auth()->user()->id)->get();
        return view('customer.customers', compact('dataCustomer')); 
       
    }
    
    public function tambah()
    {
        return view('customer.add-customers');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit-customers', compact('customer'));
    }

    public function saveCustomer(Customer $customer, Request $customerRequest)
    {
        $data = $customerRequest->all();
        $customer->create($data);
        return redirect(route('customer.getCustomer'))->with('success', 'Data user berhasil ditambahkan');
    }
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
        
    }
    public function updateCustomer(Customer $customer, Request $customerRequest)
    {
        $data = $customerRequest->all();
        $customer->update($data);
        return redirect(route('customer.getCustomer'))->with('success', 'Data user berhasil diubah');
    }
}