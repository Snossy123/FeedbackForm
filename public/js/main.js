let codeEditoreditor = document.querySelector("#editor");
var preview = document.getElementById('preview');
var results = document.querySelector('.editor-results');
var publish = document.getElementById('publish');
let defaultCode = `
<div> 
    <div class="main-content-container container-fluid px-4 mt-4">
      <div class="text-center mb-5">
        <div class="py-3">
          <hr>
        </div>

        {{-- Title of form --}}
        <h5 id="form-title">Your Feedback Matters!</h5>
        {{-- Description of Form --}}
        <div class="description w-75"><h6 class="px-5" id="form-description">We hope you are enjoying using the Analog Designer*s Toolbox (ADT)!<br>
        We would love to hear your feedback and we will gladly give you one gift token in return!</h6></div>
        <small>*required</small>
        
        {{-- Form Questions --}}
        <form class="m-4" method="POST" action="http://127.0.0.1:8000/user/feedback/submit">
          <input type="hidden" name="_token" value="dYbto4BfJ56UpAvbJWxKBlCFdL60OfmfxSvmVWhC">
          
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
                      <tr>
                        <th scope="row" class="mb-2 questionText">
                          ADT in General
                        </th>
                        <td data-index-name="Very poor">Very poor<input class="form-check-input" type="radio" name="q1"
                            value="Very poor" required=""></td>
                        <td data-index-name="Poor">Poor<input class="form-check-input" type="radio" name="q1" value="Poor"
                            required=""></td>
                        <td data-index-name="Average">Average<input class="form-check-input" type="radio" name="q1"
                            value="Average" required=""></td>
                        <td data-index-name="Good">Good<input class="form-check-input" type="radio" name="q1" value="Good"
                            required=""></td>
                        <td data-index-name="Excellent">Excellent<input class="form-check-input" type="radio" name="q1"
                            value="Excellent" required=""></td>
                      </tr>
                      <tr>
                        <th scope="row" class="mb-2 questionText">
                          LUT Generation
                        </th>
                        <td data-index-name="Very poor">Very poor<input class="form-check-input" type="radio" name="q2"
                            value="Very poor" required=""></td>
                        <td data-index-name="Poor">Poor<input class="form-check-input" type="radio" name="q2" value="Poor"
                            required=""></td>
                        <td data-index-name="Average">Average<input class="form-check-input" type="radio" name="q2"
                            value="Average" required=""></td>
                        <td data-index-name="Good">Good<input class="form-check-input" type="radio" name="q2" value="Good"
                            required=""></td>
                        <td data-index-name="Excellent">Excellent<input class="form-check-input" type="radio" name="q2"
                            value="Excellent" required=""></td>
                      </tr>
                      <tr>
                        <th scope="row" class="mb-2 questionText">
                          Device Xplore
                        </th>
                        <td data-index-name="Very poor">Very poor<input class="form-check-input" type="radio" name="q3"
                            value="Very poor" required=""></td>
                        <td data-index-name="Poor">Poor<input class="form-check-input" type="radio" name="q3" value="Poor"
                            required=""></td>
                        <td data-index-name="Average">Average<input class="form-check-input" type="radio" name="q3"
                            value="Average" required=""></td>
                        <td data-index-name="Good">Good<input class="form-check-input" type="radio" name="q3" value="Good"
                            required=""></td>
                        <td data-index-name="Excellent">Excellent<input class="form-check-input" type="radio" name="q3"
                            value="Excellent" required=""></td>
                      </tr>
                      <tr>
                        <th scope="row" class="mb-2 questionText">
                          DDB Generation
                        </th>
                        <td data-index-name="Very poor">Very poor<input class="form-check-input" type="radio" name="q4"
                            value="Very poor" required=""></td>
                        <td data-index-name="Poor">Poor<input class="form-check-input" type="radio" name="q4" value="Poor"
                            required=""></td>
                        <td data-index-name="Average">Average<input class="form-check-input" type="radio" name="q4"
                            value="Average" required=""></td>
                        <td data-index-name="Good">Good<input class="form-check-input" type="radio" name="q4" value="Good"
                            required=""></td>
                        <td data-index-name="Excellent">Excellent<input class="form-check-input" type="radio" name="q4"
                            value="Excellent" required=""></td>
                      </tr> 
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

          {{-- Short Answer Question --}}
          <div class="card ml-5 mr-5">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="text-left h6" for="q10">The positive feedback: Is there anything good you want
                      to say about ADT?*</label>
          
                    <textarea id="q10" name="q10" class="form-control" style="min-height:75px;" maxlength="4095"
                      required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="text-left h6" for="q11">The negative feedback: What are the things that are
                      missing or you don*t like in ADT? If you didn*t choose "Very likely" in the above
                      questions, what should be improved or added to change your response to "Very
                      likely"?*</label>
          
                    <textarea id="q11" name="q11" class="form-control" style="min-height:75px;" maxlength="4095"
                      required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="text-left h6" for="q12">Anything else you want to say?</label>
          
                    <textarea id="q12" name="q12" class="form-control" style="min-height:75px;" maxlength="4095"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- Button Submit Form --}}
          <div class="m-4 text-center">
            <button class="btn btn-primary" id="submitBtn" onclick="this.disabled=true;this.form.submit();">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>  

                `;


