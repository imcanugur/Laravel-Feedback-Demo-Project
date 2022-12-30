<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        if(request()->ajax()) {
        return datatables()->of(Feedback::select('*'))
            ->addColumn('action', '<a style="margin-right: 10px;" href="javascript:void(0)" data-toggle="tooltip" onClick="view({{ $id }})" data-original-title="show" class="btn btn-success"> Detay </a>')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('feedback');
    }

    public function view(Request $request) {
        if (auth()->guard('admin')->check()) {
            $feedback  = Feedback::where(array('id' => $request->id))->first();
            return Response()->json($feedback);
        } else {
            return view('login');
        }
    }

    public function addFeedbackIndex() {
        return view('login');
    }

    public function addFeedback(Request $request){

        $this->validate($request, [
            'name' => 'required|min:4|max:191',
            'mail' => 'required|min:4|max:191',
            'message' => 'required|min:10',
        ]);

        try {
            $feedback = new Feedback();
            $feedback->name = $request->name;
            $feedback->mail = $request->mail;
            $feedback->message = $request->message;
            $feedback->save();
            return redirect()->back()->with('success', 'Kayıt Başarıyla Gerçekleştirdi.');
        }
        catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kayıt Gerçekleşirken Hata İle Karşılandı. Lütfen Tekrar Deneyin.');
        }
    }
}
