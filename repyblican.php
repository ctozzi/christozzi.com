<?php
$title = "repyblican.py";
include 'header.php';
?>

<p>repyblican.py is a Python script I wrote for converting between the 
Gregorian and <a href="http://en.wikipedia.org/wiki/French_Republican_Calendar" 
target="_blank">French republican</a> calendars.  The code is available <a 
href="repyblican.txt">here</a>.  It should work on any computer with a 
Python 2.5+ interpreter installed.  If you use Linux or OS X it is very likely that Python is already installed.  Python installers for Windows are available from 
<a href="http://python.org/">python.org</a>.</p>

<h2>Why?</h2>

<p>Several electronic conversion tools for the republican calendar 
already exist, but most are 
Web-based or run only on phones, and none that I could find works 
natively on Linux.  I wanted a program that requires neither 
Internet access, nor emulation, nor a sophisticated phone.</p>

<p>In addition, none of the existing tools of which I'm aware is very 
useful for automated tasks (e.g., recursive conversion of a list of dates from one format to 
the other), which repyblican.py can do easily.

<h2>Usage</h2>

<p>repyblican.py accepts arguments in the following format:<pre>day month year</pre></p>

<p><i>day</i> is a number between 1 and 31, <i>month</i> is the name of 
a 
Gregorian or French republican calendar month and <i>year</i> is a number between 1 and 
1791 when entering republican dates, or between 1792 and 9999 for 
Gregorian dates.  In all cases, the year must be entered with Arabic 
numerals; Roman numerals are not supported.</p>

<p>Sansculottides days can be entered in the format:<pre>name-of-day year</pre>e.g.:<pre>Génie 2</pre></p>

<p>The script will tolerate month and day names that are not properly 
capitalized or accented.</p>

<h2>Examples</h2>

<p><pre>$ repyblican.py 22 September 1792
Republican date:  1 Vendémiaire Year 1
Gregorian date:  1792-09-22
</pre></p>

<p><pre>$ repyblican.py 9 thermidor 2
Republican date:  9 Thermidor Year 2
Gregorian date:  1794-07-27
</pre></p>

<p><pre>$ repyblican.py 19 September 1794
Republican date:  Day of Travail (sansculottide) Year 2
Gregorian date:  1794-09-19
</pre></p>

<h2>Limitations</h2>

<p>This is a work in progress and there are some things that could be 
improved.  In particular, I'd like to find time to add support for 
calculating names of normal republican days, and provide options for 
controlling output formatting and order.  Some parts of the code 
could also be cleaned up, especially in the get_rep_date() function.</p>

<p>In addition, although the script accepts input for all years between 
1 and 9999 (the upper limit of years supported by Python datetime functions), 
it ceases to provide very accurate conversions after around 1805, when 
the republican calendar was suppressed.  To fix this, parts of the code 
would need to be rewritten to handle leap years better.  For dates that 
fall within the years during which the calendar was actually used (not 
including under the Paris Commune of 1871), however, the output should 
be accurate.</p>

<?php include 'footer.php';?>
