@extends('admin.index')
@section('content')
 {!!Form::open(array('url'=>'myAdmin/levels/add','method'=>'post'))!!}
 	<fieldset>
	        <div>
	            <input placeholder="Name" name="name" type="text" autofocus>
	        </div>
	        
	        <!-- Change this to a button or input when using this as a form -->
	        <button>Add</button> 
	        <!-- Button checks Form first, then url, then method, if there is no url n method
	         then Form is sent to same url with get method -->
	    </fieldset>
 {!!Form::close()!!}
@endsection