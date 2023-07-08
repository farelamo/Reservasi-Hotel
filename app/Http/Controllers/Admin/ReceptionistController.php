<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReceptionistRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ReceptionistController extends Controller
{

    public function index()
    {
        $receptionists = User::select('id', 'name', 'email')
            ->where('role', 'receptionist')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('admin.receptionist.index', compact('receptionists'));
    }

    public function create()
    {
        return view('admin.receptionist.create');
    }

    public function store(ReceptionistRequest $request)
    {
        $rules = [
            'password' => 'required|max:8',
            'email' => 'required|email|unique:users,email',
        ];

        Validator::make($request->all(), $rules, $messages =
            [
                'email.required' => 'email harus diisi',
                'email.email' => 'format email salah',
                'email.unique' => 'email sudah digunakan user lain',
                'password.required' => 'password harus diisi',
                'password.max' => 'maximal password 8 karakter',
            ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'receptionist',
            'password' => bcrypt($request->password),
        ]);

        alert()->success('Mantap', 'Data berhasil ditambahkan');
        return redirect('/admin/receptionist');
    }

    public function edit($id)
    {
        $receptionist = User::where('id', $id)->first();
        if (!$receptionist) {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        if ($receptionist->role != 'receptionist') {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        return view('admin.receptionist.edit', compact('receptionist'));
    }

    public function update(ReceptionistRequest $request, $id)
    {
        $receptionist = User::where('id', $id)->first();
        if (!$receptionist) {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        if ($receptionist->role != 'receptionist') {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        $updateData = [
            'name' => $request->name,
            'role' => 'receptionist',
        ];

        if ($request->email):

            $rules = [
                'email' => 'required|email|unique:users,email',
            ];

            Validator::make($request->all(), $rules, $messages =
                [
                    'email.required' => 'email harus diisi',
                    'email.email' => 'format email salah',
                    'email.unique' => 'email sudah digunakan user lain',
                ])->validate();

            $updateData['email'] = $request->email;
        endif;

        if ($request->password):

            $rules = [
                'password' => 'required|max:8',
            ];

            Validator::make($request->all(), $rules, $messages =
                [
                    'password.required' => 'password harus diisi',
                    'password.max' => 'maximal password 8 karakter',
                ])->validate();

            $updateData['password'] = bcrypt($request->password);
        endif;

        $receptionist->update($updateData);

        alert()->success('Mantap', 'Data berhasil diupdate');
        return redirect('/admin/receptionist');
    }

    public function destroy($id)
    {
        $receptionist = User::where('id', $id)->first();
        if (!$receptionist) {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        if ($receptionist->role != 'receptionist') {
            alert()->error('Maaf', 'Data tidak ditemukan');
            return redirect('/admin/receptionist');
        }

        $receptionist->delete();

        alert()->success('Mantap', 'Data berhasil dihapus');
        return redirect('/admin/receptionist');
    }
}
