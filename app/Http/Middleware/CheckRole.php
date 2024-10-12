<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = User::user();

        if (!$user || !$user->role->permissions->contains('name', $permission)) {
            return redirect('/')->with('error', 'Você não tem permissão para acessar esta página.'); // Redirecionar ou mostrar uma mensagem de erro
        }

        return $next($request);
    }
}

