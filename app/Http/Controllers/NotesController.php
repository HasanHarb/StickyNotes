<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\User;
use App\Note;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Auth::user()->persons;
        $notes = Auth::user()->notes;

        return view('notes.index' , compact('persons' , 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255|min:1',
            'body' => 'required|min:1',
        ]);

        $note = new Note();
        $note->title = $request->title;
        $note->body = $request->body;
        $note->user_id = Auth::id();
        $note->person_id = $request->person_id;
        $note->link = $this->generateRandomString();

        if($request->status == 'on'){
            $note->status = 1;
        }

        $note->save() ;
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note =  Note::where('link' , $id)->first() ;
        if($note){
            if((Auth::check() && $note->user->id == Auth::user()->id) || $note->status == 1){
                return view('notes.show', compact('note'));
            }
            else{
                return abort(404) ;
            }
        }
        else{
            return abort(404) ;
        }
    }

    public function ChangeStatus(Request $request)
    {
        $note =  Auth::user()->notes->where('id' , $request->id)->first() ;
        if($note){
            $note->status = ($request->status == "true")? 1 : 0;
            $note->save();
            return response()
            ->json(['message' => 'succsess']);
        }
        else{
            return response()
            ->json(['message' => 'warning']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::where('id' , $id)->first();
        if($note){
            if($note->user_id === Auth::user()->id){
                $note->delete();
                return \redirect()->back();
            }
            else {
                abort(404);
            }
        }else {
            abort(404);
        }
    }

    public function StorePerson(Request $request)
    {
        $person = new Person();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->user_id = Auth::id();
        $person->save();
        return redirect()->back();
    }

    function generateRandomString()  {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $digits = '1234567890';
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $letters[rand(0, strlen($letters) - 1)];
        }
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $digits[rand(0, strlen($digits) - 1)];
        }
        return $randomString;
    }

    public static function NumberOfNotes()
    {
        return Note::all()->count() ;
    }
    public static function NumberOfUsers()
    {
        return User::all()->count() ;
    }

    public function updateNote(Request $request) {

        $request->validate([
            'title' => 'required|max:255|min:1',
            'body' => 'required|min:1',
        ]);


        $note = Note::where('id' , $request->id)->first();
        if($note){
            if($note->user_id === Auth::user()->id) {

                $note->title = $request->title;

                $note->body = $request->body;

                $note->save();

                return redirect()->back();
            } else {
                abort(404);
            }
        }
        else {
            abort(404);
        }
    }
}
