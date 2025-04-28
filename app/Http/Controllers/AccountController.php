<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AccountController extends Controller
{
    public function accounts()
    {
        return view('admin.account');
    }

    public function createAccount()
    {
        return view('admin.account-create');
    }

    public function editAccount($id)
    {
        $account = User::findOrFail($id);
        return view('admin.account-edit', compact('account'));
    }

    public function accountList()
    {
        $data = User::query();


        return DataTables::of($data)
            ->addColumn('action', function($row) {
                $editUrl = route('admin.accounts.edit', $row->id);
                $deleteUrl = route('admin.accounts.delete', $row->id);
                $csrf = csrf_field();
                $method = method_field('DELETE');
                return "
                    <a href='{$editUrl}' class='bg-blue-500 text-white px-3 py-1 rounded text-xs'>Edit</a>
                    <form action='{$deleteUrl}' method='POST' style='display:inline;' onsubmit='return confirm(\"Are you sure?\")'>
                        {$csrf}
                        {$method}
                        <button type='submit' class='bg-red-500 text-white px-3 py-1 rounded text-xs ml-2'>Delete</button>
                    </form>
                ";
            })
            ->rawColumns(['action']) // important to render HTML
            ->make(true);
    }

    public function storeAccount(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.accounts')->with('success', 'Account created successfully.');
    }

    public function updateAccount(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        $account = User::findOrFail($id);
        $account->name = $validatedData['name'];
        $account->email = $validatedData['email'];
        if ($request->filled('password')) {
            $account->password = Hash::make($validatedData['password']);
        }
        $account->save();

        return redirect()->route('admin.accounts')->with('success', 'Account updated successfully.');
    }


    public function destroyAccount($id)
    {
        $account = User::findOrFail($id);
        $account->delete();

        return redirect()->route('admin.accounts')->with('success', 'Account deleted successfully.');
    }
}
