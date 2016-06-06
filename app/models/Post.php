<?php 

class Post extends BaseModel {

	protected $table = "posts";

	public static $rules = [
		'title'      => 'required|max:100',
    	'body'       => 'required|max:1000000',
    	'author'	 => 'required|max:100',
    	'categories' => 'required|max:100',
    	'summary'    => 'required|max:200',
    	'image'      => 'required|max:200'
	];
}

?>