<?php

namespace App;



use App\Events\SendMail;
use App\Interfaces\SendmailInterface;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model implements SendmailInterface
{
    protected $fillable = ['fileName', 'url', 'size'];

    public function galerias()
    {
        return $this->morphedByMany(Galeria::class, 'archivable');
    }

    public function jardines()
    {
        return $this->morphedByMany(Jardin::class, 'archivable');
    }

    public function niveles()
    {
        return $this->morphedByMany(Nivel::class, 'archivable');
    }

    public function parvulos()
    {
        return $this->morphedByMany(Parvulo::class, 'archivable');
    }

    public static function boot()
    {
        parent::boot();

        // al guardar un post
        \App\Archivo::saving(function ($archivo) {

            //event( new SendMail($archivo) );

        });
    }

    public function getThumbnail(){
        if($this->getImageExtension())
            return url($this->url);
        else
            return url ('thumbnails/'.($this->extension).'.png');
    }

    public function getImageExtension(){
        if (in_array($this->extension,['jpg','jpeg','png','bmp','gif']))
            return true;
        else
            return false;
    }

    public function getFileUrlAttribute()
    {
        return url($this->url . $this->fileName);
    }

    public function scopeTypes($query, $types)
    {
        if (!empty($types) && !in_array($types, ['general'])) {
            $methodes = (array)explode('-', $types);
            $query->where(function ($q) use ($methodes) {
                foreach ($methodes as $i => $method) {
                    $m = ($i == 0) ? 'has' : 'orHas';
                    $q->{$m}($method);
                }
            });
        }

        if (!empty($types) && in_array($types, ['general'])) {
            $methodes = ['jardines', 'niveles', 'galerias', 'parvulos'];
            $query->where(function ($q) use ($methodes) {
                foreach ($methodes as $i => $method) {
                    $q->doesntHave($method);
                }
            });
        }

        return $query;
    }

    public function getTo()
    {
        $mail = array();

        switch ($this->type) {
            case "galerias-jardines":
                $mail = User::whereHas('parvulos', function ($q) {
                    $q->whereHas('jardines', function ($q) {
                        $q->whereHas('archivos', function ($q) {
                            $q->where($this->getKeyName(), $this->getKey());
                        });
                    });
                })->get();
                break;
            case "niveles":
                $mail = User::whereHas('parvulos', function ($q) {
                    $q->whereHas('niveles', function ($q) {
                        $q->whereHas('archivos', function ($q) {
                            $q->where($this->getKeyName(), $this->getKey());
                        });
                    });
                })->get();
                break;
            case "parvulos":

                $mail = User::whereHas('parvulos', function ($q) {
                    $q->whereHas('archivos', function ($q) {
                        $q->where($this->getKeyName(), $this->getKey());
                    });
                })->get();
                break;
            case "general":
                $mail = User::get();
                break;
        }

        if (!empty($mail)) $mail = $mail->lists('email')->toArray();

        return array_unique((array)$mail);
    }


    public function getSubject()
    {
        return 'contenido modificado.';
    }

    public function getAttachments()
    {
        return false;
    }

    public function getData()
    {
        return [];
    }

    public function getTemplate()
    {
        return 'mails.content';
    }
}
