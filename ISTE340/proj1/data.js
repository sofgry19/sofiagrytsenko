/* Array of data 1 */
var data = {
  init:['1','What category would you like for your career to be in?','Select Answer', 'STEM', 'Humanities'],

  STEM:['1','Medical, Engineering, or Computer Science?', 'Select Answer','Medical','Engineering','Computer Science'],
  Humanities:['1','Law, Education, or Art?','Select Answer','Law','Education','Art'],

  Medical:['1','Are you interested in direct patient care?','Select Answer', 'Yes','No'],
  Engineering:['1','Technology or Hands-On?', 'Select Answer','Technology','Hands-On'],
  'Computer Science':['1','What do you consider your strong suit?','Select Answer', 'Front-End Development','Back-End Coding'],
  Law: ['1','Where do you want to work?','Select Answer', 'Government','Private Practice'],
  Education:['1','What is your level of degree?','Select Answer', 'Bachelors','Masters'],
  Art:['1','What medium do you work with?', 'Select Answer','Digital','Traditional'],

  Yes:['1','Public Health Nurse','Public health nurses contribute to systems for monitoring crucial health status indicators such as environmentally caused illnesses, immunization levels, infant mortality rates, and communicable disease occurrence, in order to identify problems that threaten the publics health and develop effective interventions.'],
  No:['1','Hospital Administrator','Hospital administrators are responsible for organizing and overseeing the health services and daily activities of a hospital or healthcare facility. They manage staff and budgets, communicate between departments, and ensure adequate patient care amongst other duties.'],
  Technology:['1','Enviornmental Engineer','Environmental engineers design systems for managing and cleaning municipal water supplies. They work to improve recycling, waste disposal, public health, and water and air pollution control. They also address global issues, such as unsafe drinking water, climate change, and environmental sustainability.'],
  'Hands-On':['1','Mechanical Engineer','Mechanical engineers design power-producing machines, such as electric generators, internal combustion engines, and steam and gas turbines, as well as power-using machines, such as refrigeration and air-conditioning systems. Mechanical engineers design other machines inside buildings, such as elevators and escalators.'],
  'Front-End Development':['1','User Experience Designer','A UX designer is responsible for creating interactive programs that enhance a customers experience with a brand and facilitate an enjoyable experience using various forms of digital and web media.'],
  'Back-End Coding':['1','Software Developer','Developers work with teams of coders to create software programs for computers, mobile devices and websites. They update end-user software and conduct quality control functions. Designing algorithms and flowcharts to create new software programs and systems. Producing efficient and elegant code based on requirements'],
  Government:['1','State Attorney','A States Attorney, along with a phalanx of Assistant States Attorneys, prosecutes criminal and civil cases for the people. Prosecuting attorneys are the voice of the people in Americas courtrooms, enforcing the law and representing the duly elected government at all levels.'],
  'Private Practice':['1','Law Associate','A legal associate is a practicing junior attorney at a law firm who works on cases for clients, conducts legal research, and provides legal advice to clients. Other job duties include developing and implementing litigation strategies, supervising legal assistants and paralegals, and representing clients in court.'],
  Bachelors:['1','Preschool Teacher','Preschool teachers are responsible for the early education of children in their care. Provide basic needs for children. Provide tools and resources for children to use and explore during learning and play activities. Adapt teaching methods and materials to meet the interests and learning styles of children.'],
  Masters:['1','Highschool Teacher','High school teachers typically do the following: Plan lessons and instruct their students in the subject they teach. Prepare students for standardized tests required by the state. Develop and enforce classroom rules and administrative policies.'],
  Digital:['1','Graphic Designer','Graphic designers create visual text and imagery concepts, by hand or using computer software, to communicate ideas that inspire, inform, or captivate consumers. They develop the overall layout and production design for advertisements, brochures, magazines, and corporate reports, etc.'],
  Traditional:['1','Fashion Designer','Fashion designers sketch designs of clothing, footwear, and accessories. Fashion designers create original clothing, accessories, and footwear. They sketch designs, select fabrics and patterns, and give instructions on how to make the products they design.']
}

