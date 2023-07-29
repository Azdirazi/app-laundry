<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Custumer;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getCustomer(Customer $customer)
    {
        $dataCustomer = $customer->get();
        // $dataUser = $user->where('id', auth()->user()->id)->get();
        return view('customer.customers', compact('dataCustomer')); 
       
    }
    
    public function tambah()
    {
        return view('customer.customers');
    }

    public function edit(Customer $customer)
    {
        return view('customer.customers', compact('customer'));
    }

    public function saveUser(Customer $customer, Request $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $customer->create($data);
        return redirect(route('user.getUser'))->with('success', 'Data user berhasil ditambahkan');
    }
    public function deleteUser(Customer $customer)
    {
        $customer->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
        
    }
    public function updatecustomer(Customer $customer, Request $userRequest)
    {
        $data = $userRequest->all();

        if ($userRequest->password) {
            $data['password'] = bcrypt($userRequest->password);
        }
        $user->update($data);
        return redirect(route('user.getUser'))->with('success', 'Data user berhasil diubah');
    }
}