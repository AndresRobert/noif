# Challenge
Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos". But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
# Requirements
* 1 `if`
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your **SOLID** knowledge
* You can write the challenge in any language you want. We are big fans of PHP, Kotlin and TypeScript
# How to run
* Clone repo
* Run 
```bash 
php index.php
``` 
* Results
```bash                
1
2
Linio
4
IT
Linio
7
8
Linio
IT
11
Linio
13
14
Linianos
16
17
Linio
19
IT
Linio
22
23
Linio
IT
26
Linio
28
29
Linianos
31
32
Linio
34
IT
Linio
37
38
Linio
IT
41
Linio
43
44
Linianos
46
47
Linio
49
IT
Linio
52
53
Linio
IT
56
Linio
58
59
Linianos
61
62
Linio
64
IT
Linio
67
68
Linio
IT
71
Linio
73
74
Linianos
76
77
Linio
79
IT
Linio
82
83
Linio
IT
86
Linio
88
89
Linianos
91
92
Linio
94
IT
Linio
97
98
Linio
IT
``` 
# How to test
* Install dependencies
* Run 
```bash 
./vendor/bin/phpunit --testdox tests
```
* Results
```bash 
PHPUnit 9.0.1 by Sebastian Bergmann and contributors.

Toolkit
 ✔ Number replaced by Linio
 ✔ Number replaced by IT
 ✔ Number replaced by Linianos
 ✔ Number not replaced

Time: 82 ms, Memory: 4.00 MB

OK (4 tests, 4 assertions)
```