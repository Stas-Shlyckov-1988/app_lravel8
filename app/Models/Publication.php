<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'publication';

    public function files($publicationId) {
        return Files::join('pub_files', 'file_id', '=', 'files.id')
            ->where('publication_id', $publicationId)
            ->get();
    }
}
