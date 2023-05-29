<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        $users = new User();
        $books = new Book();
        return view('loans.create', compact('users','books'));
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
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date',
            
        ]);
    
        $loan = new Loan();
        $loan->book_id = $request->input('book_id');
        $loan->user_id = $request->input('user_id');
        $loan->due_date = $request->input('due_date');
        $loan->borrowed_at = $request->input('borrowed_at');
        $loan->status = 'Emprestado';
        $loan->save();
        
    
        return redirect()->route('loans.index')->with('success', 'Empréstimo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        return view('loans.edit', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'due_date' => 'required|date',
            'borrowed_at' => 'required|date',
            'status' => 'required|in:Emprestado,Atrasado,Devolvido',
        ]);

        $loan->due_date = $request->input('due_date');
        $loan->borrowed_at = $request->input('borrowed_at');
        $loan->status = $request->input('status');
        $loan->save();

        return redirect()->route('loans.index')->with('success', 'Empréstimo atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')->with('success', 'Empréstimo excluído com sucesso.');
    }

    public function markAsDelayed(Loan $loan)
        {
            $loan->status = 'Atrasado';
            $loan->save();

            return redirect()->route('loans.index')->with('success', 'Empréstimo marcado como atrasado!');
        }
    public function markAsReturned(Loan $loan)
    {
        $loan->status = 'Devolvido';
        $loan->save();

        return redirect()->route('loans.index')->with('success', 'Empréstimo marcado como devolvido!');
    }   
 }
