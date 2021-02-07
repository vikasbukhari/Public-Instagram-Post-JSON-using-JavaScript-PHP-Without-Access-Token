<!DOCTYPE html>
<html>
<head>
	<title></title>

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			
</head>
<body>

    <div class="container">
        <div class="card" style="width: 18rem;">
        <?php
          
            $json = file_get_contents('https://www.instagram.com/p/CKow063A0bp/?__a=1');

            $obj = json_decode($json);

            echo '
            <img class="img img-responsive" src="'.$obj->graphql->shortcode_media->display_url.'" id="postImage" class="card-img-top" alt="...">
                  
            <p>Username : <strong><span id="instaUsername">'.$obj->graphql->shortcode_media->owner->username.'</span></strong> </p>
            
            <p>Name: <strong> <span id="instaName">'.$obj->graphql->shortcode_media->owner->full_name.'</span></strong></p>
            
            <div class="card-body">
            
            <p class="card-text">No of Likes | <strong><span id="noLikes">'.$obj->graphql->shortcode_media->edge_media_preview_like->count.'</span></strong></p>
            
            <p class="card-text"> No Of Comments | <strong><span id="noComments">'.$obj->graphql->shortcode_media->edge_media_preview_comment->count.'</span></strong></p>
            
            ';

           

        ?>
                
                </div>
        </div>

    </div>


</body>
</html>