/* Array of data 2 */
var data2 = {
  init:['1','What category would you like for your career to be in?','Select Answer', 'Trade', 'No Degree'],

  Trade:['1','What trade?','Select Answer', 'Construction', 'Electricity'],
  'No Degree':['1', 'Do you want to start a business?','Select Answer','y','n'],

  Construction:['1','Level 3.1','Select Answer', 'a', 'b'],
  Electricity:['1','Level 3.2','Select Answer', 'aa','bb'],
  y:['1','Level 3.3','Select Answer', 'aaa', 'bbb'],
  n:['1','Level 3.4','Select Answer', 'aaaa', 'bbbb'],

  a:['1','Level 4.1','Select Answer', 'c', 'd'],
  b:['1','Level 4.2','Select Answer', 'e', 'f'],
  aa:['1','Level 4.3','Select Answer', 'cc', 'dd'],
  bb:['1','Level 4.3','Select Answer', 'ee', 'ff'],
  aaa:['1','Level 4.4','Select Answer', 'ccc', 'ddd'],
  bbb:['1','Level 4.5','Select Answer', 'eee', 'fff'],
  aaaa:['1','Level 4.6','Select Answer', 'cccc', 'dddd'],
  bbbb:['1','Level 4.7','Select Answer', 'eeee', 'ffff'],

  c:['1','Level 5.1','Result1'],
  d:['1','Level 5.2','Result2'],
  e:['1','Level 5.3','Result3'],
  f:['1','Level 5.3','Result4'],
  cc:['1','Level 5.4','Result5'],
  dd:['1','Level 5.5','Result6'],
  ee:['1','Level 5.6','Result7'],
  ff:['1','Level 5.7','Result8'],
  ccc:['1','Level 5.4','Result9'],
  ddd:['1','Level 5.5','Result10'],
  eee:['1','Level 5.6','Result11'],
  fff:['1','Level 5.7','Result12'],
  cccc:['1','Level 5.4','Result13'],
  dddd:['1','Level 5.5','Result14'],
  eeee:['1','Level 5.6','Result15'],
  ffff:['1','Level 5.7','Result16'],

}

/* Block of code that checks if user has visited the page before. If cookies are enabled, it prints accoding to what is stored in cookies.
if cookies are disabled, js will check what is stored in localstorage, and print accordingly */
let cookies = navigator.cookieEnabled;
if(cookies){
    if (getCookie('userName') == '') {
        document.write('<h1>Welcome!</h1>');
    } else {
        document.write('<h1>Welcome back, ' + getCookie('userName') + "!</h1>");
    }
}else{
  var ls = localStorage.getItem("userName");
  if (typeof ls !== 'undefined' && ls !== null){
    document.write('<h1>Welcome back, ' + ls + "!</h1>");
  }else{
    document.write('<h1>Welcome!</h1>');
  }
}


