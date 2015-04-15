<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
  $handle = fopen($inputFile,'a+');
  $randomMovies = fread($handle,filesize($inputFile));
  $inputFile = explode("\n", trim($randomMovies));
  print_r($inputFile);
  return $inputFile;
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $movies)
{
  $handleForOutput = fopen($outputFile,'a+');
  $movies = implode("\n",$movies);
  fwrite($handleForOutput,$movies);
}

/**
 * Pick a random movie from an array
 **/
function randomMovie($movies)
{
  shuffle($movies);
  $randMovie = array_pop($movies);
  return $randMovie;
}

$movies = readLines($inputFile);

echo "Let's watch ".randomMovie($movies)." !\n";
echo "But ".randomMovie($movies)." really sucks !\n";

sort($movies);

writeLines($outputFile,$movies);
