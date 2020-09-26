<?php 


/*
\ DEFINITION imperative vs declarative \
The imperative approach is concerned with HOW you're actually going to get a seat. You need to list out the steps to be able to show HOW you're going to get a table. The declarative approach is more concerned with WHAT you want, a table for two.
*/

//array_map allows us to iterate over each of the elements of an array to operate on them and generate a new array
// imperative
$myArray = [1, 2, 3]; 
$multipliedArray = [];
foreach ($myArray as $item) { 
  $multipliedArray[] = $item * 2;
}
// declarative
$multipliedArray = array_map(
  function(int $item) { return $item * 2; }, 
  $myArray
);


/* array_filter allows us to filter the elements of an array based on a condition: */// imperative
$myArray = [1, 2, 3]; 
$filteredArray = [];
foreach ($myArray as $item) { 
  if ($item % 2 === 0) { 
    $filteredArray[] = $item;
  }
}
// declarative
$filteredArray = array_filter(
  $myArray,   
  function(int $item) { return $item % 2 === 0; }
);


//array_reduce allows us to reduce an array to a value by accumulating the result in a variable. For example, it serves to add the elements of an array

// imperative
$myArray = [1, 2, 3]; 
$total = 0;
foreach ($myArray as $item) { 
  $total += $item;
}
// declarative
$total = array_reduce(
  $myArray,   
  function(int $ac, int $item) { return $ac + $item; }, 
  0
);