<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['PreventBackHistory', 'auth:admin']);
    }

    public function adminHome() {
        return view('admin.adminHome');
    }

    // show all users page
    public function showUsers() {
        $users = User::all();
        $current_user_id = auth()->user()->id;
        return view('admin.showUsers', compact('users', 'current_user_id'));
    }

    // show "update user" form
    public function updateUser($id) {
        $user = User::find($id);
        return view('admin.updateUser', compact('user'));
    }

    public function addUser() {
        return view('admin.addUser');
    }

    // update user in db
    public function postUpdatedUser(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        User::find($id)->update($request->except('_token'));

        return redirect()->back()->with('message','User Updated Successfully');
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully.');
    }

    public function postAddedUser(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $fields = $request->all();
        $fields['password'] = Hash::make($request->password);
        User::create($fields);
        return redirect()->back()->with('message','User Created Successfully');
    }

    public function showAddresses() {
        $addresses = Address::all();
        return view('admin.showAddresses', compact('addresses'));
    }

    public function updateAddress($addr_id) {
        $address = Address::find($addr_id);
        return view('admin.updateAddress', compact('address'));
    }

    public function postUpdatedAddress(Request $request, $id) {

        $request->validate([
            'address_line1' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip' => 'required',
            'country' => 'required',

        ]);

        Address::find($id)->update($request->all());

        return redirect()->back()->with('message','Address Updated Successfully');
    }

    public function deleteAddress($id) {
        $address = Address::find($id);
        $address->delete();
        return redirect()->back()->with('message', 'Address Deleted Successfully.');
    }
}
