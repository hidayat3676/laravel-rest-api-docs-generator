# laravel-rest api documentation generator
This package  provides an easy way of generating documentation
for api's in laravel
<br>

<code> composer require hidayat/api-docs </code>

# usage 
<small>Once install publish package using </small>
<br>
<code>
php artisan vendor:publish --provider="Hidayat\ApiDocs\RestApiDocServiceProvider"
</code> 
- once published you will have a config file in the `config/` directory
named api_docs which will have a sample of an endpoint documentation
for  one api you can use that sample to adds your other endpoints
- next paste the following code in your routes/web.php
- you can place it anywhere in other routes files as well as long as that file is loaded into your views. 
- <code>\Hidayat\ApiDocs\ApiDocsRoute::generateRoute();</code>
- This will create a route url  `api_docs` visit this url and you 
- see the docs view.
- Once you run the publish command the view which is used by the package
is also published to `resources/views/vendor/api_docs` folder
you can do customization as you want in there.
- if you want to have a different url for the docs you can pass `url` to
  `\Hidayat\ApiDocs\ApiDocsRoute::generateRoute('custom-url');`
which will be used as the url for the showing the docs instead of 
the default one.
- The style used by the view is also published to `public/vendor/api_docs`
folder you can change styling as you want.
- <b>Note: </b> This package scan all routes with prefix `api`
other routes remain untouched.
