<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Models\AgencyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function getAllAgency()
    {
       $agencies = AgencyModel::all();
       return view('agencies.home', compact('agencies'));
    }

    public function search(Request $request)
    {
        $key = $request->search;
        $agency = DB::table('agencies')->where('agencyName', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyPhone', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyEmail', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyAddress', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyManager', 'LIKE', '%' . $key . '%')->get();
        $existAgency = DB::table('agencies')->where('agencyName', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyPhone', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyEmail', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyAddress', 'LIKE', '%' . $key . '%')
            ->orWhere('agencyManager', 'LIKE', '%' . $key . '%')->exists();
        if (!$existAgency) {
            $request->session()->flash('search-fail', 'Không tìm thấy đại lý nào');
        }
        return view('agencies.search', compact('agency'));
    }

    public function findById($id)
    {
        return AgencyModel::find($id);
    }

    public function showFormAddAgency()
    {
        return view('agencies.add');
    }

    public function addAgency(AddRequest $request)
    {
        $agency = new AgencyModel();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('show');
    }

    public function showFormEditAgency($id)
    {
        $agency = $this->findById($id);
        return view('agencies.edit', compact('agency'));
    }

    public function editAgency(Request $request)
    {
        $agency = $this->findById($request->id);
        $agency->agencyName = $request->name_agency;
        $agency->agencyPhone = $request->phone;
        $agency->agencyEmail = $request->email;
        $agency->agencyAddress = $request->address;
        $agency->agencyManager = $request->name_manager;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('show');
    }

    public function deleteAgency($id)
    {
        AgencyModel::destroy($id);
        return redirect()->route('show');
    }
}
