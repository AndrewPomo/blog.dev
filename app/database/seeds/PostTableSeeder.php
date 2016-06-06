<?php 

class PostTableSeeder extends Seeder {

    public function run()
    {
        $post = new Post();
        $post->title = 'My First Blog Post';
        $post->categories = 'Sample Post';
        $post->author = User::first()->name;
        $post->user_id = User::first()->id;
        $post->summary = "This is just a short summary of a blog post. It can contain 200 characters before it’s too long. I'm just typing to get as close to the limit as I possibly can. Hodor. Hodor. Hodor. Hodor. Hodor.";
        $post->body = 'Here is some body.';
        $post->image = 'img/postImg/6z707-stock19.jpg';
        $post->save();

        $post = new Post();
        $post->title = 'My Second Blog Post';
        $post->categories = 'Sample Post';
        $post->author = User::first()->name;
        $post->user_id = User::first()->id;
        $post->summary = "I'm really just writing a bunch of words. I know this is supposed to be a 'real' post, but this is not going to be a 'real' summary. I'm reaching the character limit, so I'll go ahead and stop here.";
        $post->body = 'Here is some more body.';
        $post->image = 'img/postImg/8urm3-stock7.jpg';
        $post->save();

        $post = new Post();
        $post->title = 'My Third Blog Post';
        $post->categories = 'Sample Post';
        $post->author = User::first()->name;
        $post->user_id = User::first()->id;
        $post->summary = "Here we go again with the summary...I haven't written the post yet, so how could I possibly summarize it? That's right, I can't. That's why I'm writing this silly text...errrrr...WAS writing it.";
        $post->body = 'Here is even more body.';
        $post->image = 'img/postImg/bc0fu-stock6.jpg';
        $post->save();
    }
}

?>