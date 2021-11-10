<?php

namespace App\Http\Controllers;

use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShippingController extends Controller
{
    public function index()
    {
        return view('backend.shipping.add-shipping');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|unique:shippings',
            'price' => 'required',
            'status'=> 'required',
        ]);

        $shipping = new Shipping();
        $shipping->name       = $request->name;
        $shipping->price      = $request->price;
        $shipping->status     = $request->status;
        $shipping->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        $shipping = Shipping::all();
        return view('backend.shipping.manage-shipping',compact('shipping'));
    }

    public function edit($id)
    {
        $shipping = Shipping::find($id);
        return view('backend.shipping.edit-shipping',compact('shipping'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'status'=> 'required',
            'name'=>'required'
        ]);
        $shipping = Shipping::find($request->id);

        $updates = array(
           'name'       => $request->name,
           'price'      => $request->price,
           'status'     => $request->status,
        );

        $shipping->update($updates);

        return redirect('admin/shipping/manage-shipping')->with('success','Updated Successfully');
    }

    public function delete(Request $request)
    {

        $shipping = Shipping::find($request->id);
        $shipping->delete();

        return back()->with('success', 'Information deleted successfully');
    }
}
