<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function getType(Type $type)
    {
        $dataType = $type->get();
        return view('type.types', compact('dataType')); 
       
    }
    
    public function tambah()
    {
        return view('type.add-types');
    }

    public function edit(Type $type)
    {
        return view('type.edit-types', compact('type'));
    }

    public function saveType(Type $type, Request $typeRequest)
    {
        $data = $typeRequest->all();
        $type->create($data);
        return redirect(route('type.getType'))->with('success', 'Data user berhasil ditambahkan');
    }
    public function deleteType(Type $type)
    {
        $type->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
        
    }
    public function updateType(Type $type, Request $typeRequest)
    {
        $data = $typeRequest->all();
        $type->update($data);
        return redirect(route('type.getType'))->with('success', 'Data user berhasil diubah');
    }
}