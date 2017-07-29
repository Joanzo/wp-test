<div class="widget">
    <h3 class="widget-title">
        Newsletter
    </h3>
    <div class="widget-body">
        <p class="font-light">
            Keep up-to-date with our awesome products and news. Enter your e-mail and subscribe to our newsletter.
        </p>
        <form action="functions/newsletter-subscribe.php" method="POST" id="newsletter-widget" data-form="validate">
            <div class="alert alert-danger hide-form" data-alert="error">
                <div class="content-list list-xs list-vm">
                    <div class="list-wrapper">
                        <div class="list-item pd-0">
                            <div class="menu-item menu-icon">
                                <i class="lnr lnr-warning  text-danger-0 font-xs-5">
                                </i>
                            </div>
                            <div class="menu-item menu-text">
                                Please check on the error !
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success hide-form" data-alert="success">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">
                    <i class="lnr lnr-cross">
                    </i>
                </button>
                <div class="content-list list-xs list-vm">
                    <div class="list-wrapper">
                        <div class="list-item pd-0">
                            <div class="menu-item menu-icon">
                                <i class="lnr lnr-checkmark-circle  text-success-0 font-xs-5">
                                </i>
                            </div>
                            <div class="menu-item menu-text">
                                <strong>
                                    Success!
                                </strong>You've been added to our email list.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group">
                <input class="form-control" placeholder="Email Address" type="email" required="" name="newsletter-email" id="newsletter-email">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" data-button="submit" id="submit-newsletter" name="submit-newsletter">
                        Go!
                    </button>
                </span>
            </div>
        </form>

    </div>
</div>