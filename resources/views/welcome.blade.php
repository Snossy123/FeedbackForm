<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/shards-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/form.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
    <div class="container card mt-5 mb-5">
        <div class="card-header">
            <h3 class="question">Please Enter Code HTML for your Feedback Form</h3>
        </div> 
        <div class="card-body editor-container">
            <div id="editor"></div>
            <div class="editor-options">
                <button class="btn btn-primary editor-btn" id="preview">
                    Preview
                </button>
                <div class="input-group mb-3 w-50">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary" id="publish">
                            Publish
                        </button>
                    </div>
                    <div class="form-control"><a class="form-link" href="#"></a></div>
                </div>


                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle  mx-3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Manage Forms
                    </button>
                    <div class="dropdown-menu">
                        <div class="forms">
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item text-center bg-primary text-white">Save</button>
                    </div>
                </div>

            </div> 
        </div>
        
        <div class="card-footer editor-results">

        </div>
    </div>
    <!-- Required for ace Libraries -->
    <script src="{{ asset('js/ace-editor/src-min/ace.js') }}"></script>
    <script src="{{ asset('js/ace-editor/src-min/mode-html.js') }}"></script>
    <script src="{{ asset('js/ace-editor/src-min/ext-language_tools.js') }}"></script>

    <!-- Custome Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
