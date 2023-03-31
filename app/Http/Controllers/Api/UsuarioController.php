<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuario;
use \App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use TheSeer\Tokenizer\Exception;

class UsuarioController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $usuarios = Usuario::all();
            return response()->json([
                'Dados' => $usuarios
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Erro' => 'Houve um erro ao colher os dados',
                'Mensagem' => $e->getMessage()
            ], 500);
        }
    }

    public function listarById($id)
    {
        $usuario = Usuario::find($id);
        try {
            if (!$usuario) {
                return response()->json([
                    'Erro' => 'Usuário não encontrado.'
                ]);
            } else {
                return response()->json([
                    'Usuário' => $usuario
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                "Mensagem" => $e->getMessage(),

            ]);
        }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreUsuarioRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(StoreUsuarioRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Usuario  $usuario
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Usuario $usuario)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Usuario  $usuario
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Usuario $usuario)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateUsuarioRequest  $request
    //  * @param  \App\Models\Usuario  $usuario
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Usuario  $usuario
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Usuario $usuario)
    // {
    //     //
    // }
}
