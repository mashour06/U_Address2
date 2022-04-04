<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['PreventBackHistory', 'auth']);
    }

    public function userHome() {
        return view('user_dashboard.userHome');
    }

    public function userAddAddress() {
        return view('user_dashboard.addAddress');
    }

    public function postUserAddedAddress(Request $request) {
        $request->validate([
            'address_line1' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip' => 'required',
            'country' => 'required',
        ]);

        auth()->user()->addresses()->create($request->all());

        return redirect()->back()->with('message', 'Successfully created address');
    }

    public function userShowAddresses() {
        // get all addresses of current logged in user
        $addresses = Address::where('user_id', Auth::id())->get();
        return view('user_dashboard.showAddresses', compact('addresses'));
    }

    public function userUpdateAddress($addr_id) {
        $address = Address::find($addr_id);
        return view('user_dashboard.updateAddress', compact('address'));
    }

    public function userPostUpdatedAddress(Request $request, $id) {

        $request->validate([
            'address_line1' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip' => 'required',
            'country' => 'required',
        ]);

        Address::where('id', $id)->update($request->all());

        return redirect()->back()->with('message','Address Updated Successfully');
    }

    public function userDeleteAddress($id) {
        $address = Address::find($id);
        $address->delete();
        return redirect()->back()->with('message', 'Address Deleted Successfully.');
    }
}
