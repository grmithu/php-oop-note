// Code re-use
// Kono akti class er property/method onno akti class re-use trait dia karte parbo
// 



<?php


class Post{
    use shareable;
}

class Comment{
    use shareable;
}

trait shareable{
    public function share(){
        printf(format: "Shared to social media");
    }
}

$obj = new Post();
echo $obj->share();


?>
