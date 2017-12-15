<?php

if (post_password_required()) {
    return;
}


?>

<section class="blog-leave-comment">
    <h3 class="section-title">
        Leave Comment
    </h3>
    <div class="form-horizontal">
    <?php 
    comment_form(array(
        'comment_field' => '<div class="form-group">
        <div class="col-md-12">
            <div class="label-wrapper">
                <label class="control-label font-xs-2 font-light" for="comment">
                    Message
                    <span class="text-danger">
                        *
                    </span>
                </label>
            </div>
            <div id="message-input-wrapper">
                <textarea class="form-control input-minimal" id="comment" name="comment" cols="32" rows="10">                                    </textarea>
            </div>
        </div>
    </div>',
        'fields'        => array(
            'author' => '<div class="form-group">
            <div class="col-md-4 mgb-xs-15 mgb-md-0">
                <div class="label-wrapper">
                    <label class="control-label font-xs-2 font-light" for="author">
                        Name
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                </div>
                <div id="name-input-wrapper">
                    <input type="text" class="form-control input-minimal" required="" name="author" id="author" placeholder="John Doe">
                </div>
            </div>',
            'email' => '<div class="col-md-4 mgb-xs-15 mgb-md-0">
            <div class="label-wrapper">
                <label class="control-label font-xs-2 font-light" for="email">
                    Email
                    <span class="text-danger">
                        *
                    </span>
                </label>
            </div>
            <div id="email-input-wrapper">
                <input type="email" class="form-control input-minimal" required="" name="email" id="email" placeholder="name@company.com">
            </div>
        </div>',
            'url' => '<div class="col-md-4">
            <div class="label-wrapper">
                <label class="control-label font-xs-2 font-light" for="url">
                    Website
                </label>
            </div>
            <div id="website-input-wrapper">
                <input type="url" class="form-control input-minimal" name="url" id="url" placeholder="http://www.yourwebsite.com">
            </div>
        </div></div>'
        ),
        'class_submit' => 'btn btn-success',
        'label_submit'  => __('Submit Comment', 'udemy'),
        'title_reply_before' => '<div class="hide">',
        'title_reply_after' => '</div>',
        'title_reply'  => '',
        'submit_button' => '<button class="btn btn-success %3$s" type="submit" id="%2$s" class="%3$s" name="%1$s" >
        %4$s
    </button>',
        'submit_field' => '<div class="form-group">
        <div class="col-md-12">%1$s %2$s</div></div>'
    ))
    ?>
    </div>
<!--
    <form class="form-horizontal" action="#">
        <div class="form-group">
            <div class="col-md-4 mgb-xs-15 mgb-md-0">
                <div class="label-wrapper">
                    <label class="control-label font-xs-2 font-light" for="comment-name-field">
                        Name
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                </div>
                <div id="name-input-wrapper">
                    <input type="email" class="form-control input-minimal" required="" name="comment-name-field" id="comment-name-field" placeholder="John Doe">
                </div>
            </div>
            <div class="col-md-4 mgb-xs-15 mgb-md-0">
                <div class="label-wrapper">
                    <label class="control-label font-xs-2 font-light" for="comment-email-field">
                        Email
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                </div>
                <div id="email-input-wrapper">
                    <input type="email" class="form-control input-minimal" required="" name="comment-email-field" id="comment-email-field" placeholder="name@company.com">
                </div>
            </div>
            <div class="col-md-4">
                <div class="label-wrapper">
                    <label class="control-label font-xs-2 font-light" for="comment-website-field">
                        Website
                    </label>
                </div>
                <div id="website-input-wrapper">
                    <input type="url" class="form-control input-minimal" name="comment-website-field" id="comment-website-field" placeholder="http://www.yourwebsite.com">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="label-wrapper">
                    <label class="control-label font-xs-2 font-light" for="comment-message-field">
                        Message
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                </div>
                <div id="message-input-wrapper">
                    <textarea class="form-control input-minimal" id="comment-message-field" name="comment-message-field" cols="32" rows="10">                                    </textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button class="btn btn-success" type="submit" id="submit-comment" name="submit-comment">
                    Submit Comment
                </button>
            </div>
        </div>
    </form>
-->
</section>

<hr class="mgt-50 mgb-50">


<section class="blog-comment">
        <h3 class="section-title">
        <?php 
    if (have_comments()) {
        comments_number();
    } else {
        echo __('Comments', 'udemy');
    }
?>
        </h3>
        <ul class="content-list list-sm  list-comments">
            <?php 
                foreach ($comments as $comment) :
                    
            ?>
                <li class="list-item comment">
                    <div class="menu-item menu-icon comment-avatar">
                        <?php echo get_avatar( $comment, 60, '', '',  array(
                            'class' => 'menu-i img-circle'
                        )); ?>
                    </div>
                    <div class="menu-item menu-text pos-r comment-content">

                        <div class="menu-chat">
                            <div class="comment-author">
                                <?php comment_author() ?>

                                <span class="font-xs-1 text-light-grey mgl-10">
                                    <?php comment_date() ?>
                                </span>
                                <span class="label label-warning mgl-10">
                                    Author
                                </span>
                            </div>
                            <div class="comment-body">
                                <?php comment_text(); ?>
                            </div>
                            <div class="comment-action">
                                <button class="btn btn-xs btn-line btn-default btn-circle" data-toggle="tooltip" data-original-title="reply">
                                    <i class="fa fa-reply fa-fw">
                                    </i>
                                </button>
                                <span class="mgl-10 mgr-10">
                                    ·
                                </span>
                                <button class="btn btn-xs btn-line btn-default btn-circle mgr-5" data-toggle="tooltip" data-original-title="thumbs up">
                                    <i class="lnr lnr-thumbs-up ">
                                    </i>
                                </button>
                                <button class="btn btn-xs btn-line btn-default btn-circle mgr-5" data-toggle="tooltip" data-original-title="thumbs down">
                                    <i class="lnr lnr-thumbs-down">
                                    </i>
                                </button>
                            </div>
                        </div>
                    </li>
            <?php 
                endforeach;
            ?>
        </ul>
    </section>