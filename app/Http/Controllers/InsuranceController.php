<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use  App\Models\Customer;
use  App\Models\Policy;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function create_customer()
    {
        return view('customerpolicy');
    }

    public function insert_customer(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->place = $request->place;
        $customer->save();
        return redirect("/listofcust")->with('success', 'Customer inserted');
    }

    public function user_login()
    {
        return view('userlogin');
    }

    public function do_login(Request $request)
    {
        $userdata = ['email' => $request->email, 'password' => $request->password];

        if (auth::attempt($userdata)) {
            return redirect('home');
        } else {
            return "Invalid user";
        }
    }

    public function create_policy()
    {
        $custdrop = Customer::all();
        return view('policy', compact('custdrop'));
    }

    public function policy_insert(Request $request)
    {
        $policy = new Policy();
        $policy->vehicle_name = $request->vehicle_name;
        $policy->customer_id = $request->customer_id;
        $policy->registration_number = $request->registration_number;
        $policy->policy_amount = $request->policy_amount;
        $policy->policy_number = $request->policy_number;
        $policy->issued_date = $request->issued_date;
        $policy->expiry_date = $request->expiry_date;
        $policy->save();
        return redirect("/create_policy")->with('success', 'Policy inserted');
    }

    public function home()
    {
        $dat = Carbon::now()->addDays(30);
        $nowday = Carbon::now();
        $customerexp = DB::table('policies')
            ->join('customers', 'customers.id', '=', 'policies.customer_id')
            ->select('customers.id', 'customers.first_name', 'customers.phone_number', 'customers.place', 'policies.vehicle_name', 'policies.registration_number', 'policies.policy_amount', 'policies.issued_date', 'policies.expiry_date', 'policies.id', 'policies.customer_id', 'customers.deleted_at', 'policies.deleted_at')
            ->whereBetween('expiry_date', [$nowday, $dat])
            ->whereNull('policies.deleted_at')
            ->orderBy('expiry_date', 'asc')
            ->paginate(8);

        $date = Carbon::now();
        $customer = DB::table('policies')
            ->join('customers', 'customers.id', '=', 'policies.customer_id')
            ->select('customers.id', 'customers.first_name', 'customers.phone_number', 'customers.place', 'policies.vehicle_name', 'policies.registration_number', 'policies.policy_amount', 'policies.issued_date', 'policies.expiry_date', 'policies.id', 'policies.customer_id', 'customers.deleted_at', 'policies.deleted_at')
            ->where('expiry_date', '<=', $date)
            ->whereNull('policies.deleted_at')
            ->orderBy('expiry_date', 'asc')
            ->paginate(8);
        return view('home', compact('customer'), compact('customerexp'));
    }

    public function listofcust()
    {
        $customer = Customer::all();
        $customer = DB::table('customers')
            ->orderBy('created_at', 'desc')
            ->whereNull('deleted_at')
            ->paginate(15);

        return view('listofcust', compact('customer'));
    }

    public function allpolicy()
    {
        $customer = DB::table('policies')
            ->join('customers', 'customers.id', '=', 'policies.customer_id')
            ->select('customers.id', 'customers.first_name', 'customers.phone_number', 'customers.place', 'policies.vehicle_name', 'policies.registration_number', 'policies.policy_amount', 'policies.issued_date', 'policies.expiry_date', 'policies.id', 'policies.customer_id', 'customers.deleted_at', 'policies.deleted_at')
            ->whereNull('policies.deleted_at')
            ->orderBy('expiry_date', 'asc')
            ->paginate(15);
        return view('allpolicy', compact('customer'));
    }


    // public function exp()
    // {

    //     $dat = Carbon::now()->addDays(10);
    //     $nowday = Carbon::now();
    //     $customer = Policy::with('customer')->whereHas('customer')
    //         ->whereBetween('expiry_date', [$nowday, $dat])
    //         ->orderBy('expiry_date', 'asc')
    //         ->paginate(5)
    //         ->get();
    //     return view('exp', compact('customer'));
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function policy_delete(Request $request)
    {
        $policy = Policy::find($request->id);
        $policy->delete();
        return "success";
    }

    public function customer_delete(Request $request)
    {
        $custdelete = Customer::find($request->id);
        $custdelete->delete();
        return "success";
    }

    public function allpolicy_edit($id)
    {
        $policy = Policy::find($id);
        return view('allpolicyupdate', compact('policy'));
    }

    public function allpolicy_update(Request $request)
    {
        $policy = Policy::find($request->id);
        $policy->vehicle_name = $request->vehicle_name;
        $policy->customer_id = $request->customer_id;
        $policy->registration_number = $request->registration_number;
        $policy->policy_amount = $request->policy_amount;
        $policy->policy_number = $request->policy_number;
        $policy->issued_date = $request->issued_date;
        $policy->expiry_date = $request->expiry_date;
        $policy->save();
        return Redirect::route('admin.allpolicy.index')->with('success', 'Policy Updated');
    }

    public function allpolicy_home_edit($id)
    {
        $policy = Policy::find($id);

        return view('allpolicyhomeupdate', compact('policy'));
    }

    public function policy_home_update(Request $request)
    {
        $policy = Policy::find($request->id);
        $policy->vehicle_name = $request->vehicle_name;
        $policy->customer_id = $request->customer_id;
        $policy->registration_number = $request->registration_number;
        $policy->policy_amount = $request->policy_amount;
        $policy->policy_number = $request->policy_number;
        $policy->issued_date = $request->issued_date;
        $policy->expiry_date = $request->expiry_date;
        $policy->save();
        return redirect("/home")->with('success', 'Policy Updated');
    }

    public function search(Request $request)
    {
        $text = $request->input('text');
        // $customer = Customer::where('first_name', 'like', '%' . $text . '%')->orWhere('phone_number', 'like', '%' . $text . '%')->get();
        $customer = Policy::with('customer')->whereHas('customer', function ($q) use ($text) {
            $q->where('first_name', 'like', '%' . $text . '%')->orWhere('phone_number', 'like', '%' . $text . '%')->orWhere('place', 'like', '%' . $text . '%')->orWhere('vehicle_name', 'like', '%' . $text . '%');
        })->get();
        return view('search', compact('customer'));
    }

    public function customer_edit($id)
    {
        $cust = Customer::find($id);
        return view('customerupdate', compact('cust'));
    }

    public function customer_update(Request $request)
    {
        $cust = Customer::find($request->id);
        $cust->first_name = $request->first_name;
        $cust->phone_number = $request->phone_number;
        $cust->address = $request->address;
        $cust->place = $request->place;
        $cust->save();
        return redirect("/listofcust")->with('success', 'Customer Updated');
    }
}
