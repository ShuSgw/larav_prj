<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use App\Models\Test;
use Mockery\Matcher\Contains;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // contact form showing
        $vals = ContactForm::all();
        return view('contacts.create', compact("vals"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return view('contacts.create');

        // Test::create([
        //     'text' => $request->formAtt,
        // ]);
        // モデル側の$fillableという現存変数に
        // 配列としてデータベースの列と同じ名前のキーを入れる必要がある
        // 結果この時点でのキーはデータベースの列と同じ名前になる


        // tinkerベースで
        // $test = new Test;
        // $test->text = $request->formAtt;
        // $test->save();

        // モデルのcreate関数ベース
        // Test::create([
        //     'text' => $request->formAtt,
        // ]);

        // $table->string('name');
        // $table->string('email');
        // $table->string('text');

        // valsに配列を入れて
        // $vals = Test::all();
        // return view('test.test', compact("vals"));


        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
        ]);

        // dd($request);

        // contact form showing
        $vals = ContactForm::select('name', 'created_at')->get();
        // return to_route('contacts.create', compact('vals'));

        // return to_route('test.test', compact("vals"));
        return to_route('create', compact('vals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ms = ContactForm::find($id);

        return view('contacts.show', compact('ms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ms = ContactForm::find($id);

        return view('contacts.modify', compact('ms'));
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
        //
    }
}