<?php

namespace JedGueruela\LaravelChunkUpload\Handler\Traits;

use JedGueruela\LaravelChunkUpload\Exceptions\ChunkSaveException;
use JedGueruela\LaravelChunkUpload\Save\ParallelSave;
use JedGueruela\LaravelChunkUpload\Storage\ChunkStorage;

trait HandleParallelUploadTrait
{
    protected $percentageDone = 0;

    /**
     * Returns the chunk save instance for saving.
     *
     * @param ChunkStorage $chunkStorage the chunk storage
     *
     * @return ParallelSave
     *
     * @throws ChunkSaveException
     */
    public function startSaving($chunkStorage)
    {
        // Build the parallel save
        return new ParallelSave(
            $this->file,
            $this,
            $chunkStorage,
            $this->config
        );
    }
}
