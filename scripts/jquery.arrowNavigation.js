/**
 *
 *	Copyright (c) 2008 Dmitri Smirnov <dmitri@dmitri.me>, http://www.dmitri.me
 *
 *	Permission is hereby granted, free of charge, to any person
 *	obtaining a copy of this software and associated documentation
 *	files (the "Software"), to deal in the Software without
 *	restriction, including without limitation the rights to use,
 *	copy, modify, merge, publish, distribute, sublicense, and/or sell
 *	copies of the Software, and to permit persons to whom the
 *	Software is furnished to do so, subject to the following
 *	conditions:
 *
 *	The above copyright notice and this permission notice shall be
 *	included in all copies or substantial portions of the Software.
 *
 *	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 *	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 *	OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 *	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 *	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 *	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 *	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 *	OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 *	Descrption:
 *
 *	Navigate through pages using arrows keys.
 *	NB! In Opera combination Ctrl + arrow key is used, Opera users
 *	should use Shift + Ctrl + arrow key, becuse in Opera key combination
 *	CTRL + arrow key is reserved
 *
 *	Usage:
 *	See my blog http://www.dmitri.me/blog/navigation-with-arrows-jquery/
 *
 *
 */

/**
 *	param Object options
 *	param function callback
 *	return boolean
 */
$.fn.arrowsNavigation = function(options, callback) {
    this.options = options || {};
    var opt = this.options;
    this.callback = callback || null;
    var clbk = this.callback;
    /**
     *	param event
     */
    $(this).bind("keydown", function(event) {
        //By default link is empty
        var lnk = "";

        var left,right;

        //get link data from HTML DOM
        if(!opt.right) {
            right = $("#arr-nav-right-link").attr("href");
        } else {
            right = opt.right;
        }
        if(!opt.left) {
            left   = $("#arr-nav-left-link").attr("href");
        } else {
            left = opt.left;
        }

        switch(event.keyCode) {
            case 0x27: lnk = right; break;
            case 0x25: lnk = left; break;
        }

        //If link exists go to that location
        if(lnk) {

            if(typeof clbk == 'function') {
                clbk();
                return false;
            } else {
                window.location = lnk;
                return true;
                //throw new Error("'callback' parameter should be a function");
            }
        }

        return true;
    });
}