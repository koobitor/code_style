/*=================================
=            file Name            =
=================================*/

/* INCORRECT */

  somelibrary.php
  someLibrary.php
  SOMELIBRARY.php
  Some_Library.php

  Application_config.php
  Application_Config.php
  applicationConfig.php 


/* CORRECT */

Somelibrary.php
Some_library.php

applicationconfig.php
application_config.php


<!--

Class files must be named in a Ucfirst-like manner, while any other file name 
(configurations, views, generic scripts, etc.) should be in all lowercase. 

-->


/*===================================
=            Class Naming           =
===================================*/

/* INCORRECT */

class superclass
class SuperClass

/* CORRECT */

class Super_class
class Super_class {

        public function __construct()
        {
        
        }
}

<!--

Class names should always start with an uppercase letter. Multiple words should be separated with an underscore, and not CamelCased.

-->


/*===================================
=            Method Name            =
===================================*/

/* INCORRECT */

function fileproperties()               // not descriptive and needs underscore separator
function fileProperties()               // not descriptive and uses CamelCase
function getfileproperties()            // Better!  But still missing underscore separator
function getFileProperties()            // uses CamelCase
function get_the_file_properties_from_the_file()        // wordy

/* CORRECT */

function get_file_properties()  // descriptive, underscore separator, and all lowercase letters

<!--   

Class methods should be entirely lowercased and named to clearly indicate their function, 
preferably including a verb. Try to avoid overly long and verbose names. 
ultiple words should be separated with an underscore. 

-->


/*===============================
=            KEYWORD            =
===============================*/

__halt_compiler()
abstract
and 
array() 
as
break 
callable (as of PHP 5.4)  
case  
catch 
class
clone 
const 
continue  
declare 
default
die() 
do  
echo  
else  
elseif
empty() 
enddeclare  
endfor  
endforeach  
endif
endswitch 
endwhile  
eval()  
exit()  
extends
final 
finally (as of PHP 5.5) 
for 
foreach 
function
global  
goto (as of PHP 5.3)  
if  
implements  
include
include_once  
instanceof  
insteadof (as of PHP 5.4) 
interface 
isset()
list()  
namespace (as of PHP 5.3) 
new 
or  
print
private 
protected 
public  
require 
require_once
return  
static  
switch  
throw 
trait (as of PHP 5.4)
try 
unset() 
use 
var 
while
xor 
yield (as of PHP 5.5)

<!--   Key Word must be lower case -->


/*=======================================
=            True False NULL            =
=======================================*/

true
false 
null

 

<!-- The PHP constants true, false, and null MUST be in lower case.  -->




/*======================================================
=            Namespace and Use Declarations            =
======================================================*/

<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

// ... additional PHP code ...
?>



<!-- 

When present, there MUST be one blank line after the namespace declaration.
When present, all use declarations MUST go after the namespace declaration.
There MUST be one use keyword per declaration.
There MUST be one blank line after the use block. 

-->


/*==================================
=            Properties            =
==================================*/


<?php
namespace Vendor\Package;

class ClassName
{
    public $foo = null;
}
?>

<!-- 

Visibility MUST be declared on all properties.
The var keyword MUST NOT be used to declare a property.
There MUST NOT be more than one property declared per statement.
Property names SHOULD NOT be prefixed with a single underscore to indicate protected or private visibility.

 -->

/*===============================
=            Methods            =
===============================*/



<?php
namespace Vendor\Package;

class ClassName
{
    public function fooBarBaz($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
?>

<!-- A method declaration looks like the following. Note the placement of parentheses, commas, spaces, and braces: -->



/*=========================================
=            Methods Arguments            =
=========================================*/


<?php
namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
?>

<!-- 

In the argument list, there MUST NOT be a space before each comma, and there MUST be one space after each comma.
Method arguments with default values MUST go at the end of the argument list.

-->

<?php
namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        // method body
    }
}
?>


<!-- 

Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
When the argument list is split across multiple lines, the closing parenthesis and opening brace MUST be placed together on their own line with one space between them. 

-->


/*=============================================
=            abstract,final,static            =
=============================================*/

<?php
namespace Vendor\Package;

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim();

    final public static function bar()
    {
        // method body
    }
}
?>


<!-- 

When present, the abstract and final declarations MUST precede the visibility declaration.

When present, the static declaration MUST come after the visibility declaration. 

-->


/*=============================================
=            Method and Function Calls        =
=============================================*/


<?php
bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);
?>


<!-- 

Not space between mothod or function
name and the opening parenthesis MUST NOT be a space after the opening parenthesis
MUST NOT be a space before the closing parenthesis
In the argument list , there MUST NOT be a space before each comma, and there MUST be one space after each comma 

-->


<?php
$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);
?>


<!-- 

Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so
the first item in the list MUST be on the next line and there MUST be only one argument per line. 

-->


/*======================================
=            if, elseif, else            =
======================================*/

<?php
if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body;
}
?>


<!--  

An if structure looks like the following. Note the placement of parentheses, spaces, and braces; 
and that else and elseif are on the same line as the closing brace from the earlier body. 

-->


/*===================================
=            switch case            =
===================================*/


<?php
switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}
?>


<!-- 

A switch structure looks like the following. Note the placement of parentheses, spaces, and braces.
The case statement MUST be indented once from switch, and the break keyword (or other terminating keyword)
MUST be indented at the same level as the case body. There MUST be a comment such as // no break when fall-through
is intentional in a non-empty case body. 

-->



/*=======================================
=            while, do while            =
=======================================*/


<?php
while ($expr) {
    // structure body
}
?>



<!-- A while statement looks like the following. Note the placement of parentheses, spaces, and braces.-->


<?php
do {
    // structure body;
} while ($expr);
?>


<!-- Similarly, a do while statement looks like the following. Note the placement of parentheses, spaces, and braces.-->




/*===========================
=            for            =
===========================*/

<?php
for ($i = 0; $i < 10; $i++) {
    // for body
}
?>



<!-- A for statement looks like the following. Note the placement of parentheses, spaces, and braces.-->


/*===============================
=            foreach            =
===============================*/

<?php
foreach ($iterable as $key => $value) {
    // foreach body
}
?>

<!-- A foreach statement looks like the following. Note the placement of parentheses, spaces, and braces. -->


/*=================================
=            try, catch           =
=================================*/


<?php
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}
?>

<!-- A try catch block looks like the following. Note the placement of parentheses, spaces, and braces. -->