/* Function to build the questions, answer, and form */
function build(dom){
  //getting what the user selected
  console.log(typeof(dom));
  if(typeof(dom)=="string"){
    var hold = data[dom];
  }else{
    var hold = data[dom.value];
  }
  console.log(dom);

  //reset elements on change
  if (dom != 'init') {
    resetElements(dom);
  }

  //if user selected value that is NOT undefined
  if(hold != undefined){

    //Parent Div
    var d = document.createElement('div');
    d.setAttribute('class','container');

    //Question header
    var h2 = document.createElement('h2');
		h2.appendChild(document.createTextNode(hold[1]));
    d.appendChild(h2);

    //Creates the select that holds the answers
    var s = document.createElement('select');
    s.onchange= function(){build(this);};

    //checks if it is a question array or answer array
    //if a question:
    if(hold.length  > 3){
      //adds options to select
      for(let i = 2; i < hold.length; i++){
        var o = document.createElement('option');
        o.value = hold[i];
        o.appendChild(document.createTextNode(hold[i]));
        s.appendChild(o);
      }
      //adds select to div
        d.appendChild(s);
      //adds div to body
        document.getElementsByTagName('body')[0].appendChild(d);
    }
    //If user reached an answer
    else{
      //creates paragraph
      var p = document.createElement('p');
      p.appendChild(document.createTextNode("This job was chosen based on your selections: "));
      var choices = document.getElementsByTagName("select");
      //Grabs user's choices
      for(let i = 0; i < choices.length; i++){
        p.appendChild(document.createTextNode(choices[i].value));
        p.appendChild(document.createTextNode(", "));
      }

      for(let i = 2; i < hold.length; i++){
        p.appendChild(document.createElement('br'));
        p.value = hold[i];
        p.appendChild(document.createTextNode(hold[i]));
        console.log(hold[i]);
      }
        //create form
        var f = document.createElement("form");
        f.setAttribute("id","userForm");
        f.setAttribute("name","userForm");
        f.setAttribute("onsubmit","return validateForm();");

        //creates labels
        var uLabel = document.createElement("label");
        uLabel.setAttribute("for","username");
        uLabel.appendChild(document.createTextNode("Your Name: "));
        var aLabel = document.createElement("label");
        aLabel.setAttribute("for","age");
        aLabel.appendChild(document.createTextNode("Your Age: "));

        //creates new line
        var s1 = document.createElement("br");
        var s2 = document.createElement("br");

        //creates actual user input items
        var uInput = document.createElement("input");
        uInput.setAttribute("type","text");
        uInput.setAttribute("name","userName");
        uInput.setAttribute("placeholder","Your Name...");
        var aInput = document.createElement("input");
        aInput.setAttribute("type","number");
        aInput.setAttribute("name","age");
        aInput.setAttribute("min","0");
        aInput.setAttribute("placeholder","Your Age...");

        //creates submit
        var submit = document.createElement("input");
        submit.setAttribute("type","submit");
        submit.setAttribute("value","Submit");

        //adds everything to form
        f.appendChild(uLabel);
        f.appendChild(uInput);
        f.appendChild(s1);
        f.appendChild(aLabel);
        f.appendChild(aInput);
        f.appendChild(s2);
        f.appendChild(submit);

        //complete the answer div
        d.appendChild(p);
        d.appendChild(f);
        document.getElementsByTagName('body')[0].appendChild(d);
    }
  }else{
    //user chooses undefined answer
  }
}

/* Function to delete elements on change */
function resetElements(dom){
  while(dom != dom.parentNode.parentNode.lastChild.lastChild) {
        dom.parentNode.parentNode.removeChild(dom.parentNode.parentNode.lastChild);
    }
}

/* Function that validates the form values */
function validateForm() {
    var boolean = true;
    //if the input is not valid, do not let the user continue
        if(document.forms["userForm"]["userName"].value== "") {
            document.getElementById(document.forms["userForm"]["userName"].style.backgroundColor="red");
            boolean = false;
            console.log("name is empty");
        }
        if(document.forms["userForm"]["age"].value== "") {
            document.getElementById(document.forms["userForm"]["age"].style.backgroundColor="red");
            boolean = false;
            console.log("age is empty");
        }
        //sets cookies and localstorage for returning users
        if (boolean) {
              setCookie("userName", document.forms["userForm"]["userName"].value);
              setCookie("age", document.forms["userForm"]["age"].value);

              localStorage.setItem("userName", document.forms["userForm"]["userName"].value);
              localStorage.setItem("age", document.forms["userForm"]["age"].value);
            /*var titles = document.getElementsByTagName('h2');
            setCookie("result", titles[titles.length-1]);*/
        }
    return boolean;
}

/* Function to set cookie */
function setCookie(cname, cvalue) {
  const d = new Date();
  d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

/* Function to get cookie */
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
