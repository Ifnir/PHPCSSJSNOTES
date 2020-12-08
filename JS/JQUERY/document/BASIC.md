# Document

#### Basic html page

```
<!DOCTYPE html>
<html>
<body>

<h3>Understanding JavaScript</h3>

<p id="d"></p>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        console.log('Longhand');
    });

    $(function () {
        console.log('Shorthand');
    });

    function windowmode() {
        console.log('Window')
    }

    $(window).on("load", windowmode);
</script>
</body>
</html> 
```

#### Window vs Document

> #### Window  
Window is used when you want your javascript to be loaded before php and html etc. Shorthand:Before the Document

> #### Document  
Most of the time you want to use this, when working with php, because you want the document to be loaded before the javascript.
In the above example there is used two different to call the document, a shorten version and long version.
