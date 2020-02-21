# PHP-Cursor
A simple lib to control the Linux shell cursor!
# Installation
<code>include "Cursor.php";</code>
# Functions
<i>up(n = 1)</i>
Move the cursor up n lines

Example: Cursor::up(2);

<i>down(n = 1)</i>
Move the cursor down n lines

Example: Cursor::down(2);

<i>back(n = 1)</i>
Move the cursor back n characters

Example: Cursor::back(2);

<i>forward(n = 1)</i>
Move the cursor forward n characters

Example: Cursor::forward(2);

<i>clearline()</i>
Clear the line between the cursor and the end of the line

Example: Cursor::clearline();

<i>store()</i>
Store the cursor position

Example: Cursor::store();

<i>restore()</i>
Restore the cursor positon

Example: Cursor::restore();

<i>underline(true|false)</i>
Active/deactive the underline text

Example: Cursor::underline(true)

<i>blink(true|false)</i>
Active/deactive the blink text

Example: Cursor::blink(true);

<i>reverse(true|false)</i>
Reverse/unreverse the text and the background

Example: Cursor::reverse(true);

<i>reset()</i>
Reset all the colors and attributes to default

Example: Cursor::reset();

<i>black($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light black

Example: Cursor::black($bg = false,$light = true);

<i>red($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light red

Example: Cursor::red($bg = false,$light = true);

<i>green($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light green

Example: Cursor::green($bg = false,$light = true);

<i>yellow($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light yellow

Example: Cursor::yellow($bg = false,$light = true);

<i>blue($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light blue

Example: Cursor::blue($bg = false,$light = true);

<i>magenta($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light magenta

Example: Cursor::magenta($bg = false,$light = true);

<i>cyan($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light cyan

Example: Cursor::cyan($bg = false,$light = true);

<i>white($bg = true|false,$light = true|false)</i>
Change the foreground/background to dark/light white

Example: Cursor::white($bg = false,$light = true);

<i>color($hexcolor,$bg = true|false)</i>
Change the foreground/background to any hex color

Example: Cursor::color("#FFFFFF",$bg = false);
