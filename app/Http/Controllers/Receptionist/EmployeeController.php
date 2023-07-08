<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Investor;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index($investor_id)
    {
        $investor = Investor::where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'data tidak ditemukan');
            return redirect('/receptionist/investor');
        }

        $employees = Employee::where('investor_id', $investor_id)->paginate(5);
        return view('receptionist.employee.index', compact('employees', 'investor'));
    }

    public function create($investor_id)
    {
        $investor = Investor::where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'data tidak ditemukan');
            return redirect('/receptionist/investor');
        }

        $states = State::select('id', 'name')->get();

        return view('receptionist.employee.create', compact('investor', 'states'));
    }

    public function store(Request $request, $investor_id)
    {
        $investor = Investor::select('id')->where('id', $investor_id)->first();
        if (!$investor) {
            alert()->success('Success', 'Data berhasil ditambahkan');
            return redirect('/receptionist/investor/' . $investor_id . '/employee');
        }

        Employee::create([
            'investor_id' => $investor_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'passport_number' => $request->passport_number,
            'country' => $request->country,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        alert()->success('Success', 'Data berhasil ditambahkan');
        return redirect('/receptionist/investor/' . $investor_id . '/employee');
    }

    public function edit($investor_id, $id)
    {
        $investor = Investor::select('id')->where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor/');
        }

        $employee = Employee::where('id', $id)->first();
        if (!$employee) {

            alert()->error('Oops', 'Karyawan tidak ditemukan');
            return redirect('/receptionist/investor/' . $investor_id . '/employee');
        }

        $states = State::select('id', 'name')->get();

        return view('receptionist.employee.edit', compact('employee', 'states', 'investor_id'));
    }

    public function update(Request $request, $investor_id, $id)
    {
        $investor = Investor::select('id')->where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor/');
        }

        $employee = Employee::where('id', $id)->first();
        if (!$employee) {
            alert()->error('Oops', 'Karyawan tidak ditemukan');
            return redirect('/receptionist/investor/' . $investor_id . '/employee');
        }

        $employee->update([
            'state_id' => $request->state_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'passport_number' => $request->passport_number,
            'country' => $request->country,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        alert()->success('Success', 'Data berhasil diupdate');
        return redirect('/receptionist/investor/' . $investor_id . '/employee');
    }

    public function destroy($investor_id, $id)
    {
        $investor = Investor::select('id')->where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor/');
        }

        $employee = Employee::where('id', $id)->first();
        if (!$employee) {
            alert()->error('Oops', 'Employee tidak ditemukan');
            return redirect('/receptionist/investor/' . $investor_id . '/employee');
        }

        $employee->delete();

        if (Storage::disk('local')->exists("public/{$employee->name}/vaccine1/{$employee->vaccine1}")) {
            Storage::delete("public/{$employee->name}/vaccine1/{$employee->vaccine1}");
        }
        if (Storage::disk('local')->exists("public/{$employee->name}/vaccine2/{$employee->vaccine2}")) {
            Storage::delete("public/{$employee->name}/vaccine2/{$employee->vaccine2}");
        }
        if (Storage::disk('local')->exists("public/{$employee->name}/vaccine3/{$employee->vaccine3}")) {
            Storage::delete("public/{$employee->name}/vaccine3/{$employee->vaccine3}");
        }

        alert()->success('Success', 'Data berhasil dihapus');
        return redirect('/receptionist/investor/' . $investor_id . '/employee');
    }

    public function vaccinePage($investor_id, $id)
    {
        $investor = Investor::select('id')->where('id', $investor_id)->first();
        if (!$investor) {
            alert()->error('Oops', 'Investor tidak ditemukan');
            return redirect('/receptionist/investor/');
        }

        $employee = Employee::where('id', $id)->first();
        if (!$employee) {
            alert()->error('Oops', 'Employee tidak ditemukan');
            return redirect('/receptionist/investor/' . $investor_id . '/employee');
        }

        return view('receptionist.employee.vaccine', compact('employee', 'investor_id'));
    }

    public function handleVaccine($file, $investor_name, $name, &$updateData, $employee_name)
    {
        $image = Str::random(5) . '-' . $file->getClientOriginalName();
        Storage::putFileAs("public/{$employee_name}/{$name}", $file, $image);

        return $updateData[$name] = $image;
    }

    public function vaccine(Request $request, $investor_id, $id)
    {
        $data = Employee::where('id', $id)->first();

        $updateData = [];

        if ($request->vaccine1):

            $this->handleVaccine($request->vaccine1, $data->investor->company_name, 'vaccine1', $updateData, $data->name);
            if (Storage::disk('local')->exists("public/{$data->name}/vaccine1/{$data->vaccine1}")) {
                Storage::delete("public/{$data->name}/vaccine1/{$data->vaccine1}");
            }
        endif;

        if ($request->vaccine2):

            $this->handleVaccine($request->vaccine2, $data->investor->company_name, 'vaccine2', $updateData, $data->name);
            if (Storage::disk('local')->exists("public/{$data->name}/vaccine2/{$data->vaccine2}")) {
                Storage::delete("public/{$data->name}/vaccine2/{$data->vaccine2}");
            }
        endif;

        if ($request->vaccine3):

            $this->handleVaccine($request->vaccine3, $data->investor->company_name, 'vaccine3', $updateData, $data->name);
            if (Storage::disk('local')->exists("public/{$data->name}/vaccine3/{$data->vaccine3}")) {
                Storage::delete("public/{$data->name}/vaccine3/{$data->vaccine3}");
            }
        endif;

        $data->update($updateData);

        alert()->success('Success', 'Data berhasil diupdate');
        return redirect('/receptionist/investor/' . $investor_id . '/employee');
    }
}
