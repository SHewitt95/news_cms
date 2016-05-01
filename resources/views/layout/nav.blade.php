@section('nav')
<nav class="navbar navbar-inverse">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="/">News CMS</a>
     </div>
     <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li><a href="http://159.203.74.152/admin/posts">Posts</a></li>
         <li><a href="http://159.203.74.152/admin/authors">Authors</a></li>
         <li><a href="http://159.203.74.152/admin/departments">Departments</a></li>
         <li><a href="http://159.203.74.152/admin/photos">Photos</a></li>
         <li><a href="http://159.203.74.152/admin/packages">Packages</a></li>
       </ul>
     </div><!--/.nav-collapse -->
   </div>
 </nav>
@stop
