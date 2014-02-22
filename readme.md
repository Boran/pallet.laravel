## Pallet/layout tool
Initila example code using 'laravel'
(see also the original and symfony2 based ones on the boran github account)

Notes on the laravel port:
- A model (pallet object) exists, it is instantianted and default values show on a form
- A controller and views exist
- Issues
  - creating form output on the same page as the form
    ==> how to get the form results back into the same object?
        could Input::flash(); help?
  - Form: resize text fields,
  - Pull labels from moduel

Its been easier (than symfony) to get going on Laravel and the the syntax is nicer indeed.
But I'm starting to see limitations compared with symfony: the form component is not as powerful for example.
The documentation is quite good, but limited (I've not bought any of the commercial book yet. It will probably be necessary if really diving into laravel).
Just ound out that there is basically just one author for Laravel: that is worrying (even if he sounds like a great guy from listening to the podcasts).

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
