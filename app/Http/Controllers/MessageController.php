<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::whereNotIn('id', [$id])->get();
        $data = [
            'title' => 'Message | Tektokan',
            'user' => $user
        ];
        return view('Dashboard.messageIn.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validate = request()->validate([
                'user_id' => 'required',
                'message' => 'required',
            ]);
            $validate['by_send'] = auth()->user()->id;
            if(request()->file('file')){
                $file = request()->file('file');
                $fileName =Str::random(20). '.'  . $file->getClientOriginalExtension();
                Storage::disk('file_message')->put($fileName, file_get_contents($file));
                $validate['file'] = $fileName;
            }
            message::create($validate);
            return back()->with(['alertSuccess' => 'Successfully send message']);
        } catch (\Throwable $th) {
            return back()->with(['alertError' => 'Error' .$th]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function messageOut(){

        $id = auth()->user()->id;
        $user = User::whereNotIn('id', [$id])->get();

        $data=[
            'title' => 'Message Out',
            'user' => $user
        ];
        return view('messageOut.index', $data);
    }
    public function datatableMessageOut(){
        $id = auth()->user()->id;
        return message::where('by_send', $id)->orderBy('created_at', 'DESC')->get();
    }
    
    public function datatableMessageIn(){
        $id = auth()->user()->id;
        return message::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
    }
}
