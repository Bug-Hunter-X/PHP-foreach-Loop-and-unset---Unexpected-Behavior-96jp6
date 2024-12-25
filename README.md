# PHP foreach Loop and unset() Unexpected Behavior
This repository demonstrates an uncommon bug in PHP related to modifying an array while iterating over it using a `foreach` loop.  The `unset()` function, when used within the loop, does not behave as intuitively expected.

The `bug.php` file contains code that showcases this unexpected behavior. The `bugSolution.php` file demonstrates the correct and safe way to handle such situations.

## Bug Description
The primary issue stems from how PHP manages array indices during a `foreach` loop when elements are removed.  The loop's internal pointer doesn't adjust properly after `unset()` is called, potentially leading to elements being skipped.

## Solution
The recommended approach is to iterate over a copy of the array or use a `for` loop with explicit index manipulation, allowing for safe removal of elements without disrupting the iteration process.