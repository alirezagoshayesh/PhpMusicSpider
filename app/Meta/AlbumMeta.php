<?php

namespace App\Meta;

class AlbumMeta
{
  protected string $name = '';
  protected string $cover = '';
  protected string $genre = '';
  protected string $published = '';
  protected string $artist = '';

  public function setName(string $value): void
  {
    $this->name = $value;
  }

  public function setCover($value): void
  {
    $this->cover = $value;
  }

  public function setGenre($value): void
  {
    $this->genre = $value;
  }

  public function setPublished($value): void
  {
    $this->published = $value;
  }

  public function setArtist($value): void
  {
    $this->artist = $value;
  }

  public function toArray()
  {
    return (array) $this;
  }
}