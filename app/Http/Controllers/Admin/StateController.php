<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Str;
use App\Models\State;
use App\Models\StateImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    public function index()
    {
        $states = State::paginate(5);
        return view('admin.state.index', compact('states'));
    }

    public function create()
    {
        return view('admin.state.create');
    }

    public function store(Request $request)
    {
        State::create([
            'name' => $request->name,
            'facilities' => $request->facilities,
            'price' => $request->price,
            'room' => $request->room,
            'bedroom' => $request->bedroom,
        ]);

        alert()->success('Success', 'Data berhasil ditambahkan');
        return redirect('/admin/state');
    }

    public function edit($id)
    {
        $state = State::where('id', $id)->first();
        if (!$state) {
            alert()->error('Oops', 'State tidak ditemukan');
            return redirect('/admin/state');
        }

        return view('admin.state.edit', compact('state'));
    }

    public function update(Request $request, $id)
    {
        $state = State::where('id', $id)->first();
        if (!$state) {
            alert()->error('Oops', 'State tidak ditemukan');
            return redirect('/admin/state');
        }

        $state->update([
            'name' => $request->name,
            'facilities' => $request->facilities,
            'price' => $request->price,
            'room' => $request->room,
            'bedroom' => $request->bedroom,
        ]);

        alert()->success('Success', 'Data berhasil diupdate');
        return redirect('/admin/state');
    }

    public function destroy($id)
    {
        $state = State::where('id', $id)->first();
        if (!$state) {
            alert()->error('Oops', 'State tidak ditemukan');
            return redirect('/admin/state');
        }

        $state->employees()->delete();
        $state->stateImages()->delete();
        $state->delete();

        alert()->success('Success', 'Data berhasil dihapus');
        return redirect('/admin/state');
    }

    public function imagePage($id)
    {
        $state = State::where('id', $id)->first();
        if (!$state) {
            alert()->error('Oops', 'State tidak ditemukan');
            return redirect('/admin/state');
        }

        return view('admin.state.image', compact('state'));
    }

    public function image(Request $request, $id)
    {
        $state = State::where('id', $id)->first();
        if (!$state) {
            alert()->error('Oops', 'State tidak ditemukan');
            return redirect('/admin/state');
        }

        if(count($request->images) > 5){
            alert()->error('Oops', 'Gambar tidak boleh lebih dari 5');
            return redirect("/admin/state/{$id}/image");
        }

        $rules = [
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png|max:2048',
        ];

        Validator::make($request->all(), $rules, $messages =
            [
                'images.required' => 'Harus ada gambar yang diupload',
                'images.*.mimes' => 'Gambar ke :position harus berupa jpg, png atau jpeg',
                'images.*.max' => 'Gambar ke :position maximal 2 mb',
            ])->validate();

        if ($request->hasFile('images')) {

            Storage::deleteDirectory("public/states/{$state->name}");

            $state->stateImages()->delete();
            $data = [];
            foreach ($request->file('images') as $file) {
                $image = Str::random(5) . '-' . $file->getClientOriginalName();
                Storage::putFileAs("public/states/{$state->name}/", $file, $image);
                array_push($data, [
                    'state_id' => $state->id,
                    'image' => $image,
                ]);
            }

            StateImage::insert($data);

            alert()->success('Success', 'Data berhasil diupdate');
            return redirect("/admin/state");
        }

        return redirect("/admin/state/{$state->id}/image");
    }
}
