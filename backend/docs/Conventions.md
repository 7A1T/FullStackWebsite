# Best Practice naming conventions for this project
### Files
I use Pascal case for functions and variables i.e. 'itemObjectThing'
- filenames are written in pascal case i.e. fileNameOne
- database models are prefixed by 'db' i.e. dbThing
- api models are prefixed by 'api' i.e. apiThing
- controllers are postfixed by 'Controller' i.e. 'thingController'
## Functions
### object iteractions
- If a function replaces the current value, it should be named set i.e. function setValue()
- If a function adds to an object but does not replace the current item, it should be named add i.e. function addValue
- If a function fetches an object, it should be named get i.e. function getValue
- If a function removes an object but does not necessarily remove all objects or return from an object, it should be named remValue.

### database interactions
- If an function is being inserted into a database, it should be named insert i.e. insertItem
- If an function is being fetched from a database, it should be named fetch i.e. fetchItem
- If an function removes an object from a database, it should be named delete i.e. delValue 