// code editor config
let codeEditor = ace.edit(editor, {
  theme: "ace/theme/cobalt",
  mode: "ace/mode/html",
});

codeEditor.setOptions({
  fontSize: "30px",
  enableBasicAutocompletion: true,
  enableLiveAutocompletion: true
});

codeEditor.setValue(defaultCode);


// output of user code
preview.addEventListener("click", displayForm);

function displayForm() {
  const userCode = codeEditor.getValue();
  var child = results.lastElementChild;
  if (child != null) { results.removeChild(child); }
  results.innerHTML = userCode;
}

publish.addEventListener("click", getFormInfo);

function getFormInfo(){

  let title = $("#form-title").text().trim();
  let description = $("#form-description").text().trim();
  let chooseQuetions = {}
  let singleQuetions = []
  
  $("table > tbody > tr").each(function () { 
    let Quetion = $(this).find('th').text();
    let Chooses = []
    for (let index = 0; index < Object.entries($(this).find('td')).length - 2; index++) {
      const element = Object.entries($(this).find('td'))[index];
      Chooses.push(element[1].getAttribute('data-index-name').trim());
    }
    chooseQuetions[Quetion] = Chooses;
  });
  
  $(".form-group").each(function () { 
    singleQuetions.push($(this).find('label').text().trim());
  });

  saveData(title, description, chooseQuetions, singleQuetions);
}

function saveData(title, description, chooseQuetions, singleQuetions){
  $.ajax({
    type:'POST',
    url:'/form/publish',
    data: {title:title, description:description, choiceQ:chooseQuetions, singleQ:singleQuetions},
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success:function(data){
       alert(data.msg);
       var link = document.querySelector('.form-link'); 
       link.innerHTML = "http://127.0.0.1:8000/feedback/" + data.title;
       link['href'] = "http://127.0.0.1:8000/feedback/" + data.title;
    }
  });
}

// dropdown menu
let dropdownBtn = document.querySelector('.dropdown-toggle');
dropdownBtn.addEventListener("click", dispalyMenu);
function dispalyMenu(){
  var menu = document.querySelector('.dropdown-menu');
  if(menu.style.display == "none"){
    menu.style.display = "block";
  } else{
    menu.style.display = "none";
  }
}

// get forms just page load and put it in dropdown
document.addEventListener("DOMContentLoaded", function() {
  $.ajax({
    type:'GET',
    url:'/form/retrieve',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success:function(data){
      let forms = data.forms;
      let formsDiv = document.querySelector('.forms');
      forms.forEach(element => {
        let checked = ""
        if(element.status){checked = "checked";}
        child = `<div class="dropdown-item">
                    <input type="checkbox" id="${element.id}" name="${element.id}" value="${element.title}" ${checked}>
                    <label for="${element.id}"> ${element.title}</label><br>
                </div>`
        formsDiv.innerHTML +=child; 
      });

    }
  });
});

// when change forms active state
let saveBtn = document.querySelector('.dropdown-menu button');
saveBtn.addEventListener("click", updateForm);

function updateForm(){
  let forms = document.querySelector('.dropdown-menu .forms');
  let formsInfo = {}
  $(".dropdown-menu .forms").each(function () { 
    let items = $(this).find('.dropdown-item');
    let elements = Object.entries(items)
    for (let index = 0; index < elements.length-2; index++) {
      let input = elements[index][1].querySelector('input');
      formsInfo[input['id']] = 0;
      if($(input).is(':checked')){formsInfo[input['id']] = 1;} 
    }
  });
  console.log(formsInfo);
  $.ajax({
    type:'POST',
    url:'/form/update',
    data: {"forms":formsInfo},
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success:function(data){
       alert(data.msg);
    }
  });
}


// // submit form feedback
// let submitBtn = document.querySelector('#submitBtn');
// submitBtn.addEventListener("click", sendForm);

// function sendForm(){ 
//   let formId = document.querySelector('#form-info')['form-id'];
//   let chooseQuetions = {}
//   let singleQuetions = {}
  
//   $("table > tbody > tr").each(function () { 
//     let key = $(this).find('th')['id'];
//     let value = $("input[name='qch']:checked")['id'];
//     chooseQuetions[key] = value;
    
//   });

//   $(".form-group").each(function () { 
//     let key = $(this).find('label')['id'];
//     let value = $(this).find('textarea').text().trim();
//     singleQuetions[key] = value;
    
//   });

//   saveReply(formId, chooseQuetions, singleQuetions);

// }

// function saveReply(){
//   $.ajax({
//     type:'POST',
//     url:'/form/submit',
//     data: {formId:formId, choiceQ:chooseQuetions, singleQ:singleQuetions},
//     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//     success:function(data){
//        alert(data.msg);
//       }
//   });
// }

