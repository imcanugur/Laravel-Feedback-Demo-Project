<?php

namespace App\Http\Controllers;


use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Api extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return response()->json(['count-feedback' => count($feedback), 'all-feedback'=> $feedback]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:191',
            'mail' => 'required|min:4|max:191',
            'message' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            try {
                $feedback = new Feedback();
                $feedback->name = $request->name;
                $feedback->mail = $request->mail;
                $feedback->message = $request->message;
                $feedback->save();
                return response()->json(['message'=>'Kayıt İşlemi Başarılı', 'new-feedback' => $feedback]);
            } catch (\Throwable $th) {
                return response()->json(['message'=>'Kayıt İşlemi Başarısız']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        return response()->json(['show-feedback' => $feedback]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:191',
            'mail' => 'required|min:4|max:191',
            'message' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            try {
                $feedback = Feedback::findOrFail($request->id);
                $feedback->name = $request->name;
                $feedback->mail = $request->mail;
                $feedback->message = $request->message;
                $feedback->save();
                return response()->json(['message'=>'Güncelleme İşlemi Başarılı', 'update-feedback-'.$id => $feedback]);
            } catch (\Throwable $th) {
                return response()->json(['message'=>'Güncelleme İşlemi Başarısız']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Feedback::destroy($id);
            return response()->json(['message'=>'Silme İşlemi Başarılı']);
        } catch (\Throwable $th) {
            return response()->json(['message'=>'Silme İşlemi Başarısız']);
        }
    }
}


