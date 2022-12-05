<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ URL::asset("css/shards-ui.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("css/style.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("css/form.css") }}">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

  @if ($state)
      {{-- form details --}}
      <div class="card container mt-5 mb-5"> 
        <div class="main-content-container container-fluid px-4 mt-4">
          <div class="text-center mb-5" id="form-info" form-id="{{$form->id}}">
            <div class="py-3">
              <hr>
            </div>

            {{-- Title of form --}}
            <h5 id="form-title">{{$form->title}}</h5>
            {{-- Description of Form --}}
            <div class="description w-75"><h6 class="px-5" id="form-description">{{$form->description}}</h6></div>
            <small>*required</small>
            
            {{-- Form Questions --}}
            <form class="m-4" method="POST" action="">
              <input type="hidden" name="_token" value="dYbto4BfJ56UpAvbJWxKBlCFdL60OfmfxSvmVWhC">
              <?php $Qnum=1; ?>
                            

              {{-- check if there choice Qs --}}
              @if (count($form->choiceQuestions))
                {{-- Choice Quetions --}}
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                  <div class="card card-small">
                    <div class="card-header border-bottom">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="m-0">Please rate each of the following:*</h6>
                        </div>
                      </div>
                      <div class="pagination-sm">
                        <div class="row justify-content-center">
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="table100">
                        <table> 
                          <tbody class="text-center">                              
                            @foreach ($form->choiceQuestions as $chq)
                            <tr>
                                <th scope="row" id="{{$chq->id}}" class="mb-2 questionText">
                                  {{$chq->description}}
                                </th> 
                                @foreach ($chq->answersChoiceQs as $choice)
                                  <td data-index-name="{{$choice->description}}">{{$choice->description}}<input class="form-check-input" type="radio" name="q{{$Qnum}}"
                                      value="{{$choice->description}}" required=""></td>
                                      <?php $Qnum+=1; ?>
                                @endforeach 
                              </tr> 
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer border-top">
                      <div class="row">
                        <div class="col text-center view-report">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endif

              {{-- check if there short answer Qs --}}
              @if (count($form->singleQuestions))
                {{-- Short Answer Question --}}
                <div class="card ml-5 mr-5">
                  <div class="card-body">
                    @foreach ($form->singleQuestions as $sQ)
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label class="text-left h6" for="q{{$Qnum}}" id="{{$sQ->id;}}">{{$sQ->description;}}</label>
                              <textarea id="q{{$Qnum}}" name="q{{$Qnum}}" class="form-control" style="min-height:75px;" maxlength="4095"
                                required=""></textarea>
                              <?php $Qnum+=1; ?>
                            </div>
                          </div>
                        </div>
                    @endforeach
                  </div>
                </div>
              @endif

              {{-- Button Submit Form --}}
              <div class="m-4 text-center">
                <button class="btn btn-primary" id="submitBtn">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>  
      
  @else
      <div class="text-center pt-5">
      <img src="{{ URL::asset("not found.png") }}">
      <div class="notfound text-center">
        page not valid now please contact us to open it
      </div>
    </div>
  @endif


  <!-- Required for ace Libraries -->
  <script src="{{ asset("js/ace-editor/src-min/ace.js") }}"></script>
  <script src="{{ asset("js/ace-editor/src-min/mode-html.js") }}"></script>
  <script src="{{ asset("js/ace-editor/src-min/ext-language_tools.js") }}"></script>

  <!-- Custome Scripts -->
  <script src="http://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script src="http://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
  <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>