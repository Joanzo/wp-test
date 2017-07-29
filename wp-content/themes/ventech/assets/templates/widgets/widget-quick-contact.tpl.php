<div class="widget">
    <h3 class="widget-title">
        Quick Contact
    </h3>
    <div class="widget-body">
        <form id="quick-contact-form" action="functions/quick-contact.php" class="form-horizontal" data-form="validate">
            <input type="hidden" id="to-email" name="to-email" value="info@venmond.com">
            <input type="hidden" id="to-name" name="to-name" value="Venmond, Inc.">
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
                                Message successfully sent !
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="label-wrapper">
                        <label for="quick-name-field" class="control-label font-xs-2 font-light">
                            Name
                            <span class="text-danger">
                                *
                            </span>
                        </label>
                    </div>
                    <div id="name-input-wrapper">
                        <input type="text" placeholder="John" id="quick-name-field" name="quick-name-field" required="" class="form-control input-minimal">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="label-wrapper">
                        <label for="quick-email-field" class="control-label font-xs-2 font-light">
                            Email
                            <span class="text-danger">
                                *
                            </span>
                        </label>
                    </div>
                    <div id="email-input-wrapper">
                        <input type="email" placeholder="name@company.com" id="quick-email-field" name="quick-email-field" required="" class="form-control input-minimal">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="label-wrapper">
                        <label for="quick-message-field" class="control-label font-xs-2 font-light">
                            Message
                            <span class="text-danger">
                                *
                            </span>
                        </label>
                    </div>
                    <div id="message-input-wrapper">
                        <textarea rows="10" cols="32" name="quick-message-field" id="quick-message-field" class="form-control input-minimal" required=""  data-rule-minlength="6" >
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button name="quick-submit" id="quick-submit" type="submit" class="btn btn-success" data-button="submit">
                        Submit
                    </button>
                </div>

            </div>
        </form>

    </div>
</div>
<!-- .widget -->