@extends('layouts.web.master-without-nav')

@section('content')

    <!-- Top content -->
    <div class="top-content">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1>Free <strong>Bootstrap</strong> Wizard</h1>
                    <div class="description">
                        <p>
                            This is a free responsive Bootstrap form wizard.
                            Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it
                            as you like!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    <form role="form" action="" method="post" class="f1">

                        <h3>Register To Our App</h3>
                        <p>Fill in the form to get instant access</p>
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"
                                     style="width: 16.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                <p>about</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                <p>account</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                <p>social</p>
                            </div>
                        </div>

                        <fieldset>
                            <h4>Tell us who you are:</h4>
                            <div class="form-group">
                                <label class="sr-only" for="f1-first-name">First name</label>
                                <input type="text" name="f1-first-name" placeholder="First name..."
                                       class="f1-first-name form-control" id="f1-first-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-last-name">Last name</label>
                                <input type="text" name="f1-last-name" placeholder="Last name..."
                                       class="f1-last-name form-control" id="f1-last-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                <textarea name="f1-about-yourself" placeholder="About yourself..."
                                          class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Set up your account:</h4>
                            <div class="form-group">
                                <label class="sr-only" for="f1-email">Email</label>
                                <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control"
                                       id="f1-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-password">Password</label>
                                <input type="password" name="f1-password" placeholder="Password..."
                                       class="f1-password form-control" id="f1-password">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                <input type="password" name="f1-repeat-password" placeholder="Repeat password..."
                                       class="f1-repeat-password form-control" id="f1-repeat-password">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Social media profiles:</h4>
                            <div class="form-group">
                                <label class="sr-only" for="f1-facebook">Facebook</label>
                                <input type="text" name="f1-facebook" placeholder="Facebook..."
                                       class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-twitter">Twitter</label>
                                <input type="text" name="f1-twitter" placeholder="Twitter..."
                                       class="f1-twitter form-control" id="f1-twitter">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-google-plus">Google plus</label>
                                <input type="text" name="f1-google-plus" placeholder="Google plus..."
                                       class="f1-google-plus form-control" id="f1-google-plus">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
