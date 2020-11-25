<!--Data Insert modal here-->
<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
       <form method="post" data-toogle="validator">
        @csrf {{ method_field('POST') }}
         <div class="form-group">
         <input type="hidden" name="id" id="id">
           <label for="exampleInputEmail1">Title</label>
           <input type="text" class="form-control" name="title" id="title" placeholder="Title" required="" autofocus="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Author </label>
           <input type="text" class="form-control" name="author" id="author" placeholder="Author" required="" autofocus="">
         </div>
          <div class="form-group">
           <label for="exampleInputEmail1">Tag </label>
           <input type="text" class="form-control" name="tag" id="tag" placeholder="Tag" required="" autofocus="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Description </label>
           <textarea class="form-control" row='4' name="description" id="description" required=""></textarea>
         </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="insertbutton"></button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<!--SIngle data show are here-->
<div class="modal fade" id="single-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel" align="center"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 
      </div>
      <div class="modal-body">
        <ul class="list-group">
		  <li class="list-group-item">ID: <span class="text-danger" id="contactid"></span></li>
		  <li class="list-group-item">Title: <span class="text-danger" id="titleid"></span> </li>
		  <li class="list-group-item">Author: <span class="text-danger" id="authorid"></span></li>
		  <li class="list-group-item">Tag: <span class="text-danger" id="tagid"></span></li>
       <li class="list-group-item">Description: <span class="text-danger" id="descriptionid"></span></li>
		</ul>
    </div>
  </div>
</div>