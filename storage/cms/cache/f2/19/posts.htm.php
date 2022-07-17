<?php 
class Cms62d476bfca45a670998900_f53f5d5ffe5ee24a2ebc0982b8fc0a92Class extends Cms\Classes\PageCode
{
public function onEnd()
   {
       if (!$this->post)
           return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
   }
}
