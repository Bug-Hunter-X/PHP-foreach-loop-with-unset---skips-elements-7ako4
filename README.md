# PHP foreach Loop with unset() Bug

This repository demonstrates a subtle but common bug in PHP involving the use of `unset()` within a `foreach` loop.  Modifying the array during iteration using `unset()` can lead to unexpected behavior, as the internal array pointer is affected.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version that avoids this issue.

**Key takeaway:**  Avoid using `unset()` directly within a `foreach` loop when iterating over an array. Use alternative methods like iterating in reverse or creating a new array.