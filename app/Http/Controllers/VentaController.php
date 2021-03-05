<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Venta\StoreRequest;
use App\Http\Requests\Venta\UpdateRequest;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();
        return view('admin.venta.index',compact('ventas'))
    }

    public function create()
    {
        $clients = Client::get();
        return view('admin.venta.create',compact('clients'));
    }

    public function store(StoreRequest $request)
    {
        $ventas = Venta::create($request->all());

        foreach ($request->product_id as $key => $product) {
            $results[] = array("product_id"=>$request->product_id[$key],
            "cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key], "descuento"=>$request->descuento[$key]);
        }

        $ventas->ventadetalles()->createMany($results);

        return redirect()->route('purchases.index');
    }

    public function show(Venta $venta)
    {
        return view('admin.venta.show',compact('venta'));
    }

    public function edit(Venta $venta)
    {
        $clients = Client::get();
        return view('admin.venta.edit',compact('venta','clients'));
    }

    public function update(UpdateRequest $request, Venta $venta)
    {
        $venta->update($request->all());
        return redirect()->route('ventas.index');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
