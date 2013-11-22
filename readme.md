## Pallet/layout tool
Example using *laravel*
(see also the original and dsymfony based ones on the same github account (boran)

Notes on the laravel port:
- A model (pallet object exists), it is instantianted and default values show on a form
- A controller and views exist
- Issues
    creating form output on the same page as the form
    ==> how to get the form results back into the same object?
        could Input::flash(); help?
    Form: resize text fields,. Pull labels from moduel

Its been easier to get going on Laravel and the the syntax is nicer indeed.
But I'm starting to see limitatiosn compared with symfony: the form component is not so powerful for example.
The document is quite good, but limited (I've not bought any of the commercial book yet. It will probably be necessary if really diving into laravel).
Just have found out that there is basically just one author is worrying too (if he sound slike a great guy from listening to the podcasts).

----------------------------------
Allow reels to be optimally laid out on a Pallet.
 * given the dimensions or pallet and reel
 * With layout for 5 different scenarios

GUI Interface
https://github.com/Boran/pallet/blob/master/samples/web_ui_1.png

Sample outputs:
https://github.com/Boran/pallet/blob/master/samples/sample1.jpg
https://github.com/Boran/pallet/blob/master/samples/sample2.jpg
https://github.com/Boran/pallet/blob/master/samples/sample3.jpg
https://github.com/Boran/pallet/blob/master/samples/sample4.jpg
https://github.com/Boran/pallet/blob/master/samples/sample5.jpg
https://github.com/Boran/pallet/blob/master/samples/sample6.jpg
https://github.com/Boran/pallet/blob/master/samples/sample7.jpg

LICENSE: GNU Version 2, http://www.gnu.org/licenses/gpl-2.0.html


## Laravel Framework Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### License
The Pallet tool is licensed under GPL Version 2

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
