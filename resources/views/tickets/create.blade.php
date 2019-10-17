@extends('layouts.master')

{{-- @section('content')
    <article class="content forms-page">
        <div class="title-block">
            <h3 class="title"> Forms </h3>
            <p class="title-description"> Sample form elements </p>
        </div>
        <div class="subtitle-block">
            <h3 class="subtitle"> Modular Admin Inputs </h3>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Underlined Inputs </h3>
                        </div>
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label">Input Text</label>
                                <input type="text" class="form-control underlined">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Input Password</label>
                                <input type="password" class="form-control underlined">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Placeholder Input</label>
                                <input type="text" class="form-control underlined" placeholder="Placeholder text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Disabled Input</label>
                                <input type="text" disabled="disabled" class="form-control underlined" placeholder="Disabled input text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Static control</label>
                                <p class="form-control-static underlined">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Readonly Input</label>
                                <input type="text" readonly="readonly" class="form-control underlined" value="Readonly input text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Textarea</label>
                                <textarea rows="3" class="form-control underlined"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Underlined Inputs Validation </h3>
                        </div>
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label">Input with success</label>
                                <input type="text" class="form-control underlined">
                                <span class="has-success">Success message.</span>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label">Input with warning</label>
                                <input type="text" class="form-control underlined">
                                <span class="has-warning">Warning message.</span>
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label">Input with error</label>
                                <input type="text" class="form-control underlined">
                                <span class="has-error">Error message.</span>
                            </div>
                            <div class="form-group has-success  has-feedback">
                                <label class="control-label">Input with success icon</label>
                                <input type="text" class="form-control underlined">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group has-warning  has-feedback">
                                <label class="control-label">Input with warning icon</label>
                                <input type="text" class="form-control underlined">
                                <span class="fa fa-exclamation form-control-feedback"></span>
                            </div>
                            <div class="form-group has-error  has-feedback">
                                <label class="control-label">Input with error icon</label>
                                <input type="text" class="form-control underlined">
                                <span class="fa fa-times form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Boxed Inputs </h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <label class="control-label">Input Text</label>
                                <input type="text" class="form-control boxed">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Input Password</label>
                                <input type="password" class="form-control boxed">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Placeholder Input</label>
                                <input type="text" class="form-control boxed" placeholder="Placeholder text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Disabled Input</label>
                                <input type="text" disabled="disabled" class="form-control boxed" placeholder="Disabled input text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Static control</label>
                                <p class="form-control-static boxed">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Readonly Input</label>
                                <input type="text" readonly="readonly" class="form-control boxed" value="Readonly input text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Textarea</label>
                                <textarea rows="3" class="form-control boxed"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Boxed Inputs Validation </h3>
                        </div>
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label">Input with success</label>
                                <input type="text" class="form-control boxed">
                                <span class="has-success">Success message.</span>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label">Input with warning</label>
                                <input type="text" class="form-control boxed">
                                <span class="has-warning">Warning message.</span>
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label">Input with error</label>
                                <input type="text" class="form-control boxed">
                                <span class="has-error">Error message.</span>
                            </div>
                            <div class="form-group has-success  has-feedback">
                                <label class="control-label">Input with success icon</label>
                                <input type="text" class="form-control boxed">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group has-warning  has-feedback">
                                <label class="control-label">Input with warning icon</label>
                                <input type="text" class="form-control boxed">
                                <span class="fa fa-exclamation form-control-feedback"></span>
                            </div>
                            <div class="form-group has-error  has-feedback">
                                <label class="control-label">Input with error icon</label>
                                <input type="text" class="form-control boxed">
                                <span class="fa fa-times form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block">
                        <div class="title-block">
                            <h3 class="title"> Radio Types </h3>
                        </div>
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label">Radios</label>
                                <div>
                                    <label>
                                        <input class="radio" name="radios" type="radio">
                                        <span>Option one</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="radio" type="radio" name="radios" checked="checked">
                                        <span>Option two checked</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="radio" type="radio" name="disabled-radios" disabled="disabled" checked="checked">
                                        <span>Option three checked and disabled</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="radio" type="radio" name="disabled-radios" disabled="disabled">
                                        <span>Option four disabled</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Inline Radios</label>
                                <div>
                                    <label>
                                        <input class="radio" name="inline-radios" type="radio">
                                        <span>a</span>
                                    </label>
                                    <label>
                                        <input class="radio" name="inline-radios" type="radio">
                                        <span>b</span>
                                    </label>
                                    <label>
                                        <input class="radio" name="inline-radios" type="radio">
                                        <span>c</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Squared Radios</label>
                                <div>
                                    <label>
                                        <input class="radio squared" name="squared-radios" checked="checked" type="radio">
                                        <span>Checked</span>
                                    </label>
                                    <label>
                                        <input class="radio squared" name="squared-radios" type="radio">
                                        <span>Unchecked</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block">
                        <div class="title-block">
                            <h3 class="title"> Checkboxe Types </h3>
                        </div>
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label">Checkboxes</label>
                                <div>
                                    <label>
                                        <input class="checkbox" type="checkbox">
                                        <span>Option one</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="checkbox" type="checkbox" checked="checked">
                                        <span>Option two checked</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="checkbox" type="checkbox" disabled="disabled" checked="checked">
                                        <span>Option three checked and disabled</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="checkbox" type="checkbox" disabled="disabled">
                                        <span>Option four disabled</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Inline Checkboxes</label>
                                <div>
                                    <label>
                                        <input class="checkbox" type="checkbox">
                                        <span>a</span>
                                    </label>
                                    <label>
                                        <input class="checkbox" type="checkbox">
                                        <span>b</span>
                                    </label>
                                    <label>
                                        <input class="checkbox" type="checkbox">
                                        <span>c</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Rounded Checkboxes</label>
                                <div>
                                    <label>
                                        <input class="checkbox rounded" checked="checked" type="checkbox">
                                        <span>Checked</span>
                                    </label>
                                    <label>
                                        <input class="checkbox rounded" type="checkbox">
                                        <span>Unchecked</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="subtitle-block">
            <h3 class="subtitle"> Bootstrap Inputs </h3>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Default Bootstrap Inputs </h3>
                        </div>
                        <form role="form">
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput">Input Text</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput2">Input Password</label>
                                <input type="password" class="form-control" id="formGroupExampleInput2">
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput3">Placeholder input</label>
                                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Placeholder text">
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput4">Disabled input</label>
                                <input type="text" disabled="disabled" class="form-control" id="formGroupExampleInput4" placeholder="Disabled input text">
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput5">Static control</label>
                                <p class="form-control-static" id="formGroupExampleInput5">email@example.com</p>
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput6">Readonly input</label>
                                <input type="text" readonly="readonly" class="form-control" id="formGroupExampleInput6" value="Readonly input text">
                            </fieldset>
                            <fieldset class="form-group">
                                <label class="control-label" for="formGroupExampleInput7">Textarea</label>
                                <textarea rows="3" class="form-control" id="formGroupExampleInput7"></textarea>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Default Bootstrap Inputs Validation </h3>
                        </div>
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label">Input with success</label>
                                <input type="text" class="form-control">
                                <span class="has-success">Success message.</span>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label">Input with warning</label>
                                <input type="text" class="form-control">
                                <span class="has-warning">Warning message.</span>
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label">Input with error</label>
                                <input type="text" class="form-control">
                                <span class="has-error">Error message.</span>
                            </div>
                            <div class="form-group has-success  has-feedback">
                                <label class="control-label">Input with success icon</label>
                                <input type="text" class="form-control">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group has-warning  has-feedback">
                                <label class="control-label">Input with warning icon</label>
                                <input type="text" class="form-control">
                                <span class="fa fa-exclamation form-control-feedback"></span>
                            </div>
                            <div class="form-group has-error  has-feedback">
                                <label class="control-label">Input with error icon</label>
                                <input type="text" class="form-control">
                                <span class="fa fa-times form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Input Groups </h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <label class="control-label">Input Text</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Some text here">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Some text here">
                                    <span class="input-group-addon">.00</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" placeholder="Some text here">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Input Sizing</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block">
                        <div class="panel-title-block">
                            <h3 class="title"> Custom Bootstrap Select/File </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="subtitle-block">
            <h3 class="subtitle"> Input Sizing </h3>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Control Sizing </h3>
                        </div>
                        <form role="form">
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-lg">
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-sm">
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Column sizing </h3>
                        </div>
                        <form role="form">
                            <div class="row form-group">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder=".col-6">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder=".col-6">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder=".col-7">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                                <div class="col-2 col-offset-1">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                                <div class="col-2 col-offset-2">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                                <div class="col-2 col-offset-1">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-4 col-offset-1">
                                    <input type="text" class="form-control" placeholder=".col-4">
                                </div>
                                <div class="col-3 col-offset-1">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder=".col-4">
                                </div>
                                <div class="col-3 col-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder=".col-2">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-5 col-offset-1">
                                    <input type="text" class="form-control" placeholder=".col-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="subtitle-block">
            <h3 class="subtitle"> Form Layouts </h3>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Basic Forms </h3>
                        </div>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Forms Using the Grid </h3>
                        </div>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card card-block sameheight-item">
                        <div class="title-block">
                            <h3 class="title"> Inline Forms </h3>
                        </div>
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection --}}
