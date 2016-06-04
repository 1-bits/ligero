<?php

class Main extends Controller {
	
	function index()
	{
<<<<<<< HEAD
	
		$template = $this->loadView('mainView');

		
		$data = array(
        'blog_title'   => 'My Blog Title',
        'blog_heading' => 'My Blog Heading',
        'blog_entries' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
        )
);		
		$template->set('a',$data);
=======
                $ejemplo=  $this->loadModel(example_model);
               echo  $ejemplo->prueba(1);
		$template = $this->loadView('public/mainView');
          
		$template->set('someval', 200);
>>>>>>> a38a8bec38f8eeed92b63dd04b983dfeff357d4c
		$template->render();
	}
    
}

?>
