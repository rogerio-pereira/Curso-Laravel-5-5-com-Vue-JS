<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Artigo extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descricao',
        'conteudo',
        'data',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retorna todos os artigos com usuários via PHP
     */
    public static function listaArtigos($paginate)
    {
        $listaArtigos = self::select(['id', 'titulo', 'descricao', 'user_id', 'data'])->paginate($paginate);

        foreach($listaArtigos as $artigo) {
            $artigo->user_id = User::find($artigo->user_id)->name; //Mais rapido
            /*$artigo->user_id = $artigo->user->name;
            unset($artigo->user);*/
        }

        return $listaArtigos;
    }

    /**
     * Retorna todos os artigos com usuários via Banco de dados
     */
    public static function listaArtigosDB($paginate)
    {
        return DB::table('artigos')
                    ->join('users', 'users.id', '=', 'artigos.user_id')
                    ->select('artigos.id', 'artigos.titulo', 'artigos.descricao', 'users.name', 'artigos.data')
                    ->whereNull('deleted_at')
                    ->paginate($paginate);
    }
}
