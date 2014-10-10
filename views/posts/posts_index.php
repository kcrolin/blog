


<?foreach( $posts as $post ):?>
    <div class="span8"> <h1><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?=$post['post_subject']?></a></h1>
        <p><?=$post['post_text']?></p> <div> <span class="badge badge-success"><p><?=$post['post_created']?></p></span><div class="pull-right"> <?foreach($tags[$post['post_id']] as $tag):?> <a href="<?= BASE_URL ?>tags/<?= $tags['tag_id'] ?>"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a><? endforeach?> <span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span> </div> </div> </div> <?endforeach?>

<?php if ($auth->logged_in == true): ?> <h1>Lisa postitus</h1> <div style="border-button: 1px solid; margin: 10px 0px 10px 0px;"></div> <form class="form-inline" method="post" role="form"> <div class="form-group"> <input class="form-control" type="text" placeholder="Pealkiri" name="data[post_subject]"/> </div> <br> <textarea name="data[post_text]" placeholder="Ütle midagi...." style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea> <br> <div class="form-group"> <button class="btn btn-default" style="background:#2B84D2;" type="submit">Lisa</button> </div> </form> <?php endif; ?>

